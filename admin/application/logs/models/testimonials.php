<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonials extends CI_Model {
    
    public function get_all_testimonials()
    {
	$query = $this->db->get('testimonial');
	return $query->result();
    }
    
     public function get_testimonial($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('testimonial');
	return $query->result();
    }
    public function add_testimonial($uploaderror='')
    {
    	$imageData = '';
    	if($uploaderror)
    	{
			$imageData  = $this->upload->data();	
		}
    
	$name 		= $this->input->post('name');
	$location	= $this->input->post('location');
    $comment	= $this->input->post('comment');
    $isactive	= $this->input->post('isactive');
    $displayHome= $this->input->post('displayhome');
    
    $data = array(
	    'name' 	=> $name,
	    'location' 	=> $location,
	    'image'		=> $imageData['file_name'],
	    'comment'	=> $comment,
	    'isactive' 	=> $isactive,
	    'displayHome'	=> $displayHome
	);
	
	return $this->db->insert('testimonial', $data);
	
    }
    
    public function edit_testimonial($ID = '', $logoUploaded = '')
    {
	$imageData = '';
	if($logoUploaded)
	{
	    $imageData = $this->upload->data();
	}
	
	if($imageData)
	{
	    $image	= $imageData['file_name'];
	}
	else
	{
	    $image	= $this->input->post('hdnImg');
	}
	
	$name 		= $this->input->post('name');
	$location= $this->input->post('location');
    $comment	= $this->input->post('comment');
    $isactive	= $this->input->post('isactive');
    $displayHome= $this->input->post('displayHome');
    
    $data = array(
	    'name' 			=> $name,
	    'location' 		=> $location,
	    'image'			=> $image,
	    'comment'		=> $comment,
	    'isactive' 		=> $isactive,
	    'displayHome'	=> $displayHome
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('testimonial', $data);
    }

    public function delete_testimonial($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('testimonial', $data);
    }
}

/* Location: ./application