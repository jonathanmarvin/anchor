<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homes extends CI_Model {
    
    public function get_home_data()
    {
	$query = $this->db->get('home');
	return $query->result();
    }
      
    public function edit_home($logoUpload = '',$profileUpload = '')
    {

	if($logoUpload != '')
	{
	    $logo	= $logoUpload;
	}
	else
	{
	    $logo	= $this->input->post('hdnImgLogo');
	}
	if($profileUpload != '')
	{
	    $profile=  $profileUpload;
	}
	else
	{
	    $profile	= $this->input->post('hdnImgProfile');
	}
	
	$linkedIn 	= $this->input->post('linkedIn');
	$summary	= $this->input->post('profileDetails');
	$counttext1	= $this->input->post('counttext1');
	$counttext2	= $this->input->post('counttext2');
	$counttext3	= $this->input->post('counttext3');
	$counttext4	= $this->input->post('counttext4');
	$count1	= $this->input->post('count1');
	$count2	= $this->input->post('count2');
	$count3	= $this->input->post('count3');
	$count4	= $this->input->post('count4');

	
	$data = array(
	    'linkedIn' 		=> $linkedIn,
	    'profileDetails'=> $summary,
	    'logo'			=> $logo,
	    'profileImage'	=> $profile,
	    'counttext1'	=> $counttext1,
	    'counttext2'	=> $counttext2,
	    'counttext3'	=> $counttext3,
	    'counttext4'	=> $counttext4,
	    'count4'		=> $count4,
	    'count3'		=> $count3,
	    'count2'		=> $count2,
	    'count1'		=> $count1,
	);
	
	return $this->db->update('home', $data);
    }
}

/* Location: ./application/models/ecommerces.php */