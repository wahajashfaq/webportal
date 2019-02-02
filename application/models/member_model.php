<?php

class member_model extends CI_Model
{
    public function getcustomer()
    {
    	$query = $this->db->query("Select * from member where Utype = 'Customer' ");
    	return $query->result();
    }
    public function getsupplier()
    {
     $query = $this->db->query("Select * from member where Utype = 'Supplier' and Name !='Default' ");
        return $query->result();
    }


public function GetNextMemberID()
{
  $query = $this->db->query("SELECT max(ID)+1 as id FROM member WHERE ID != '1111111111' and Name !='Default' ");
        return $query->row();
    }
    public function addMember($member,$Contacts,$id)
    {
         //$InputItems[] = array();
         foreach ($Contacts as $key => $value) 
         {

           $InputItems[] =array
                        (
                        'm_id' => $id,
                        'contacts' => $value,
                        );
       }
         //  echo "<pre>";
         //  print_r($Contacts);
         // print_r($InputItems);exit;
         $this->db->trans_start();
    	 $this->db->insert('member',$member);
        $this->db->insert_batch('member_contacts',$InputItems);
         $this->db->trans_complete();
    }

public function getMemberContacts($id)
{
  $query= $this->db->query("SELECT m.contacts as ph FROM member_contacts as m  WHERE m.m_id = '$id'");
   return $query->result(); 
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
         $this->db->trans_start();
         $this->sm->UpdateStocksIds($uid);
         $this->db->where("ID",$uid);
         $this->db->delete("member");

          $this->db->where("m_id",$uid);
         $this->db->delete("member_contacts");
         
         $this->db->trans_complete();
    }
    public function IsContactsExist($id)
    {
       $this->db->where('m_id',$id);
        $query = $this->db->get('member_contacts');
        if ($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
   }

    public function UpdateUser($uid,$data,$Contacts)
    {
         foreach ($Contacts as $key => $value) 
         {

           $InputItems[] =array
                        (
                        'm_id' => $uid,
                        'contacts' => $value,
                        );
       }
         //  echo "<pre>";
         //  print_r($Contacts);
         // print_r($InputItems);exit;
         $this->db->trans_start();
        $this->db->where("ID",$uid);
        $this->db->update('member', $data);

         $this->db->where("m_id",$uid);
         $this->db->delete("member_contacts");
         
        $this->db->insert_batch('member_contacts',$InputItems);
        
        
        $this->db->trans_complete();
   }

}