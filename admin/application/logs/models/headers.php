<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Headers extends CI_Model {
    
    public function get_active_categories()
    {
	$query = $this->db->get('category');
	return $query->result();
    }
    
   
}

/* Location: ./application/models/categories.php */