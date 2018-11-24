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
    	return $this->db->insert('user',['Name'=>$name,'Lname'=>$lname,'u_pass'=>$pass,'Email'=>$mail,'Utype'=>$Utype,
    		                      'ContactNumber'=>$contact,'uaddress'=>$Address,'EntryDate'=>$date]
    		                      );
    	 
    }

    public function DeleteUserData($uid)
    {
         $this->load->database();
       $this->db->where("u_ID",$uid);
        $this->db->delete("user");
    }

    public function getUserData($uid)
    {
        $this->load->database();
        $query = $this->db->query("Select * from user where u_ID ='$uid'");
        return $query->row();    
    }
    public function UpdateUser($uid,$name,$lname,$pass,$mail, $Utype,$contact,$Address,$date)
    {  

        $this->load->database();
        $this->db->set(['Name'=>$name,'Lname'=>$lname,'u_pass'=>$pass,'Email'=>$mail,'Utype'=>$Utype,
                      'ContactNumber'=>$contact,'uaddress'=>$Address,'EntryDate'=>$date]);
        $this->db->where('u_ID',$uid);
        $this->db->update('user');
    }
      
} 