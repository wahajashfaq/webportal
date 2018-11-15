<?php

class Test extends CI_Model
{
    public function getUsers()
    {
    	$this->load->database();
    	$query = $this->db->query("Select * from users");
    	//echo"<pre>";
    	//print_r($query->result());exit;
    	return $query->result();
    }
} 