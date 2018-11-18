<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

	public function index()
	{
		$this->load->view('Dashboard');
	}
     public function login()
	{
		$this->load->view('login');
	}
	public function addsupplier()
	{
		$this->load->view('AddUser');
	}
	public function register()
	{
		$this->load->view('register');
	}
	

}
