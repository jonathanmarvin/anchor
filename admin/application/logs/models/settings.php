<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Model {
    
    public function get_data()
    {
    $this->db->where('id', $this->session->userdata('ID'));
	$query = $this->db->get('admins');
	return $query->result();
    }
      
    public function edit_settings()
    {

	
	
//	$email 	= $this->input->post('email');
	$name	= $this->input->post('name');
	$password 	= $this->input->post('password');

	
	$data = array(
	//    'email' 		=> $email,
	    'username'			=> $name,
	    'password'		=> $password,
	    
	);
	
	return $this->db->update('admins', $data);
    }
}

/* Location: ./application/models/ecommerces.php */