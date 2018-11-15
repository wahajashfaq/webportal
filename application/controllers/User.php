<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

	public function index()
	{
		$this->load->view('AddUser');
		
	}
     
	public function addsupplier()
	{
		$this->load->view('AddUser');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function getusers()
	{
		$this->load->model('test');
		$users=$this->test->getUsers();
        $this->load->view('ViewUsers',['users'=>$users]);
	}

}
