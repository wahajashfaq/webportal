<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

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
