<? php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Showquess extends CI_Model
{
	
	
		 public function get_all_answer()
    {
	$query = $this->db->get('answers');
	return $query->result();
    }
	
	
/*	 public function get_answerByQuestion($id = '')
    {
	$query = $this->db->query("SELECT a.* from answers a where a.question_id = '$id'");
	return $query->result();
    }
*/
}
