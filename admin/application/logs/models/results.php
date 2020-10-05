<?php if(!defined('BASEPATH')) exit ("No direct script access allowed");
class Results extends CI_Model {
	
	
	public function get_all_results()
	{
		$query = $this->db->get('quiz_takers');
		return $query->result();
	}
	
	public function get_resultByQuiz($ID)
	{
		$query = $this->db->query("select (select quiz_name from quizes where id = qt.quiz_id) as quiz_name, qt.* from quiz_takers qt where qt.quiz_id = '$ID' order by qt.percentage desc  ");
	return $query->result();
	
		$this->db->where('quiz_id',$ID);
		$query = $this->db->get('quiz_takers');
		return $query->result();
	}
	
	public function delAll($ID = '')
	{
		$this->db->where('quiz_id',$ID);
		return $this->db->delete('quiz_takers',$data);
	}
	
	public function delete_results($ID = '')
	{
		$this->db->where('id',$ID);
		return $this->db->delete('quiz_takers',$data);
	}
}