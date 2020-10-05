<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sliders extends CI_Model {  
    public function get_all_sliders()
    {
	$query = $this->db->query("SELECT * from sliders order by id desc");
	return $query->result();
    }
    public function get_slider($id)
    {
	$query = $this->db->query("SELECT * from sliders where id=$id order by id desc");
	return $query->result();
    }
    public function add_slider($img)
    {    	 
	$title	= $this->input->post('title');
	$status	= $this->input->post('status');
    $displayorder  	= $this->input->post('displayorder');
    $ht	= $this->input->post('ht');
	$wd  	= $this->input->post('wd');
	//$description  	= $this->input->post('description');
    $data = array(
	    'title' => $title,   
	    'status'    => $status,
	    'displayorder'=> $displayorder,
       // 'description'=> $description,
        'img'       => $img,
        'ht'    => $ht,
        'wd'    => $wd

	);
	$this->db->insert('sliders', $data);
	$insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    public function edit_slider($ID = '',$img)
    {		
	$title	= $this->input->post('title');
	$status	= $this->input->post('status');
	$displayorder  	= $this->input->post('displayorder');
    $description  	= $this->input->post('description');
    $ht	= $this->input->post('ht');
	$wd  	= $this->input->post('wd');
    $data = array(
	    'title' => $title,
	    'status'    => $status,
	    'displayorder'=> $displayorder,
        'description'=> $description,
        'img'       => $img,
        'ht'    => $ht,
        'wd'    => $wd

	);	
	$this->db->where('id', $ID);
	return $this->db->update('sliders', $data);
    }
    public function deleteslider($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('sliders');
    }    
}
/* Location: ./application/models/jobs.php */