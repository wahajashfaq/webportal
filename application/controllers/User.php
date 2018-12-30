<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
     function __construct()
    {
         parent::__construct();
         $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
         $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
         $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
         $this->output->set_header('Pragma: no-cache');
         if (!$this->session->has_userdata('Login') && (!$this->session->userData('Login'))) 
         {
           redirect('login', 'refresh');  
         }
         
    }
    public function index()
	{
		$this->load->view('AddUser');	
	}
    
    
	public function addUser()
	{
		$this->load->model('user_model');
		
        $name = $this->input->post("name");
        $lname = $this->input->post("lname");
        $pass = $this->input->post("password");
        $mail = $this->input->post("emailaddress");
        $Utype = $this->input->post("UserType");
        $contact = $this->input->post("contact"); 
        $Address = $this->input->post("Address");   
        $date = $this->input->post("date");

        $this->user_model->addUser($name,$lname,$pass,$mail, $Utype,$contact,$Address,$date);
        $this->viewusers();
	}
	public function editUser()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('user_model');
         $uid = $_GET['DataID'];
         $user = $this->user_model->getUserData($uid);
          // print_r($user[0]->u_ID); exit;
	     $this->load->view('editUser',['user'=>$user]);	
		} 
       //echo $u_id;
	}

	public function updateUser()
	{
       $this->load->model('user_model');
		

        $name = $this->input->post("name");
        $lname = $this->input->post("lname");
        $pass = $this->input->post("password");
        $mail = $this->input->post("emailaddress");
        $Utype = $this->input->post("UserType");
        $contact = $this->input->post("contact"); 
        $Address = $this->input->post("Address");   
        $date = $this->input->post("date");
        $uid= $this->input->post("info_id");
       
        $this->user_model->UpdateUser($uid,$name,$lname,$pass,$mail, $Utype,$contact,$Address,$date);
       $this->viewusers();
	}

    public function deleteUser()
    {
        $this->load->model('user_model');
        $uid = $this->input->post('uid');
        $this->user_model->DeleteUserData($uid);
        return true;
    }

	public function register()
	{
		$this->load->view('register');
	}
	public function viewusers()
	{
		$this->load->model('user_model');
		$users=$this->user_model->getUsers();
        $this->load->view('ViewUsers',['users'=>$users]);
	}

}
