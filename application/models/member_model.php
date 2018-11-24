<?php

class member_model extends CI_Model
{
    public function getmembers()
    {
    	$this->load->database();
    	$query = $this->db->query("Select * from member");
    	return $query->result();
    }
    public function addMember($member)
    {
    	$this->load->database();
    	return $this->db->insert('member',$member);
    }
    public function getMemberData($uid)
    {
         $this->load->database();
        $query = $this->db->query("Select * from member where ID ='$uid'");
        return $query->row();  
    }
  public function DeleteMemberData($uid)
    {
         $this->load->database();
       $this->db->where("ID",$uid);
        $this->db->delete("member");
    }
    public function UpdateUser($uid,$data)
    {
        $this->load->database();
        $this->db->where("ID",$uid);
        $this->db->update('member', $data);     

 
    }
      
} 