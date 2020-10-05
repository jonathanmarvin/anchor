<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authors extends CI_Model {
    
    public function get_all_authors()
    {
	$query = $this->db->query('select * from authors');
	return $query->result();
    }
     
    public function get_author($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('authors');
	return $query->result();
    }
    
    public function add_author()
    {    	 
		
	$name = $this->input->post('name');;
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$status = $this->input->post('status');
	
	
	$data = array(
	    'name' 		=> $name,
	    'email'		=> $email,
	    'password' 	=> $password,
	    'status'	=> $status
	    
	);
	
	$this->db->insert('authors', $data);
	$insert_id = $this->db->insert_id();

        return  $insert_id;
    }
     
    
    
    public function edit_author($ID = '')
    {
    	
     
 
	
	$name = $this->input->post('name');
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$status = $this->input->post('status');
	
	
	$data = array(
	    'name' 		=> $name,
	    'email'		=> $email,
	    'password' 	=> $password,
	    'status'	=> $status
	    
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('authors', $data);
    }
    
    
    public function delete_author($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('authors', $data);
    }
}

/* Location: ./application/models/authors.php */