<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('logins');
	}
	
	public function index()
	{
		if($this->session->userdata('ID'))
		{
			redirect('index.php/dashboard');
		}
		else
		{
			$user = $this->logins->get_user();
			$this->load->view('login/index.php',$user);
		}
	}
	
	public function checkLogin()
	{

		$user = $this->logins->get_user();
        $password = $this->input->post('password');
			if(empty($user) ||  empty(password_verify($password, $user[0]->password)))
			{
			 echo '-1';
			}
			else
			{
				$loginData = array(
					'ID'  		=> $user[0]->id,
					'name'		=> $user[0]->username,
					//'email'		=> $user[0]->email,
					'admin'		=> 'Y',
					'active'        => 'N',
					'type'=>$user[0]->type
				    );
			     
				$this->session->set_userdata($loginData);
				
				
				
// set cookie 
 

// set cookie 
 $cookie= array(
      'name'   => 'admin',
      'value'  => 'Y',
       'path' => '/',
       'expire' => '36000',
  );
 
 $this->input->set_cookie($cookie);
				echo '1';
			}
			
			 
		
	}
	
	public function password()
	{
		if(!$this->session->userdata('ID'))
		{
			$this->session->set_flashdata('noAccess', 'Sorry');
			redirect(site_url());
		}
		
		$this->load->view('template/header.php');
		$this->load->view('login/password.php');
		$this->load->view('template/footer.php');
	}
	
	public function updatePassword()
	{
		$this->form_validation->set_rules('current', 'Current Password', 'required|trim|callback_checkPassword');
		$this->form_validation->set_rules('new', 'New Password', 'required|trim');
		$this->form_validation->set_rules('re', 'Confirm Password', 'required|trim|matches[new]');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('template/header.php');
			$this->load->view('login/password.php');
			$this->load->view('template/footer.php');
		}
		else
		{
			$updated = $this->logins->update_password();
			
			if($updated)
			{
				$this->session->set_flashdata('updatePassword', 'Success');
				redirect('dashboard');
			}
			else
			{
				redirect('login/password');
			}
		}
	}

	public function checkPassword()
	{
		$current  = $this->input->post('current');
		$user = $this->logins->get_user_detail();
		
		if($current == $user[0]->password)
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('checkPassword', 'The %s field is not correct');
			return FALSE;
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		
		redirect(site_url());
	}
}

/* Location: ./application/controllers/login.php */