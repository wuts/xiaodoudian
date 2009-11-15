<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galleries extends Public_Controller
{
	public $limit = 10; // TODO: PS - Make me a settings option
        function __construct()
	{
		
                parent::Public_Controller();
		$this->load->model('galleries_m');
		$this->lang->load('galleries');
	}
	
	// Public: List Galleries
	function index($slug="")
	{
		//$this->data->galleries = $this->galleries_m->getGalleries(array('parent'=>0));
                $this->load->helper('string');                
                $this->data->pagination = create_pagination('galleries/'.$slug.'/page', $this->galleries_m->countPhotos($slug), $this->limit, 3);
		// Get Galleries and create pages tree
		$tree = array();
		if($galleries = $this->galleries_m->getGalleries(array('photos.publish'=>1)))
		{
			foreach($galleries as $gallery)
			{
				$tree[$gallery->parent][] = $gallery;
			}
		}
		unset($galleries);
		$this->data->galleries =& $tree;
               
               $this->data->photos=$this->galleries_m->galleryListPhotos(array('limit' => $this->data->pagination['limit']),$slug);
                
		$this->layout->create('index', $this->data);
	}
	
	// Public: View an Gallery
	function view($slug = '')
	{
		$this->load->module_model('comments', 'comments_m');		
		if($this->data->gallery = $this->galleries_m->getGallery($slug))
		{
			$this->data->photos = $this->galleries_m->getPhotos($slug);		
			$this->data->children = $this->galleries_m->getGalleries(array('parent'=>$this->data->gallery->id));		
			$this->layout->title($this->data->gallery->title);
			$this->layout->create('view', $this->data);
		}		
		else
		{
			$this->session->set_flashdata('notice', $this->lang->line('gal_already_exist_error'));
			redirect('galleries');
		}
	}    
}
?>