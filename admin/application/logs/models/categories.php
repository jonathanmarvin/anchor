<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Model {
    
    public function get_all_categories1()
    {
	$query = $this->db->get('category');
	return $query->result();
    }
    
     public function get_all_categories()
    {
	$query = $this->db->query('select C.*, (select CC.name from category CC where CC.id = C.parentCategoryID ) as parent from category C');
	return $query->result();
    }
    
    public function get_category($ID = '')
    {
	$this->db->where('ID', $ID);
	$query = $this->db->get('category');
	return $query->result();
    }
    
    public function add_category()
    {
	$name = $this->input->post('name');
	$displayOrder = $this->input->post('order');
	$isactive = $this->input->post('status');
	
	
	$data = array(
	    'name' 			=> $name,
	    'status' 		=> $isactive,
	    'displayOrder'	=> $displayOrder
	    
	);
	
	return $this->db->insert('category', $data);
    }
    
    public function edit_category($ID = '')
    {
	$name = $this->input->post('name');
	$isactive = $this->input->post('status');
	$displayOrder = $this->input->post('order');
	
	$data = array(
	    'name' 			=> $name,
	    'status' 		=> $isactive,
	    'displayOrder'	=> $displayOrder
	    
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('category', $data);
    }
    
    
    public function delete_category($ID = '')
    {
	$this->db->where('ID', $ID);
	return $this->db->delete('category', $data);
    }
}

/* Location: ./application/models/categories.php */