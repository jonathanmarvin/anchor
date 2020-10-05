<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Levels extends CI_Model {
	
	
	
	  public function get_all_levels()
    {
	$query = $this->db->query("select * from level where status = 1  order by level asc ");
	return $query->result();
    }
    
    
/*	public function level_add(){
		
		$level = $this->input->post('level');
		$data = array(
		'level' => $level
		);
		return $this->db->insert('level',$data);
	}
*/	
	
	public function add_level()
    {    	 
	
	$status		    = $this->input->post('status');	
	$level  		= $this->input->post('level');
	
	$data = array(
	    'level' 		=> $level,
	    'status'	=> $status
	    
	);
	
	$this->db->insert('level', $data);
	$insert_id = $this->db->insert_id();

    return  $insert_id;
    
    }
   
   
   
   
    public function get_level($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('level');
	return $query->result();
    } 
	
  
    public function edit_level($ID = '')
    {
    		
    $status		    = $this->input->post('status');		
	$level 			= $this->input->post('level');
	$data = array(
	    'level' 		=> $level,
	    'status'	=> $status
	    
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('level', $data);
    }
  
  
     public function delete_level($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('level', $data);
    }
  
  
  
    
   /* public function get_all_questions()
    {
	$query = $this->db->query("SELECT qs . * , qz.quiz_name, l.level FROM questions qs, quizes qz, level l WHERE qz.id = qs.quiz_id AND l.id = qz.quiz_level ORDER BY qs.id DESC ");
	return $query->result();
    }
    
    public function get_all_quizes()
    {
	$query = $this->db->query("SELECT * from quizes ");
	return $query->result();
    }
     
    
 */
}

/* Location: ./application/models/jobs.php */