<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboards');
		if(!$this->session->userdata('ID'))
		{
			$this->session->set_flashdata('noAccess', 'Sorry');
			redirect(site_url());
		}
	}
	
	public function index()
	{
		if(!$this->session->userdata('type'))
		{
			$this->session->set_flashdata('noAccess', 'question');
			redirect(site_url());
        }
        
        $date = date("m/d/Y");
       
        
        $date = strtotime($date);
        $recentdates = date('Y-m-d', $date);
        $a=array($recentdates);

        $type = "W"; 
        if($type == 'T')
        {
            $numofdays = 1;
        }
        else if($type == 'W')
        {
            $numofdays = 7;
        }
        else if($type == 'M')
        {
            $numofdays = 30;
        }
        else if($type == 'Y')
        {
            $numofdays = 365;
        }
        else{
            $numofdays = 7;
        }      

        for($i = 1; $i < $numofdays ; $i++)
        {
            $tmpdate = strtotime("-".$i." day", $date);
            $tmpdate = date('Y-m-d', $tmpdate);
            array_push($a,$tmpdate);
            $recentdates .= ','.$tmpdate;

        }

        $data['recentdates'] = $recentdates;
        $data['arrdates'] = $a;
        $data['logins'] = $this->dashboards->get_recent_login_details('W');
        $data['loginstates'] = $this->dashboards->get_login_states('W');
        //print_r($data['loginstates']);
		$this->load->view('template/header.php');
		$this->load->view('dashboard/index.php',$data);
		$this->load->view('template/footer.php');
	}
    
    function getloginstates($type)
    {
        $data['logins'] = $this->dashboards->get_recent_login_details($type);
        echo json_encode( $data['logins'] );
    }

    function login_states($type)
    {
        $data['loginstates'] = $this->dashboards->get_login_states($type);
        echo json_encode( $data['loginstates'] );
    }

    function getdates($type)
    {
        $date = date("m/d/Y");
        $date = strtotime($date);
        $recentdates = date('Y-m-d', $date);
        if($type == 'T')
        {
            $numofdays = 1;
        }
        else if($type == 'W')
        {
            $numofdays = 7;
        }
        else if($type == 'M')
        {
            $numofdays = 30;
        }
        else if($type == 'Y')
        {
            $numofdays = 365;
        }
        else{
            $numofdays = 7;
        }      
        for($i = 1; $i < $numofdays ; $i++)
        {
            $tmpdate = strtotime("-".$i." day", $date);
            $tmpdate = date('Y-m-d', $tmpdate);
            //array_push($a,$tmpdate);
            $recentdates .= ','.$tmpdate;
        }
        $data['recentdates'] = $recentdates;
        echo json_encode( $data['recentdates'] );
    }
	 
}

/* Location: ./application/controllers/investor.php */