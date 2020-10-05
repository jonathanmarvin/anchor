
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quizes extends CI_Model {
 
    public function get_all_quizes()
    {
	$query = $this->db->query("SELECT q.*, l.level from quizes q , level l where l.id = q.quiz_level  order by q.id desc");
	//	$query = $this->db->query("SELECT * from quizes");
	return $query->result();
    }
     
     
       public function get_quiz_data($ID = '')
    {
	//$query = $this->db->query("select q.question, a.*, (select quiz_name from quizes where quiz_id = q.quiz_id) as quiz from questions q, answers a where a.quiz_id = q.id  and q.id = '$ID' ");
	//	$query = $this->db->query("SELECT * from quizes");
	
	
	$query = $this->db->query(" select q.type,q.question,q.img,q.video,q.iframe,q.id as ques_id  , a.*, (select quiz_name from quizes where id = q.quiz_id) as quiz from questions q,answers a where q.quiz_id = '$ID' and a.quiz_id = q.quiz_id and q.id = a.question_id ORDER BY `a`.`id` ASC");

	return $query->result();
    }
     
     
     
     
    public function get_quiz($ID = '')
    {
    	
	$this->db->where('id', $ID);
	$query = $this->db->get('quizes');
	return $query->result();
    }
    
    public function add_quiz()
    {    	 
	
		
	$level_id	= $this->input->post('ddllevel');
	$quiz_topic  = $this->input->post('ddlTopic');
	$quiz_name	= $this->input->post('quiz_name');
	$display_questions	= $this->input->post('display_questions');
	$time_allotted  = $this->input->post('time_allotted');
	$password_quiz	= $this->input->post('password_quiz');
	$status	= $this->input->post('status');
	$attempts	= $this->input->post('attempts');
	
    $data = array(
	    'quiz_level' => $level_id,
	    'quiz_name'  => $quiz_name,
	    'quiz_topic' => $quiz_topic,
	    'time_allotted' => $time_allotted,
	    'display_questions'	=> $display_questions,
	    'password_quiz'		=> $password_quiz,
	    'status'    => $status,
	    'attempts'	=> $attempts
	);
	
	$this->db->insert('quizes', $data);
	$insert_id = $this->db->insert_id();

    return  $insert_id;


    }
     
    
    
    public function edit_quiz($ID = '')
    {
    		
	$level_id	= $this->input->post('ddllevel');
	$quiz_topic  = $this->input->post('ddlTopic');
	$quiz_name	= $this->input->post('quiz_name');
	
	$display_questions	= $this->input->post('display_questions');
	$time_allotted  = $this->input->post('time_allotted');
	$password_quiz	= $this->input->post('password_quiz');
	$status	= $this->input->post('status');
	$attempts	= $this->input->post('attempts');
	
    $data = array(
	    'quiz_level' => $level_id,
	    'quiz_name'  => $quiz_name,
	    'quiz_topic'  => $quiz_topic,
	    'time_allotted' => $time_allotted,
	    'display_questions'	=> $display_questions,
	    'password_quiz'		=> $password_quiz,
	    'status'    => $status,
	    'attempts'	=> $attempts
	    
	);
	
	
	$this->db->where('id', $ID);
	return $this->db->update('quizes', $data);
    }
    
    
    public function delete_quiz($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('quizes', $data);
    }
    
}

/* Location: ./application/models/jobs.php */