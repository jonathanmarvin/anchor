<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {


	public function index()
	{
$this->load->view('template/header.php');		
$this->load->view('media/index.php');
$this->load->view('template/footer.php');
	}
}