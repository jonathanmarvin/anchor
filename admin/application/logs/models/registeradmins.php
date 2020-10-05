<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registeradmins extends CI_Model {
	
	
	
	  public function get_all_admins()
    {
	$query = $this->db->query("select * from admins ");
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
	
	public function add_admin()
    {    	 
	
	$status		    = $this->input->post('status');	
	$name  				= $this->input->post('name');
	$password			= $this->input->post('password');
	
	$data = array(
	    'username' 		=> $name,
	    'password'		=> $password,
	    'status'		=> $status
	    );
	$this->db->insert('admins', $data);
	$insert_id = $this->db->insert_id();
    return  $insert_id;
    
    }
   
   
     	public function delete_admin($ID = '')
     	{
     		$this->db->where('id', $ID);
			return $this->db->delete('admins', $data);
    
			}
  
  
   
   
    public function get_admin($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('admins');
	return $query->result();
    } 


		public function edit_admin($ID = '')
    {
    		
    $status		    = $this->input->post('status');	
	$name 			= $this->input->post('name');
	$password 		= $this->input->post('password');
	$data = array(
	    'username' 		=> $name,
	    'password'		=> $password,
	    'status'		=> $status
	    
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('admins', $data);
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