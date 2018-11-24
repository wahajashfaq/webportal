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
       
       //Getting the POST data In variables. If the post attributes names are same as fields in DB.
       //Than we can pass whole post array after unsetting Submit and Hidden field reducing the effort
        //Making an array of Variable name same as member table fields name
        //We will pass this array of data and id to model where active records will generate and run query
       $uid= $this->input->post("info_id");
       $data = array(
               'Name' => $this->input->post("name"),
               'lname' => $this->input->post("lname"),
               'Email' => $this->input->post("emailaddress"),
               'ContactNumber' => $this->input->post("contact"),
               'Utype' =>$this->input->post("UserType"),
               'uaddress' => $this->input->post("Address"),
               'EntryDate' => $this->input->post("date"),
               'comments' => $this->input->post("comments")
            );
        $this->member_model->UpdateUser($uid,$data);
       $this->getmembers();
	}

	public function deleteMember()
	{
		$this->load->model('member_model');
		$uid = $this->input->post('uid');
		$this->member_model->DeleteMemberData($uid);
		// return "Record Deleted Successfully";
		return true;
	}
    public function getmembers()
	{
		$this->load->model('member_model');
		$users=$this->member_model->getmembers();
        $this->load->view('ViewMembers',['users'=>$users]);
	}

	public function foo()
	{
    $this->load->view('response');

	}

}
