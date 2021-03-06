<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller
{
	function __construct()
	{
		parent::Admin_Controller(); 
		$this->load->model('galleries_m');
		$this->lang->load('galleries');
	}
	
	// Public: List Galleries
	function index()
	{
		$this->load->helper('string');
		
		// Get Galleries and create pages tree
		$tree = array();
		if($galleries = $this->galleries_m->getGalleries())
		{
			foreach($galleries as $gallery)
			{
				$tree[$gallery->parent][] = $gallery;
			}
		}
		unset($galleries);
		$this->data->galleries =& $tree;		
		$this->layout->create('admin/index', $this->data);
	}
	
	// Admin: Create a new Gallery
	function create()
	{
		// Get Galleries and create pages tree
		$tree = array();
		
		if($galleries = $this->galleries_m->getGalleries())
		{
			foreach($galleries as $gallery)
			{
				$tree[$gallery->parent][] = $gallery;
			}
		}
		unset($galleries);
		$this->data->galleries = $tree;		
		$this->load->library('validation');
		$rules['title'] = 'trim|required|max_length[255]|callback__createCheckTitle';
		$rules['description'] = 'trim|required';
		$rules['parent'] = 'trim|numeric';
		$this->validation->set_rules($rules);
		$this->validation->set_fields();
		
		foreach(array_keys($rules) as $field)
		{
			$this->data->gallery->$field = (isset($_POST[$field])) ? $this->validation->$field : '';
		}
		
		if ($this->validation->run())
		{
			if ($this->galleries_m->newGallery($_POST))
			{
				$this->session->set_flashdata('success', sprintf($this->lang->line('gal_add_success'), $this->input->post('title')) );
			}
			else
			{
				$this->session->set_flashdata(array('error'=>$this->lang->line('gal_add_error')));
			}
			redirect('admin/galleries');
		}
		
		// Load WYSIWYG editor
		$this->layout->extra_head( $this->load->view('fragments/wysiwyg', $this->data, TRUE) );		
		$this->layout->create('admin/form', $this->data);
	}
	
	// Admin: Edit a Gallery
	function edit($slug = '')
	{
		$gallery = $this->galleries_m->getGallery($slug);
		
		if (empty($slug) or !$gallery)
		{
			redirect('admin/galleries/index');
		}
		
		$tree = array();
		foreach(@$this->galleries_m->getGalleries() AS $data)
		{
			$tree[$data->parent][] = $data;
		}
		
		$this->data->galleries = $tree;		
		$this->load->library('validation');
		$rules['id'] = '';
		$rules['title'] = 'trim|required|max_length[255]';
		$rules['description'] = 'trim|required';
		$rules['parent'] = 'trim|numeric';
		$this->validation->set_rules($rules);
		$this->validation->set_fields();
		
		// Run through all fields and auto-set data fields
		foreach(array_keys($rules) as $field)
		{
			if(isset($_POST[$field]))
			{
				$gallery->$field = $this->validation->$field;
			}
		}
		
		// Run validation
		if ($this->validation->run())
		{
			if ($this->galleries_m->updateGallery($_POST, $slug))
			{
				$this->session->set_flashdata('success', sprintf($this->lang->line('gal_edit_success'), $gallery->title));
			}
			else
			{
				$this->session->set_flashdata('error', $this->lang->line('gal_edit_error'));
			}
			redirect('admin/galleries');
		}		
		$this->data->gallery =& $gallery;
		
		// Load WYSIWYG editor
		$this->layout->extra_head( $this->load->view('fragments/wysiwyg', $this->data, TRUE) );		
		$this->layout->create('admin/form', $this->data);		
	}
	
	// Admin: Delete a Gallery
	function delete($slug = '')
	{
		// An ID was passed in the URL, lets delete that
		$slugs_array = ($slug != '') ? array($slug) : $this->input->post('action_to');
		
		if(empty($slugs_array))
		{
			$this->session->set_flashdata('error', $this->lang->line('gal_delete_no_select_error'));
			redirect('admin/galleries/index');
		}
		
		$deleted = 0;
		foreach ($slugs_array as $slug)
		{
			if($this->_delete_directory(APPPATH.'assets/img/galleries/'.$slug))
			{
				if($this->galleries_m->deleteGallery($slug))
				{
					$deleted++;
				}				
				else
				{
					$this->session->set_flashdata('error', sprintf($this->lang->line('gal_delete_error'), $slug));
				}
			}			
			else
			{
				$this->session->set_flashdata('error', sprintf($this->lang->line('gal_delete_dir_error'), $slug));
			}
		}
		
		if( $deleted > 0 )
		{
			$this->session->set_flashdata('success', sprintf($this->lang->line('gal_mass_delete_success'), $deleted, count($slugs_array)));
		}		
		redirect('admin/galleries/index');
	}
	
	function _delete_directory($dirname) 
	{ 
		if (is_dir($dirname)) 
			$dir_handle = opendir($dirname); 
		else
			return false; 
		
		while($file = readdir($dir_handle)) 
		{ 
			if ($file != "." && $file != "..") 
			{ 
				if (!is_dir($dirname."/".$file)) 
					if(!@unlink($dirname."/".$file)) return false; 
				else 
					$this->_delete_directory($dirname.'/'.$file);	
			} 
		} 
		
		closedir($dir_handle); 
		if(!@rmdir($dirname))
		{
			return false;
		}		
		return true; 
	}
	
	// Admin: Upload a photo
	function manage($slug = '')
	{	
		if (empty($slug)) redirect('admin/galleries/index');
		
		$this->data->gallery = $this->galleries_m->getGallery($slug); 
		$this->data->photos = $this->galleries_m->getPhotos('',$slug);
		$this->layout->create('admin/manage', $this->data);
	}
	
	
	function upload($slug = '')
	{
		$this->load->library('validation');
                $rules['title'] = 'trim|required';
		$rules['userfile'] = 'trim';
		$rules['description'] = 'trim|required';
                $rules['show_in_homepage'] = 'trim|required';
                $rules['publish'] = 'trim|required';
		$this->validation->set_rules($rules);
		$this->validation->set_fields();
		
		$upload_cfg['upload_path'] = APPPATH.'assets/img/galleries/' . $slug;
		$upload_cfg['allowed_types'] = 'gif|jpg|png';
		$upload_cfg['max_size'] = '2048';
		$upload_cfg['encrypt_name'] = TRUE;
		$this->load->library('upload', $upload_cfg);
		
		if ($this->validation->run())
		{
			if($this->upload->do_upload())
			{
				$image = $this->upload->data();			
				if( $this->galleries_m->addPhoto($image, $slug, $this->input->post('title'),$this->input->post('description'),$this->input->post('show_in_homepage'),$this->input->post('publish')) )
				{
					$this->session->set_flashdata('success', sprintf($this->lang->line('gal_upload_success'), $image['file_name']));
				}				
				else
				{
					$this->session->set_flashdata('error', sprintf($this->lang->line('gal_upload_error'), $image['file_name']));
				}
			}			
			else
			{
				$this->session->set_flashdata('error', $this->upload->display_errors());
			}
		}		
		else
		{
			$this->session->set_flashdata('error', $this->validation->error_string);
		}		
		redirect('admin/galleries/manage/'.$slug);              	
	}


        //Admin:Edit Gallery Photos
        function edit_photo($id=0){
                $this->data->photo=$this->galleries_m->getPhoto($id);
                // Load WYSIWYG editor
		$this->layout->extra_head( $this->load->view('fragments/wysiwyg', $this->data, TRUE) );
		$this->layout->create('admin/photo_edit_form', $this->data);
        }

        //Admin:Edit Gallery Photos
        function update_photo($id=0){
                $this->load->library('validation');		
		$rules['description'] = 'trim|required';
		$this->validation->set_rules($rules);
		$this->validation->set_fields();
                $title=$this->input->post('title');
                $description=$this->input->post('description');
                $show_in_homepage=$this->input->post('show_in_homepage');
                $publish=$this->input->post('publish');
                $slug=$this->input->post('slug');
                if($this->validation->run()){
                    if($this->galleries_m->updatePhoto($title,$description,$show_in_homepage,$publish,$id)){
                        $this->session->set_flashdata('success',$this->lang->line('gal_photo_update_success'));
                    }else{
                        $this->session->set_flashdata('error',$this->lang->line('gal_photo_update_error'));
                    }
                }else{
                  $this->session->set_flashdata('error', $this->validation->error_string);
                }
                redirect('admin/galleries/manage/'.$slug);
        }
	
	// Admin: Update Gallery Photos
	function delete_photo($id = 0)
	{
		$gallery = $this->input->post('gallery');		
		$ids_array = ( $id > 0 ) ? array($id) : $this->input->post('action_to');
		
		if(empty($ids_array))
		{
			$this->session->set_flashdata('error', $this->lang->line('gal_photo_delete_no_select_error'));
		}		
		else
		{
			$deleted = 0;
			foreach ($ids_array as $photo_id)
			{
				if($this->galleries_m->deleteGalleryPhoto($photo_id))
				{
					$deleted++;
				}
			}
		
			if($deleted > 0)
			{
				$this->session->set_flashdata('success', sprintf($this->lang->line('gal_photo_delete_success'), $deleted));
			}        	
			else
			{
				$this->session->set_flashdata('notice', $this->lang->line('gal_photo_delete_error'));
			}
		}		
		redirect('admin/galleries/manage/'.$gallery);
	}

        //admin:change show in homepage
        function ajax_change_show_in_homepage(){
           $id=$this->input->post('id');
           $show_in_homepage=$this->input->post('show_in_homepage');
           if($this->galleries_m->change_show_in_homepage($id,$show_in_homepage)){
               echo "success";
           }else{
               echo "failure";
           }
        }

        //admin:publish photo
        function ajax_publish(){
           $id=$this->input->post('id');
           $publish=$this->input->post('publish');
           if($this->galleries_m->publish($id,$publish)){
               echo "success";
           }else{
               echo "failure";
           }
        }
	
	// Callback: from create()
	function _createTitleCheck($title = '')
	{
		if ($this->galleries_m->checkTitle($title))
		{
			$this->validation->set_message('_createTitleCheck', $this->lang->line('gal_name_already_exist_error'));
			return FALSE;
		}		
		else
		{
			return TRUE;
		}
	}
}
?>
