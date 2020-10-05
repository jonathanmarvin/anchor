<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Model {
    
    public function get_user()
    {
        $email = $this->input->post('email');
      //  $password = $this->input->post('password');
       
        
        $this->db->where('username', $email);
      //  $this->db->where('password', $password);
        $this->db->where('status', 1);
        $query = $this->db->get('admins');
	    return $query->result();
    }
    
     public function edit_passwords()
    {

	$password 	= $this->input->post('password');
	$data = array(
	    'pass'		=> $password
	    
	);

	return $this->db->update('students', $data);
    }
    
    public function get_user_detail()
    {
        $password = $this->input->post('pass');
        
        $this->db->where('ID', $this->session->userdata('ID'));
        $this->db->where('password', $password);
        $query = $this->db->get('tblAdmin');
	return $query->result();
    }
    
    public function update_password()
    {
	$password	= $this->input->post('password');
	
	$data = array(
	    'password' 	=> $password
	);
	
	$this->db->where('ID', $this->session->userdata('ID'));
	return $this->db->update('tblAdmin', $data); 
	
    }
}

/* Location: ./application/models/logins.php */