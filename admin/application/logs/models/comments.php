<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Model {
    
    public function get_all_comments()
    {
	$query = $this->db->get('comment');
	return $query->result();
    }
    
    public function get_comment($ID = '')
    {
	$this->db->where('ID', $ID);
	$query = $this->db->get('comment');
	return $query->result();
    }
    
    public function add_comment()
    {
	$name = $this->input->post('summary');
	$isactive = $this->input->post('is_active');
	
	$data = array(
	    'summary' 		=> $summary,
	    'isactive' 		=> $isactive
	    
	);
	
	return $this->db->insert('comment', $data);
    }
    
    public function edit_comment($ID = '')
    {
	$summary = $this->input->post('summary');
	$isactive = $this->input->post('is_active');
	
	$data = array(
	    'summary' 		=> $summary,
	    'isactive' 		=> $isactive
	    
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('comment', $data);
    }
    
    
    public function delete_comment($ID = '')
    {
	$this->db->where('ID', $ID);
	return $this->db->delete('comment', $data);
    }
}

/* Location: ./application/models/categories.php */