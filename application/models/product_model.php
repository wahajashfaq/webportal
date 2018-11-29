<?php

class product_model extends CI_Model
{
    public function getsuppliers()
    {
    	$query = $this->db->query("Select * from member where Utype = 'Supplier'");
    	return $query->result();
    }
     //This query is to get all available stocks for product entry. User has to select a bunch of stocks
    //in order to make/Enter a product
    public function getStocksDataForProduct()
    {  
        $query = $this->db->query("
                                Select s.StockName as s_Name, sum(s.QuantityAvailable) as quantity
                                from stocks as s 
                                where s.QuantityIssued <= s.QuantityPurchased
                                Group by s_Name
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
    
} 