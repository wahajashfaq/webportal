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
                                order by s.StockDate desc
                                ");
        return $query->result();
    }

public function GetStockValuationForReport()
{
          $query = $this->db->query("
                                    SELECT s.StockName as Name,s.QuantityAvailable as qa,
                                    s.PriceperKG as price,(s.QuantityAvailable * s.PriceperKG) as total
                                    FROM stocks as s 
                                    WHERE s.QuantityAvailable != 0
                                    GROUP by s.StockID
                                           ");
        
       return $query->result();  
      
}

 public function GetOwingPaymentsForReport()
  {
     $query = $this->db->query("
                              SELECT s.StockName as OrderName,
                             (SELECT Concat(m.Name,' ',m.Lname) from member as m where m.ID= s.SupplierID) 
                              as Name,SUM(s.owe) as Due
                             from stocks as s 
                             GROUP by s.SupplierID
                              ");
        return $query->result();
  }

    public function getStockData($sid)
    {
        $query = $this->db->query("
                                Select s.StockID as s_ID,s.StockName as StockName,s.SupplierID as id,
                                CONCAT (m.Name,m.Lname) as SupplierName,s.QuantityPurchased as QP,
                                s.QuantityIssued as Qissue,s.PriceperKG as Price,s.TotalPrice as bill,
                                s.StockDate as date,s.comments as comment, s.owe as owe
                                from member as m,stocks as s
                                where m.ID = s.SupplierID and  s.StockID ='$sid'
                                ");

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