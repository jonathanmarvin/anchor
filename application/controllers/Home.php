<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
        {

        parent::__construct();
        $this->load->model('homes');
        }

	public function index()
	{
$data['events'] = $this->homes->get_events();
$this->load->view('template/header.php');		
$this->load->view('home/index.php', $data);
$this->load->view('template/footer.php');
	}
}
