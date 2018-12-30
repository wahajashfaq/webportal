<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

     function __construct()
    {
         parent::__construct();
         $this->load->model('user_model');
         $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
         $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
         $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
         $this->output->set_header('Pragma: no-cache');
         if ($this->session->has_userdata('Login') && (!$this->session->userData('Login'))) 
         {
           redirect('login', 'refresh');	
         }
         elseif ( $this->session->userData('Login')) 
         {
           $this->PrepareDashBoard();    
         }
        
    }


public function LoginUtil()
    {
        $pass = $this->input->post("inputPassword");
        $mail = $this->input->post("inputEmail");
       $result =$this->user_model->AuthenticateUser($mail,$pass); 
       if (!$result) 
       { 
         $error = "Invalid Username or Password";
           $this->load->view('login',['error'=>$error]); 
        }
        else
        {
            $this->session->set_userData('userid',$result->u_ID);
            $this->session->set_userData('FullName',$result->Name ." ". $result->Lname);
            $this->session->set_userData('userName',$mail );
            $this->session->set_userData('Utype',$result->Utype);
            $this->session->set_userData('Login',true );
            $this->PrepareDashBoard();
        }
        /*
         // 
        echo "<pre>";
        print_r($result);exit;
        */
    }
  public function logout()
  {
    $this->session->unset_userdata('userid');
    $this->session->unset_userdata('FullName');
    $this->session->unset_userdata('userName');
    $this->session->unset_userdata('Utype');
    $this->session->unset_userdata('Login');
    $this->load->driver('cache');
    $this->session->sess_destroy();
    $this->cache->clean();
    ob_clean();
    redirect('Dashboard/login');
  }


    public function PrepareDashBoard()
    {
       $data = $this->user_model->getDashboardData();
       $this->load->view('Dashboard',['Data' =>$data]);
    }

	public function index()
	{
		//$this->load->view('login');
	}
     public function login()
	{
		$this->load->view('login');
	}
	

}
