<?php

class User_model extends CI_Model
{
    public function getUsers()
    {
    	$this->load->database();
    	$query = $this->db->query("Select * from user");
    	return $query->result();
    }

  public function addUser($name,$lname,$pass,$mail, $Utype,$contact,$Address,$date)
    {
    	$this->load->database();
    	return $this->db->insert('user',['Name'=>$name,'Lname'=>$lname,'mem_pass'=>$pass,'Email'=>$mail,'Utype'=>$Utype,
    		                      'ContactNumber'=>$contact,'uaddress'=>$Address,'EntryDate'=>$date]
    		                      );
    	 
    }
      
} 