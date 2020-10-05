<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends CI_Model {
    
   public function get_all_questions()
    {
//	$query = $this->db->query("SELECT qs . * , qz.quiz_name, l.level FROM questions qs, quizes qz, level l WHERE qz.id = qs.quiz_id AND l.id = qz.quiz_level ORDER BY qs.id DESC ");

//$query = $this->db->query("SELECT qs . * , qz.quiz_name, (select l.level from level l where l.id = qz.quiz_level ) as level FROM questions qs, quizes qz  WHERE qz.id = qs.quiz_id ORDER BY qs.id DESC ");

$query = $this->db->query("SELECT qs . * , qz.quiz_topic,qz.quiz_name, t.level_id, l.level FROM  `questions` qs, quizes qz, topics t, level l WHERE qs.quiz_id = qz.id AND t.id = qz.quiz_topic and t.level_id = l.id");

//	$query=$this->db->get('questions');
return $query->result();
    }
    
	  public function get_all_levels()
    {
	$query = $this->db->query("select * from level where status = 1 order by level asc ");
	return $query->result();
    }
    public function get_topicsByLevel($id = '')
    {
	$query = $this->db->query("SELECT t.* from topics t where t.level_id = '$id' and status = 1 order by  topic asc");
	return $query->result();
    }
    
     public function get_quizByTopic($id = '')
    {
	$query = $this->db->query("SELECT q.* from quizes q where q.quiz_topic = '$id' and status = 1 order by quiz_name asc");
	return $query->result();
    }
    
    public function get_ans($ID)
    {
    	$this->db->where('question_id', $ID);
	$query = $this->db->get('answers');
	return $query->result();
    }
    
    
    public function get_all_quizes()
    {
	$query = $this->db->get('quizes');
	return $query->result();
    }
     
     
    public function get_question($ID = '')
    {
    	$query = $this->db->query("SELECT qs . * , qz.quiz_topic,qz.quiz_name, t.level_id, l.level FROM  `questions` qs, quizes qz, topics t, level l WHERE qs.id = '$ID' and qs.quiz_id = qz.id AND t.id = qz.quiz_topic and t.level_id = l.id");
    return $query->result();	
	//$this->db->where('id', $ID);
	//$query = $this->db->get('questions');
	//return $query->result();
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
    
     public function update_question($data = '',$ID='')
    {    	 
    $this->db->where('id', $ID);
	return $this->db->update('questions', $data);
   // $insert_id = $this->db->insert_id();
   // return  $insert_id;
    }
    
    public function add_answer($data = '')
    {    	 
	$this->db->insert('answers', $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
     
       
    public function get_questions($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('questions');
	return $query->result();
    }
    
    public function edit_question($ID = '')
    {
    	$quizIDLevel  = $this->input->post('ddlQuiz');
	$question	= $this->input->post('question');
	$code	= $this->input->post('code');
	$code_desc=$this->input->post('code_desc');
    $image	= $this->input->post('image');
    $video = $this->input->post('video');
  	$iframe = $this->input->post('iframe');
    $ques_type = $this->input->post('ques_type');
    $tfcorrect = $this->input->post('tfcorrect');
    $isMCcorrect = $this->input->post('isMCcorrect');
   // $answer1 = $this->input->post('answer1');
   // $answer2 = $this->input->post('answer2');
    $correct1 = '0';
    $correct2 = '0';
    $correct3 = '0';
    $correct4 = '0';
    $mcanswer1 = $this->input->post('mcanswer1');
    $mcanswer2 = $this->input->post('mcanswer2');
    $mcanswer3 = $this->input->post('mcanswer3');
    $mcanswer4 = $this->input->post('mcanswer4');
     $data = array(
	    'quiz_id' 	=> $quizIDLevel,
	    'question' 	=> $question,
		'code_type' => $code,
		'code'      => $code_desc,
		'iframe'    => $iframe,
		'type'      => $ques_type,
		'img'		=> $image,
		'video'		=> $video
	    
	);
    
	$this->db->where('id', $ID);
	return $this->db->update('questions', $data);
    }
    
    
     public function get_quiz($ID = '')
    {
    	
	$this->db->where('id', $ID);
	$query = $this->db->get('quizes');
	return $query->result();
    }
   
     public function get_level($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('level');
	return $query->result();
    } 
   
    
    
    public function delete_answer($ID = '')
    {
	$this->db->where('question_id', $ID);
	return $this->db->delete('answers', $data);
    }
    
    public function delete_question($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('questions', $data);
    }
}

/* Location: ./application/models/jobs.php */