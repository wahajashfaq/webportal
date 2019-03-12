<?php
class unit_model extends CI_Model
{


	public function addUnit($unit)
    {
        $this->db->where('name',$unit['name']);
        $query = $this->db->get('units');
        if ($query->num_rows() > 0){
            return false;
        }
        else{
            return $this->db->insert('units',$unit);
        }
        
    }

    public function deleteUnit($uname)
    {
        $this->db->where('name',$uname);
        $query = $this->db->get('units');
        if ($query->num_rows() < 0){
            return false;
        }
        else{
            $this->db->where('name',$uname);
            $this->db->delete('units');
            return true;
        }
        
    }

    public function getUnit(){
    	$query = $this->db->query("
                                Select * From units
                                ");

       return $query->result();
    }
}