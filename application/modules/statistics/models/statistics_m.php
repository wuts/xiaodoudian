<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Statistics_m extends Model
{
	function __construct()
	{
		parent::Model();
	}	
	
	
	public function countStatistics($module,$module_id)
	{
            if(empty($module) || empty($module_id)){
                return FALSE;
            }
            $this->db->select('s.id,s.click_count,s.approval_count,s.opposition_count');
            $this->db->from('statistics s');
            $this->db->where('s.module', $module);
            $this->db->where('s.module_id', $module_id);
            $query = $this->db->get();
    
            if ($query->num_rows() == 0)
            {
              return FALSE;
            }
            else
            {
    		return $query->result();
            }
  	}
       	
	public function getModule($id)
	{
		$statistics = $this->getStatistics($id);
		return $statistics->module;
	}
		
		
	public function getStatistics($id = 0)
	{
		$this->db->where("id",$id);
                $query=$this->db->get("statistics");
                $result=$query->result();
		if ($query->num_rows() == 0)
                {
                   return FALSE;
                }
                else
                {
    		  $statistics=$query->result();
                  $statistics_o=& $statistics[0];
                  return $statistics_o;
                }
		
	}
	
	public function newStatistics($input)
	{
		$this->db->insert('statistics', array(
			'approval_count'  => isset($input['approval_count'])?$input['approval_count']:0,
			'opposition_count'=> isset($input['opposition_count'])?$input['opposition_count']:0,
			'click_count'	  => isset($input['click_count'])?$input['click_count']:0,			
			'module'	  => $input['module'],
			'module_id'	  => $input['module_id']	
		));
		return $this->db->insert_id();
	}
	
	public function updateStatistics($input, $id = 0)
	{
		$this->db->where('id', $id);
		$set = array(
			'approval_count'  => isset($input['approval_count'])?$input['approval_count']:0,
			'opposition_count'=> isset($input['opposition_count'])?$input['opposition_count']:0,
			'click_count'	  => isset($input['click_count'])?$input['click_count']:0,
			'module'	  => $input['module'],
			'module_id'	  => $input['module_id']
		);
		return $this->db->update('statistics', $set);
	}
	
	
	public function deleteStatistics($id = 0)
	{
		$this->db->delete('statistics', array('id'=>$id));
		return $this->db->affected_rows();
	}		
}
?>