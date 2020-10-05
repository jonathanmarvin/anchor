<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); error_reporting(E_ALL);

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('settings');
		if(!$this->session->userdata('ID'))
		{
			$this->session->set_flashdata('noAccess', 'Sorry');
			redirect(site_url());
		}
	}
	
	public function index()
	{
		$data['user'] = $this->settings->get_data();
		$data['error'] = '';
		$this->load->view('template/header.php');
		$this->load->view('template/setting.php', $data);
		$this->load->view('template/footer.php');
	}

	public function editSettings()
	{
		  // $data['contact'] = $this->contacts->get_data();
			$updated = $this->settings->edit_settings();
			$name=$this->input->post('name');
			if($updated)
			{
				$this->session->set_flashdata('editSuccess', 'Information');
				$this->session->set_userdata('name',$name);
			}
			else
			{
				$this->session->set_flashdata('editFail', 'Information');
			}
			redirect('index.php/setting');
		
	}
	
	
}

/* Location: ./application/controllers/ecommerce.php */