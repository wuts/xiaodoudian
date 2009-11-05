<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends Public_Controller{
    function __Construct(){
        parent::Public_Controller();
        $this->load->model('galleries_m');
        $this->lang->load('galleries');
    }

    function view($id=0){       
        if(empty($id))
           redirect('galleries');
        $this->data->photo=$this->galleries_m->getPhoto($id);
        $this->layout->create('photo_view',$this->data);
    }
}

?>
