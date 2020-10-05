<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Model {
    
    public function get_data()
    {
	$query = $this->db->get('contact');
	return $query->result();
    }
      
    public function edit_contact()
    {

	
	
	$email 	= $this->input->post('email');
	$phone	= $this->input->post('phone');
	$emailserver 	= $this->input->post('emailserver');
	$emaillogin	= $this->input->post('emailloginID');
	$emailpwd 	= $this->input->post('emailpwd');

	
	$data = array(
	    'email' 		=> $email,
	    'phone'			=> $phone,
	    'emailserver'	=> $emailserver,
	    'emailloginID'	=> $emaillogin,
	    'emailpwd'		=> $emailpwd
	);
	
	return $this->db->update('contact', $data);
    }
}

/* Location: ./application/models/ecommerces.php */