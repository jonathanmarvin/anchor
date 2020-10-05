<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Managequizes extends CI_Model {
    
    
	public function get_all_levels()
    {
	$query = $this->db->query("select * from level ");
	return $query->result();
    }
    public function get_topicsByLevel($id = '')
    {
	$query = $this->db->query("SELECT t.* from topics t where t.level_id = '$id'");
	return $query->result();
    }
    
     public function get_quizByTopic($id = '')
    {
	$query = $this->db->query("SELECT q.* from quizes q where q.quiz_topic = '$id'");
	return $query->result();
    }
    
    
    public function get_all_quizes()
    {
	$query = $this->db->get('quizes');
	return $query->result();
    }
    
	public function get_all_quizes1()
    {
	$this->db->insert('topics', $data);
	$insert_id = $this->db->insert_id();

    return  $insert_id;


    }
     
     
    public function get_question($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('questions');
	return $query->result();
    }
     
    public function get_topic($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('topics');
	return $query->result();
    }   
    
    public function add_question($data = '')
    {    	 
	$this->db->insert('questions', $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function add_answer($data = '')
    {    	 
	$this->db->insert('answers', $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
     
    
    
  
     public function get_quiz($ID = '')
    {
    	
	$this->db->where('id', $ID);
	$query = $this->db->get('quizes');
	return $query->result();
    }
        
    public function update_metadata()
    {    	 
	
		
	$level_id	= $this->input->post('ddllevel');
	$topic_id	= $this->input->post('ddlTopic');
	
	$quiz_id	= $this->input->post('ddlQuiz');
	$password	= $this->input->post('password');
	$time	= $this->input->post('time');
	$questions	= $this->input->post('questions');
    $data = array(
	    'quiz_level' => $level_id,
	    'quiz_id'    => $topic_id,
	    'quiz_name'    => $quiz_id,
	    'password_quiz'    => $password,
	    'time_alloted'    => $time,
	    'total_questions'    => $questions
	    
	);
	
	$this->db->insert('quizes', $data);
	$insert_id = $this->db->insert_id();

    return  $insert_id;


    }

   
     public function get_level($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('level');
	return $query->result();
    } 
   
    
    public function delete_question($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('questions', $data);
    }
}

/* Location: ./application/models/jobs.php */