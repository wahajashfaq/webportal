<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller
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
    $Contacts= $this->SetMemberPostData($post);
     $Contacts = array_filter($Contacts);
     $result  =$this->member_model->GetNextMemberID();
     $id = $result->id;
      // echo "<pre>";
      //  print_r($id);
      //  print_r($Contacts);
      //   print_r($post);exit;
    
    $this->member_model->addMember($post,$Contacts,$id);
    if ($post['UType'] == 'Supplier') 
    {
        return redirect('Members/getsuppliers');
    }
    else
    {
   return redirect('Members/getcustomers');
   
    }
		    
	}
  public function SetMemberPostData(&$post)
  {
     (!empty($post['Email'])) ?  : $post['Email']="Not Set";
     (!empty($post['ContactNumber'])) ?  : $post['ContactNumber']="XXXX-XXXXXXX";
     (!empty($post['uaddress'])) ?  : $post['uaddress']="Not Set";
     (isset($post['EntryDate']) && !empty($post['EntryDate'])) ?  : $post['EntryDate']=date("Y-m-d");
     (!empty($post['comments'])) ?  : $post['comments']="No comments";

     $Contacts = $post['ContactNumber'];
     unset($post['ContactNumber']);
   //  print_r($Contacts);
  return  $Contacts;
   }
	public function editMember()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('member_model');
         $uid = $_GET['DataID'];
         $user = $this->member_model->getMemberData($uid);
         $numbers = $this->member_model->getMemberContacts($uid);
      
	     $this->load->view('editMember',['user'=>$user,'numbers'=>$numbers]);
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
     $post =$this->input->post();
     $Contacts=$this->SetMemberPostData($post);
       $uid= $this->input->post("ID");
       // $data = array(
       //         'Name' =>$post['name'],
       //         'lname' =>$post['lname'],
       //         'Email' =>$post['emailaddress'],
       //         'Utype' =>$post['UserType'],
       //         'uaddress' =>$post['Address'],
       //         'EntryDate' =>$post['date'],
       //         'comments' =>$post['comments']
       //      );
      unset($post['date']);
      unset($post['submit']);
      $Contacts = array_filter($Contacts);
    
     unset($post['ContactNumber']);
       //  echo "<pre>";
       //  print_r($post);
       // print_r($Contacts);exit;
        $this->member_model->UpdateUser($uid,$post,$Contacts);
    if ($post['Utype'] == 'Supplier') 
    {
        return redirect('Members/getsuppliers');
    }
    else
    {
   return redirect('Members/getcustomers');
   
    }
	}

	public function deleteMember()
	{
		$this->load->model('member_model');
		$uid = $this->input->post('uid');

		$this->member_model->DeleteMemberData($uid);
		 //return "Record Deleted Successfully";
		return true;
	}
    public function getcustomers()
	{
		$this->load->model('member_model');
		$users=$this->member_model->getcustomer();
        $this->load->view('ViewCustomers',['users'=>$users]);
	}

public function getsuppliers()
{
        $this->load->model('member_model');
        $users=$this->member_model->getsupplier();
        $this->load->view('ViewSuppliers',['users'=>$users]);

}

public function ViewMemberDetails()
{
  if(isset($_GET['DataID']))
    {
         $this->load->model('member_model');
         $uid = $_GET['DataID'];
         $user = $this->member_model->getMemberData($uid);
         $numbers = $this->member_model->getMemberContacts($uid);
         //    echo "<pre>";
         //  print_r($user);
         // print_r($numbers);exit;
       $this->load->view('MemberDetails',['user'=>$user,'numbers'=>$numbers]);
    }
       
        
}


}
