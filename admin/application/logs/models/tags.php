<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tags extends CI_Model {
    
    public function get_all_tags()
    {
	$query = $this->db->query("select * from tags");
	return $query->result();
    }
     
    public function get_tag($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('tags');
	return $query->result();
    }
    
    public function add_tag()
    {    
	
	$status 	    = $this->input->post('status');
	$title			= $this->input->post('title');
	$data = array(
	    'title' 		=> $title,
	    'status'		=> $status
	);
	$this->db->insert('tags', $data);
	$insert_id = $this->db->insert_id();
    return  $insert_id;
    
    }
     
    
    
    public function edit_tag($ID = '')
    {
    		
    	
	$status 	    = $this->input->post('status');
	$title			= $this->input->post('title');
	$data = array(
	    'title' 		=> $title,
	    'status'		=> $status
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('tags', $data);
    }
    
    
    public function delete_tag($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('tags', $data);
    }
}

/* Location: ./application/models/tags.php */