<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();                
	}
	
	function index()
	{
	
                $data["page_title"]="gdfgdf";
                $this->load->view('welcome_message',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */