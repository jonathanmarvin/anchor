<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Model {
    
    public function get_all_jobs()
    {
	$query = $this->db->query("select j.*, (select count(*) from applications where jobID = j.id) as applyCount, (case j.type when 1 then 'Full Time' when 2 then 'Part time' else 'Internship' end) as jobTypeDisplay, (case j.isFeatured when 1 then 'Featured' else 'No' end) as featuredDisplay from jobs j order by j.id desc");
	return $query->result();
    }
     
    public function get_job($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('jobs');
	return $query->result();
    }
    
    public function add_job()
    {    	 
	
	$recID		    = $this->session->userdata('ID');	
	$title 			= $this->input->post('title');;
	$designation    = $this->input->post('designation');
	$minSal 		= $this->input->post('minSal');
	$maxSal 		= $this->input->post('maxSal');
	$saltype 		= $this->input->post('saltype');
	$minExp 		= $this->input->post('minExp');
	$maxExp 		= $this->input->post('maxExp');
	$tags 			= $this->input->post('hdnTags');
	$status 		= $this->input->post('status');
	$desc		    = $this->input->post('desc');	 
	$skills		    = $this->input->post('skills');
	$location	    = $this->input->post('location');
	$type 	     	= $this->input->post('type');
	$responsibility	= $this->input->post('responsibility');
	$featured  		= $this->input->post('featured');
	
	$data = array(
	    'title' 		=> $title,
	    'role'			=> $designation,
	    'minSalary'	 	=> $minSal,
	    'maxSalary'		=> $maxSal,
	    'saltype'		=> $saltype,
	    'minExp'		=> $minExp,
	    'maxExp'		=> $maxExp,
	    'tags'			=> $tags,
	    'status'		=> $status,
	    'isFeatured'	=> $featured,
	    'description'	=> $desc,	    
	    'qualifications'=> $skills,
	    'recruiterID'	=> $recID,
	    'location'		=> $location,
	    'type'			=> $type,
	    'responsibility'=> $responsibility,
	    'viewCount'=> 0       
	    
	);
	
	$this->db->set('creationDate', 'NOW()', FALSE);
	$this->db->insert('jobs', $data);
	$insert_id = $this->db->insert_id();

    return  $insert_id;
    
    }
     
    
    
    public function edit_job($ID = '')
    {
    		
    $recID		    = $this->session->userdata('ID');	
	$title 			= $this->input->post('title');;
	$designation    = $this->input->post('designation');
	$minSal 		= $this->input->post('minSal');
	$maxSal 		= $this->input->post('maxSal');
	$saltype 		= $this->input->post('saltype');
	$minExp 		= $this->input->post('minExp');
	$maxExp 		= $this->input->post('maxExp');
	$tags 			= $this->input->post('hdnTags');
	$status 		= $this->input->post('status');
	$desc		    = $this->input->post('desc');	 
	$skills		    = $this->input->post('skills');
	$location	    = $this->input->post('location');
	$type 	     	= $this->input->post('type');
	$responsibility	= $this->input->post('responsibility');
	$featured  		= $this->input->post('featured');
	
	$data = array(
	    'title' 		=> $title,
	    'role'			=> $designation,
	    'minSalary'	 	=> $minSal,
	    'maxSalary'		=> $maxSal,
	    'saltype'		=> $saltype,
	    'minExp'		=> $minExp,
	    'maxExp'		=> $maxExp,
	    'tags'			=> $tags,
	    'status'		=> $status,
	    'isFeatured'	=> $featured,
	    'description'	=> $desc,	    
	    'qualifications'=> $skills,
	    'recruiterID'	=> $recID,
	    'location'		=> $location,
	    'type'			=> $type,
	    'responsibility'=> $responsibility,
	    'viewCount'=> 0       
	    
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('jobs', $data);
    }
    
    
    public function delete_job($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('jobs', $data);
    }
}

/* Location: ./application/models/jobs.php */