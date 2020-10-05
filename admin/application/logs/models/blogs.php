<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends CI_Model {
    
    public function get_all_blogs()
    {
	$query = $this->db->query('select b.*,(SELECT GROUP_CONCAT(name) FROM `category` WHERE FIND_IN_SET(id,b.category) ) as catlist  from blog b');
	return $query->result();
    }
    
    
    public function check_url($ID,$url)
    {
	$query = $this->db->query('select count(*) urlcount from blog where url = "'.$url.'" and id <> '.$ID.'');
	//$this->output->enable_profiler(TRUE);
	return $query->result();
    }
    
    
     public function get_blog($ID = '')
    {
	$this->db->where('id', $ID);
	$query = $this->db->get('blog');
	return $query->result();
    }
    
    public function add_blog($uploaderror='',$imageName = '')
    { 
    
	$title 		= $this->input->post('title');
	$shortDesc	= $this->input->post('desc');
    $longDesc	= $this->input->post('description');
    $cat		= ','.$this->input->post('categoryList').',';
 
    
    $data = array(
	    'title' 		=> $title,
	    'shortDesc' 	=> $shortDesc,
		'longDesc' 		=> $longDesc,
	    'image'			=> $imageName,
	    'category'		=> $cat,
	    'viewCount' => 0,
	    'status' => 1,
	    'postedBy'			=> $this->session->userdata('ID'),
	    'approvalStatus'			=> 1,
	    'allowComment'		=> 1
	);
	$this->db->set('creationDate', 'NOW()', FALSE);
	return $this->db->insert('post', $data);
	
    }
    
    public function edit_blog($ID = '', $logoUploaded = '')
    {
	$imageData = '';
	if($logoUploaded)
	{
	    $imageData = $this->upload->data();
	}
	$catlist		= '';
	$title 			= $this->input->post('blog_title');
	$summary		= $this->input->post('blog_summary');
    $is_active		= $this->input->post('is_active');
    $publishdate	= $this->input->post('publishdate');
    $autoapprovecomment = $this->input->post('autoapprovecomment');
    $url = $this->input->post('url');
    
    foreach ($this->input->post('category') as $cat)
    {
		$catlist = $catlist.','.$cat;
	}
    
	$catlist = ltrim($catlist, ',');
	$image = '';
	if($imageData)
	{
	    $image	= $imageData['file_name'];
	}
	else
	{
	    $image	= $this->input->post('blogImage');
	}
	
	$data = array(
	    'title' 		=> $title,
	    'summary' 		=> $summary,
		'isactive'  	=> $is_active,
	    'image'			=> $image,
	    'category'		=> $catlist,
	    'publishdate'	=> $publishdate,
	    'autoapprovecomment' => $autoapprovecomment,
	    'url'			=> $url
	);
	
	$this->db->where('id', $ID);
	return $this->db->update('blog', $data);
    }

    public function delete_blog($ID = '')
    {
	$this->db->where('id', $ID);
	return $this->db->delete('blog', $data);
    }
}

/* Location: ./application/models/ecommerces.php */