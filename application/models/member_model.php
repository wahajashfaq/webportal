<?php

class member_model extends CI_Model
{
    public function getmembers()
    {
    	
    	$query = $this->db->query("Select * from member");
    	return $query->result();
    }

    public function addMember($member)
    {
    	return $this->db->insert('member',$member);
    }

    public function getMemberData($uid)
    {   
        $query = $this->db->query("Select * from member where ID ='$uid'");
        return $query->row();  
    }

    public function DeleteMemberData($uid)
    {   
         $this->load->model("stock_model","sm");
        // SetSupplierId to be deleted ,Default In Stocks Default is 1111111111
         $this->sm->UpdateStocksIds($uid);
         $this->db->where("ID",$uid);
         $this->db->delete("member");
    }
    
    public function UpdateUser($uid,$data)
    {
        $this->db->where("ID",$uid);
        $this->db->update('member', $data);     
    }
      
} 