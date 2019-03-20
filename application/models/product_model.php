<?php

class product_model extends CI_Model
{

    public function addProduct($Product)
    {
         $this->db->insert('products',$Product);
         $insert_id = $this->db->insert_id();

         return  $insert_id;
    }

    public function getUsedProducts()
    {
        $query = $this->db->query("
                             Select DISTINCT(ProductID) as ID 
                             FROM products where ProductID in(
                                                              Select pid 
                                                              from orderdetails
                                                             )
                                   ");
        return $query->result();
    }

    public function addProductName($Product)
    {
        $this->db->where('name',$Product['name']);
        $query = $this->db->get('productsname');
        if ($query->num_rows() > 0){
            return false;
        }
        else{
            return $this->db->insert('productsname',$Product);
        }
        
    }

    public function GetProductsName(){
        $query = $this->db->query("
        SELECT *
        from productsname  
        ");
        return $query->result();
     }

public function DeleteProduct($oid)
{
      $this->db->where("ProductID",$oid);
      $this->db->delete("products");
}
    public function UpdateProductDetails($pid,$item)
    {
      $this->db->where('pid', $pid);
      $this->db->update('productdetails', $item); 
    }
    
    public function UpdateProduct($pid,$product)
    {
        $this->db->where('ProductID', $pid);
        $this->db->update('products', $product);
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
    
    public function GetProductValuationForReport()
    {
          $query = $this->db->query("
                                SELECT p.ProductName as Name,p.QuantityAvailable as qa,
                                p.PriceperKG as price,
                                (p.QuantityAvailable * p.PriceperKG) as total
                                FROM products as p 
                                WHERE p.QuantityAvailable != 0
                                GROUP by p.ProductID
                                ");
        
       return $query->result();  
    }
    public function getSelectedStocks($pid)
    {
        $query = $this->db->query("
                                    Select name, SUM(NetWeight) as amount
                                    from productdetails
                                    where pid = '$pid'
                                    group by name
                                  ");
        return $query->result();
        
    }

    public function getSelectedStocksproductdetails($pid)
    {
        $query = $this->db->query("
                                    Select *
                                    from productdetails,stocks
                                    where pid = '$pid' and productdetails.sid = stocks.StockID
                                  ");
        return $query->result();
        
    }
    
    public function getProducts()
    {  
        $query = $this->db->query("
                                Select ProductID as pid,unit as unit, ProductName as pName,QuantityProduced as QP,QuantityIssued as Qissue,
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
                                Select s.StockName as s_Name,s.unit as unit, sum(s.QuantityAvailable) as quantity
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
                      'QuantityIssued'  =>$CurrentState[0]->qi - $NetWeight, 
                      'QuantityAvailable'=>$CurrentState[0]->avlb + $NetWeight 
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

     public function deleteProductName($uname)
    {
        $this->db->where('name',$uname);
        $query = $this->db->get('productsname');
        if ($query->num_rows() < 0){
            return false;
        }
        else{
            $this->db->where('name',$uname);
            $this->db->delete('productsname');
            return true;
        }
        
    }

    
} 