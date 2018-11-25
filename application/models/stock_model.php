<?php

class stock_model extends CI_Model
{
    public function getsuppliers()
    {
    	$query = $this->db->query("Select * from member where Utype = 'Supplier'");
    	return $query->result();
    }

    public function getStocks()
    {  
        $query = $this->db->query("
                                Select s.StockID as s_ID,s.StockName as StockName,s.SupplierID as id,
                                CONCAT (m.Name,m.Lname) as SupplierName,s.QuantityPurchased as QP,
                                s.QuantityIssued as Qissue,s.PriceperKG as Price,s.TotalPrice as bill,
                                s.StockDate as date from member as m,stocks as s 
                                where m.ID = s.SupplierID
                                ");
        return $query->result();
    }
 
    public function getStockData($sid)
    {   
        $query = $this->db->query("
                                Select s.StockID as s_ID,s.StockName as StockName,s.SupplierID as id,
                                CONCAT (m.Name,m.Lname) as SupplierName,s.QuantityPurchased as QP,
                                s.QuantityIssued as Qissue,s.PriceperKG as Price,s.TotalPrice as bill,
                                s.StockDate as date,s.comments as comment 
                                from member as m,stocks as s 
                                where m.ID = s.SupplierID and  s.StockID ='$sid'
                                ");
        // echo "<pre>";
        //  print_r($query->row());exit;
       return $query->row();  
    }
    public function UpdateStock($sid,$data)
    {
        $this->db->where("StockID",$sid);
        $this->db->update('stocks', $data);     
    }
    public function addStock($Stock)
    {
        return $this->db->insert('stocks',$Stock);
    }

    public function DeleteStockData($sid)
    {
        $this->db->where("StockID",$sid);
        $this->db->delete("stocks");
    }
      
    public function UpdateStocksIds($uid)
    {
      $this->db->set('SupplierID', '1111111111');
     $this->db->where('SupplierID', $uid);
     $this->db->update('stocks');
//         Update stocks
// set SupplierID = 1111111111
// where  = 13
     }
} 