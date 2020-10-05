<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profiles extends CI_Model {
   
	
    public function get_profile()
    {	
        $id = $this->session->userdata('ID');
        $this->db->where('id', $id);
		$query = $this->db->get('authors');
		return $query->result();
    }    
    
    public function get_all_profiles()
    {	
		$query = $this->db->get('authors');
		return $query->result();
    }     
     
    public function update_photo($photo = '')
    {
    	$id = $this->session->userdata('ID');
	    $data = array('photo'=> $photo);
	
		$this->db->where('id', $id);
		return $this->db->update('authors', $data);
    }


    public function edit_profile($imageName = '')
    {
    	if(!$imageName)
    	{
			$imageName = $this->input->post('hdnImage');
		}
	$id = $this->session->userdata('ID');
	$name 		= $this->input->post('name');
	$email		= $this->input->post('email');
    $password	= $this->input->post('password');	
	$data = array(
	    'name' 		=> $name,
	    'email' 	=> $email,
		'password'  => $password,
		'photo'		=> $imageName
	);
	
	$this->db->where('id', $id);
	return $this->db->update('authors', $data);
    }

}

/* Location: ./application/models/profiles.php */