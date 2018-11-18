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
