<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mycontacts extends CI_Model {
   
	
    public function get_contact()
    {	
        $id = $this->session->userdata('ID');
        $this->db->where('id', $id);
		$query = $this->db->get('contacts');
		return $query->result();
    }    
    
    public function get_all_contacts()
    {	
		$query = $this->db->get('contacts');
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
    
     public function add_contact()
    {

	$id = $this->session->userdata('ID');
	$name 		= $this->input->post('Cname');
	$email		= $this->input->post('Cemail');
    $phone	= $this->input->post('Cphone');	
    $designation	= $this->input->post('Cdesignation');	
	$data = array(
	    'name' 			=> $name,
	    'email' 		=> $email,
		'phone'		    => $phone,
		'designation'	=> $designation,
		'customerID'	=> $id
	);
	
	$this->db->set('creationDate', 'now()', FALSE);
	return $this->db->insert('contacts', $data);
    }
    
     public function edit_contact($id = '')
    {
	$name 		= $this->input->post('Cname');
	$email		= $this->input->post('Cemail');
    $phone		= $this->input->post('Cphone');	
    $designation= $this->input->post('Cdesignation');	
	$data = array(
	    'name' 			=> $name,
	    'email' 		=> $email,
		'phone'		    => $phone,
		'designatio'	=> $designation
	);
	
	$this->db->where('id', $id);
	return $this->db->update('contacts', $data);
    }
    
     public function delete_contact($ID = '')
    {
    $customerid = $this->session->userdata('ID');
	$this->db->where('ID', $ID);
	$this->db->where('customerID', $customerid);
	return $this->db->delete('contacts', $data);
    }
    

}

/* Location: ./application/models/profiles.php */