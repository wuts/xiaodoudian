<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Statisticss extends Public_Controller
{	
	function __construct()
	{
		parent::Public_Controller();		
		$this->load->library('validation');
		$this->load->model('statistics_m');
		$this->lang->load('statistics');
	}
	
	function count($module = 'news', $module_id = 0,$type=array())
	{
                $statistics=$this->statistics_m->countStatistics($module,$module_id);
                if(empty($statistics)){
                   echo "FALSE";
                }
                else
                {
                    if(isset($type['approval'])){
                        echo $statistics[0]->approval_count;
                    }
                    if(isset($type['opposition'])){
                       echo $statistics[0]->opposition_count;
                    }
                     if(isset($type['click'])){
                      echo $statistics[0]->click_count;
                    }
                   
                }
		
	}

       function create($module = 'news', $module_id = 0,$type=array()){
              $statistics=$this->statistics_m->countStatistics($module,$module_id);
                if(isset($type['approval'])){
                   $approval_count=1;
                }
                if(isset($type['opposition'])){
                   $opposition_count=1;
                }
                if(isset($type['click'])){
                   $click_count=1;
                }
                $input=array("approval_count"=>$approval_count,
                              "opposition_count"=>$opposition_count,
                              "click_count"=> $click_count,
                              "module"=>$module,
                              "module_id"=>$module_id
                              );
                $this->statistics_m->newStatistics($input);
       }

       function update($module = 'news', $module_id = 0,$type=array()){
                $statistics=$this->count($module, $module_id);                
                if(isset($type['approval'])){
                   $approval_count=$statistics[0]->approval_count+1;
                }
                if(isset($type['opposition'])){
                   $opposition_count=$statistics[0]->opposition_count+1;
                }
                if(isset($type['click'])){
                   $click_count=$statistics[0]->click_count+1;
                }
                $input=array("approval_count"=>$approval_count,
                             "opposition_count"=>$opposition_count,
                              "click_count"=> $click_count,
                              "module"=>$module,
                              "module_id"=>$module_id
                             );
                $this->statistics_m->updateStatistics($input,$statistics[0]->id);
                
       }
	
}
?>