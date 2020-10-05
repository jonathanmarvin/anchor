<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Slider extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('sliders');
		if(!$this->session->userdata('ID'))
		{
			$this->session->set_flashdata('noAccess', 'Sorry');
			redirect(site_url());
		}
	}	
	public function index()
	{
		$data['sliders'] = $this->sliders->get_all_sliders();
		
		$this->load->view('template/header.php');
		$this->load->view('slider/index.php', $data);
		$this->load->view('template/footer.php');
	}
	public function add()
	{  
		$this->load->view('template/header.php');
		$this->load->view('slider/add.php'); 
		$this->load->view('template/footer.php');
	}
    public function addSlider()
	{		
        $image =  $this->input->post('hdnimage');
        //checking if a image file is attched
		if(!empty($_FILES['imagef']['name']))
		{
		$image_path = realpath(APPPATH . '../../upload');	
		$config['upload_path'] 	=$image_path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '10000';
		$this->load->library('upload', $config);
		$uploaderror = FALSE;
		if(! $this->upload->do_upload('imagef'))
		{
			$data = array('error' => $this->upload->display_errors());
			$imageError = '1';
			$uploaderror = TRUE;
		}                         
		 $imageData  = $this->upload->data();	
    	 $image = $imageData['file_name'];
        }
		//$this->load->view('template/header.php');
		//$this->load->view('slider/add.php',$data); 
        $this->load->view('template/footer.php');
		$sliderID = $this->sliders->add_slider($image);
			if($sliderID > 0 )
			{
				$this->session->set_flashdata('addSuccess', 'Slider');
			}
			else
			{
				$this->session->set_flashdata('addFail', 'Slider');
			}
		redirect('index.php/slider'); 	 
	}
    public function edit($id = '')
	{
		$data['slider'] = $this->sliders->get_slider($id);		
		$this->load->view('template/header.php');
		$this->load->view('slider/edit.php',$data);
		$this->load->view('template/footer.php');
	}
	public function editslider($id = '')
	{
        $image = "";
        if(!empty($_FILES['imagef']['name']))
		{
        $image = "";
        $image_path = realpath(APPPATH . '../../upload');	
		$config['upload_path'] 	=$image_path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '10000';
		$this->load->library('upload', $config);
		$uploaderror = FALSE;
		if(! $this->upload->do_upload('imagef'))
		{
			$data = array('error' => $this->upload->display_errors());
			$imageError = '1';
			$uploaderror = TRUE;	 
		}
		 $imageData  = $this->upload->data();	
    	 $image = $imageData['file_name'];
		}
	    $updated = $this->sliders->edit_slider($id,$image);			
			if($updated)
			{
				$this->session->set_flashdata('editSuccess', 'slider');
			}
			else
			{
				$this->session->set_flashdata('editFail', 'slider');
			}
		redirect('index.php/slider');   
	}
	
	public function deleteslider($id)
	{		
		$updated = $this->sliders->deleteslider($id);	
		if($updated)
		{
			$this->session->set_flashdata('deleteSuccess', 'slider');
		}
		else
		{
			$this->session->set_flashdata('deleteFail', 'slider');
		}
		redirect('index.php/slider');	
	}
}
/* Location: ./application/controllers/slider.php */