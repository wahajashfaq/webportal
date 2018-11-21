<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller 
{

	public function index()
	{
		$this->load->view('AddMember');
	}
     public function login()
	{
		$this->load->view('login');
	}
	public function addMember()
	{
		$post =$this->input->post(); 
		$this->load->model('member_model');
		unset($post['submit']);
		$this->member_model->addMember($post);
		$members=$this->member_model->getmembers();
        $this->load->view('ViewMembers',['users'=>$members]);
	}
	public function editMember()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('member_model');
         $uid = $_GET['DataID'];
         $user = $this->member_model->getMemberData($uid);
	     $this->load->view('editMember',['user'=>$user]);	
		} 
       //echo $u_id;
	}

	public function updateMember()
	{
       $this->load->model('member_model');
       $post = $this->input->post();
       echo "<pre>";
       print_r($post);exit;
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

	public function register()
	{
		$this->load->view('register');
	}
    public function getmembers()
	{
		$this->load->model('member_model');
		$users=$this->member_model->getmembers();
        $this->load->view('ViewMembers',['users'=>$users]);
	}


}
