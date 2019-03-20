<?php

class stock_model extends CI_Model
{
    public function getsuppliers()
    {
    	$query = $this->db->query("Select * from member where Utype = 'Supplier' and Name != 'Default'");
    	return $query->result();
    }

    public function getUsedStocks()
    {
        $query = $this->db->query("
                                Select DISTINCT(StockID) as ID 
                                FROM stocks where StockID in(
                                                            Select sid 
                                                            from 
                                                            productdetails 
                                                            )
                                 ");
        return $query->result();
    }

    public function getStocks()
    {
        $query = $this->db->query("
                                Select s.unit as unit, s.StockID as s_ID,s.StockName as StockName,s.SupplierID as id,
                                CONCAT (m.Name,' ',m.Lname) as SupplierName,s.QuantityPurchased as QP,
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
                              SELECT s.StockName as OrderName,s.StockID as ID,
                             (SELECT Concat(m.Name,' ',m.Lname) from member as m where m.ID= s.SupplierID) 
                              as Name,s.owe as Due,s.StockDate as date
                             from stocks as s 
                             Having Due > 0
                              ");
        return $query->result();
  }

    public function getStockData($sid)
    {
        $query = $this->db->query("
                                Select s.unit as unit,s.StockID as s_ID,s.StockName as StockName,s.SupplierID as id,
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

    public function addStockName($Stock)
    {
        $this->db->where('name',$Stock['name']);
        $query = $this->db->get('stocksname');
        if ($query->num_rows() > 0){
            return false;
        }
        else{
            return $this->db->insert('stocksname',$Stock);
        }
        
    }

    public function DeleteStockData($sid)
    {
        $this->db->where("StockID",$sid);
        $this->db->delete("stocks");
    }

    public function UpdateStocksIds($uid)
    {
      $this->db->set('SupplierID', '-1');
     $this->db->where('SupplierID', $uid);
     $this->db->update('stocks');
//         Update stocks
// set SupplierID = -1
// where  = 13
     }

     public function GetStocksName(){
        $query = $this->db->query("
        SELECT *
        from stocksname  
        ");
        return $query->result();
     }


     public function getCreditPaymentDetails($id){
        $query = $this->db->query("
        SELECT *
        from stockpayments
        where SID = $id;  
        ");
        return $query->result();
     }

     public function getCreditPaymentName($id){
        $query = $this->db->query("
        SELECT *
        from member
        where Utype = 'Supplier' and ID = (Select SupplierID from stocks where StockID = $id);  
        ");
        return $query->result();
     }

     public function getCreditPaymentDue($id){
        $query = $this->db->query("
        SELECT *
        from stocks
        where StockID = $id;  
        ");
        return $query->result();
     }

     public function getCreditPaymentpaid($id){
        $query = $this->db->query("
        SELECT SUM(amount) as paid
        from stockpayments
        where SID = $id;  
        ");
        return $query->result();
     }

    public function AddCreditEntery($stock)
    {
        return $this->db->insert('stockpayments',$stock);
    }

    public function DeleteCreditEntery($id)
    {
        $this->db->where("id",$id);
        $this->db->delete("stockpayments");
    }

     public function deleteStockName($uname)
    {
        $this->db->where('name',$uname);
        $query = $this->db->get('stocksname');
        if ($query->num_rows() < 0){
            return false;
        }
        else{
            $this->db->where('name',$uname);
            $this->db->delete('stocksname');
            return true;
        }
        
    }
}