<?php

class product_model extends CI_Model
{

    public function addProduct($Product)
    {
         $this->db->insert('products',$Product);
         $insert_id = $this->db->insert_id();

         return  $insert_id;
    }

    public function getProductData($pid)
    {   
        $query = $this->db->query("
                                Select * 
                                from products  
                                where ProductID ='$pid'
                                ");
        
       return $query->row();  
    }
    
    public function getSelectedStocks($pid)
    {
        $query = $this->db->query("
                                Select name, count(NetWeight) as amount
                                from productdetails
                                where pid = '$pid'  
                                ");
        return $query->result();
        
    }
    
    public function getProducts()
    {  
        $query = $this->db->query("
                                Select ProductID as pid, ProductName as pName,QuantityProduced as QP,QuantityIssued as Qissue,
                                PriceperKG as Price,ProductDate as date
                                from products  
                                ");
        return $query->result();
    }
    
    public function UpdateStocksAfterProductEntry($sid,$issued,$available)
    {
        $data = array( 
                      'QuantityIssued'  =>$issued, 
                      'QuantityAvailable'=>  $available 
                      );
            $this->db->where('StockID', $sid);
            $this->db->update('stocks', $data);
    }

    public function addProductDetails($Details)
    {
      $this->db->insert('productdetails',$Details);
    }

     //This query is to get all available stocks for product entry. User has to select a bunch of stocks
    //in order to make/Enter a product
    public function getStocksDataForProduct()
    {  
        $query = $this->db->query("
                                Select s.StockName as s_Name, sum(s.QuantityAvailable) as quantity
                                from stocks as s 
                                where s.QuantityIssued <= s.QuantityPurchased and QuantityAvailable !=0
                                Group by s_Name
                                ");
        return $query->result();
    }
     
     public function GetProductDetails($pid)
     {
        $query = $this->db->query("
                                Select *
                                from productdetails
                                where pid = '$pid'  
                                ");
        return $query->result();
     }

     public function DeleteProductDetails($pid)
     {
        $this->db->where("pid",$pid);
        $this->db->delete("productdetails");
    
     }
    

    public function Update_Stock_States_After_Release($sid,$NetWeight)
    {       
     $query = $this->db->query("
                                Select QuantityIssued as qi,QuantityAvailable as avlb
                                from stocks
                                where StockID = '$sid'  
                                ");
        $CurrentState =  $query->result();
     

           $data = array( 
                      'QuantityIssued'  =>$CurrentState['qi'] - $NetWeight, 
                      'QuantityAvailable'=>$CurrentState['avlb'] + $NetWeight 
                      );
            $this->db->where('StockID', $sid);
            $this->db->update('stocks', $data);
  
    }

    public function getValidStocksForCalculation()
    {  
        $query = $this->db->query("
                                SELECT StockID as sid,StockName as name,QuantityPurchased as purchased,QuantityIssued as issued,
                                QuantityAvailable as available,
                                PriceperKG as price
                                FROM `stocks` 
                                where QuantityIssued<=QuantityPurchased and QuantityAvailable !=0
                                Order by StockDate
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

       return $query->row();  
    }
    
} 