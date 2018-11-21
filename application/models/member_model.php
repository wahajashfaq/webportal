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
} 