<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topics extends CI_Model {
    
   /* public function get_all_questions()
    {
	$query = $this->db->query("SELECT qs . * , qz.quiz_name, l.level FROM questions qs, quizes qz, level l WHERE qz.id = qs.quiz_id AND l.id = qz.quiz_level ORDER BY qs.id DESC ");
	return $query->result();
    }
    */
    public function get_all_topics()
    {
	$query = $this->db->query("SELECT t.*, (select l.level from level l where l.id = t.level_id ) as level from topics t ");
	return $query->result();
    }
     
     public function get_topicsByLevel($id = '')
    {
	$query = $this->db->query("SELECT t.* from topics t where t.level_id = '$id' and status = 1 order by topic asc ");
	return $query->result();
    }
    
     
    public function get_topic($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('topics');
	return $query->result();
    }
    
    public function add_topic()
    {    	 
	
		
	$level_id	= $this->input->post('ddllevel');
	$topic	= $this->input->post('topic');
	$status	= $this->input->post('status');
    $data = array(
	    'level_id' => $level_id,
	    'topic'    => $topic,
	    'status'    => $status
	);
	
	$this->db->insert('topics', $data);
	$insert_id = $this->db->insert_id();

    return  $insert_id;


    }
     
    
    
    public function edit_topic($ID = '')
    {
    		
    //$recID		    = $this->session->userdata('ID');	
	$level_id 			= $this->input->post('ddllevel');;
	$topic    = $this->input->post('topic');
	$status	= $this->input->post('status');
	
	$data = array(
	    'level_id' 		=> $level_id,
	    'topic'			=> $topic,
	    'status'    => $status
	    
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('topics', $data);
    }
    
    
    public function delete_topic($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('topics', $data);
    }
    
     public function get_all_answer()
    {
	$query = $this->db->get('answers');
	return $query->result();
    }
    
   
}

/* Location: ./application/models/jobs.php */