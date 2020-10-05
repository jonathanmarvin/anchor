<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homes extends CI_Model {

    public function get_events()
    {
	$query = $this->db->get('events');
	return $query->result();
    }
	
	public function get_eventsSql()
    {
	$query = $this->db->query("select * from events");
	return $query->result();
    }
    
}

/* Location: ./application/models/homes.php */
