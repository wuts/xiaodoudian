<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller
{
	function __construct()
	{
		parent::Admin_Controller();
		$this->load->library('validation');
		$this->load->model('statistics_m');
		$this->lang->load('statistics');
	}
	
	// Admin: List all statistics
	public function index()
	{
		$this->load->helper('text');
		// Create pagination links
		$total_rows = $this->statistics_m->countStatisticss(array('is_active' => 0));
		$this->data->pagination = create_pagination('admin/statistics/index', $total_rows);
		
		// get all statistics
		$this->data->statistics = $this->statistics_m->getStatisticss(array(
			'is_active' => 0,
			'limit' => $this->data->pagination['limit']			
		));
				
		$this->data->active_statistics = FALSE;
		$this->layout->create('admin/index', $this->data);			
	}
	
	public function active()
	{
		$this->load->helper('text');
		// Create pagination links
		$total_rows = $this->statistics_m->countStatisticss(array('is_active' => 1));
		$this->data->pagination = create_pagination('admin/statistics/active', $total_rows);
		
		// Get a list of all modules
		$modules = $this->statistics_m->getUsedModules();
		
		// get all statistics
		$this->data->statistics = $this->statistics_m->getStatisticss(array(
			'is_active' => 1,
			'limit' => $this->data->pagination['limit']				
		));

		$this->data->modules = $modules + array('module' => 'all');
		$this->data->active_statistics = TRUE;
		$this->layout->create('admin/index', $this->data);		
	}
		
	// Admin: Edit a statistics
	public function edit($id = 0)
	{
		if (!$id) redirect('admin/statistics/index');
				
		$rules['name'] = 'trim';
		$rules['email'] = 'trim|valid_email';
		$rules['body'] = 'trim|required';
		
		if(!$this->user_lib->logged_in())
		{
			$rules['name'] .= '|required';
			$rules['email'] .= '|required';
		}
		
		$this->validation->set_rules($rules);
		$this->validation->set_fields();		
		
		$statistics = $this->statistics_m->getStatistics($id);
		
		// Validation Successful ------------------------------
		if ($this->validation->run())
		{		
			if($statistics->user_id > 0)
			{
				$statisticser['user_id'] = $this->input->post('user_id');
			}
			else
			{
				$statisticser['name'] = $this->input->post('name');
				$statisticser['email'] = $this->input->post('email');
			}
			
			$statistics = array_merge($statisticser, array(
				'body'    => $this->input->post('body'),
				'module'   => $this->input->post('module'),
				'module_id' => $this->input->post('module_id')
			));
			
			if($this->statistics_m->updateStatistics( $statistics, $id ))
			{
				$this->session->set_flashdata( 'success', $this->lang->line('statistics_edit_success') );
			}
			else
			{
				$this->session->set_flashdata( 'error', $this->lang->line('statistics_edit_error') );
			}
			
			redirect('admin/statistics/index');
		}		
		
		// Go through all the known fields and get the post values
		foreach(array_keys($rules) as $field)
		{
			if(isset($_POST[$field])) $statistics->$field = $this->validation->$field;
		}    	
		$this->data->statistics =& $statistics;
		
		// Load WYSIWYG editor
		$this->layout->extra_head( $this->load->view('fragments/wysiwyg', $this->data, TRUE) );		
		$this->layout->create('admin/form', $this->data);
	}	
		
	// Admin: Delete a statistics
	public function delete($id = 0)
	{
		// Delete one
		$ids = ($id) ? array($id) : $this->input->post('action_to');
		
		// Go through the array of ids to delete
		$statistics = array();
		foreach ($ids as $id)
		{
			// Get the current statistics so we can grab the id too
			if($statistics = $this->statistics_m->getStatistics($id))
			{
				$this->statistics_m->deleteStatistics($id);
				
				// Wipe cache for this model, the content has changed
				$this->cache->delete('statistics_m');
				$statistics[] = $statistics->id;
			}
		}
		
		// Some statistics have been deleted
		if(!empty($statistics))
		{
			// Only deleting one statistics
			if(count( $statistics ) == 1)
			{
				$this->session->set_flashdata( 'success', sprintf($this->lang->line('statistics_delete_single_success'), $statistics[0]) );
			}			
			// Deleting multiple statistics
			else
			{
				$this->session->set_flashdata( 'success', sprintf( $this->lang->line('statistics_delete_multi_success'), implode( ', #', $statistics ) ) );
			}
		}
		
		// For some reason, none of them were deleted
		else
		{
			$this->session->set_flashdata( 'error', $this->lang->line('statistics_delete_error') );
		}
			
		redirect('admin/statistics/index');
	}
	
	// Admin: activate a statistics
	public function approve($id = 0)
	{
		if (!$id) redirect('admin/statistics/index');
					
		if($this->statistics_m->approveStatistics($id, 1))
		{
			$this->session->set_flashdata( array('success'=> $this->lang->line('statistics_approve_success')) );
		}
		else
		{
			$this->session->set_flashdata( array('error'=> $this->lang->line('statistics_approve_error')) );
		}
		redirect('admin/statistics/index');
	}
	
	// Admin: deativate a statistics
	public function unapprove($id = 0)
	{
		if (!$id) redirect('admin/statistics/index');
					
		if($this->statistics_m->approveStatistics($id, 0))
		{
			$this->session->set_flashdata( array('success'=> $this->lang->line('statistics_unapprove_success')) );
		}
		else
		{
			$this->session->set_flashdata( array('error'=> $this->lang->line('statistics_unapprove_error')) );
		}
		redirect('admin/statistics/index');
	}
	
	public function preview($id = 0)
	{		
		$this->data->statistics = $this->statistics_m->getStatistics($id);
		$this->layout->wrapper(FALSE);
		$this->layout->create('admin/preview', $this->data);
	}
}

?>