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
	$tmppass    = $this->input->post('tmppass');
	if($password !=$tmppass )
	{
		$tmppass = password_hash($password,PASSWORD_DEFAULT);
		//echo $tmppass;
	}
	
	
	$data = array(
	//    'email' 		=> $email,
	    'username'			=> $name,
	    'password'		=> $tmppass
	    
	);
	$this->db->where('id', $this->session->userdata('ID'));
	return $this->db->update('admins', $data);
    }
}

/* Location: ./application/models/ecommerces.php */