<?php

class order_model extends CI_Model
{
  
  public function addOrder($Order)
  {
     $this->db->insert('orders',$Order);
     $insert_id = $this->db->insert_id();

     return  $insert_id;
  }

  public function UpdateOrder($oid,$order)
  {

    // echo "<pre>";
    // print_r($order);exit;
        $this->db->where('OrderID', $oid);
        $this->db->update('orders', $order);
  }

public function GetOrdersByCustomer($From,$To,$c_id)
{
  $temp ="";
  if (isset($c_id) and !empty($c_id)) 
  {
        $query = $this->db->query("
                              SELECT *,(Select concat(Name , ' ',Lname) from member where ID ='$c_id') as Name
                               FROM orders WHERE CustomerID ='$c_id' and
                               OrderDate BETWEEN CAST('$From' AS DATE) and CAST('$To' as DATE)  
                               ");
        $temp="Husnain";
  
  }
  else{
        $query = $this->db->query("
                              SELECT *,(Select concat(Name , ' ',Lname) from member where ID ='$c_id' ) as Name
                               FROM orders WHERE
                               OrderDate BETWEEN CAST('$From' AS DATE) and CAST('$To' as DATE)  
                               ");
          $temp="Ajmal";
  }
  // echo "<pre>";
  // echo $From . " <br>";
  // echo $To . "<br>";
  // print_r($c_id);exit;
        return $query->result();
 
}
 public function GetDuePaymentsForReport()
  {
     $query = $this->db->query("
                              SELECT o.Reference as OrderName,
                              (SELECT Concat(m.Name,' ',m.Lname) from member as m where m.ID= o.CustomerID) 
                              as Name,SUM(o.Due_Payment) as Due
                              from orders as o 
                              GROUP by o.CustomerID
                              Having Due > 0
                              ");
        return $query->result();
  }

 public function getProductsForOrders()
  {
     $query = $this->db->query("
                                Select s.ProductName as s_Name, sum(s.QuantityAvailable) as quantity
                                from products as s 
                                where s.QuantityIssued <= s.QuantityProduced and QuantityAvailable !=0
                                Group by s_Name
                                ");
        return $query->result();
  }

 public function getOrderDetails($oid)
 {
           $query = $this->db->query("
                                Select * 
                                from orders  
                                where OrderID ='$oid'
                                ");
        
       return $query->row();  
  
 }

public function Get_Data_From_OrderDetails($oid)  
{
  $query = $this->db->query("Select *
                             from orderdetails
                             where oid = '$oid'  
                            ");
        return $query->result();
}

 public function getSelectedProducts($oid)
 {
           $query = $this->db->query("
                                    Select name, SUM(NetWeight) as amount, SUM(NetValue) as SubTotal, price
                                    from orderdetails
                                    where oid = '$oid'
                                    group by name
                                  ");
        return $query->result();
    
 }
 public function UpdateProductsAfterOrderEntry($sid,$issued,$available)
 {
 
   $data = array( 
                  'QuantityIssued'  =>$issued, 
                  'QuantityAvailable'=>  $available 
                 );
            $this->db->where('ProductID', $sid);
            $this->db->update('products', $data);
  }

public function addOrderDetails($Details)
{
  $this->db->insert('orderdetails',$Details);
}

public function getOrders()
{ 
  $query = $this->db->query("
                           Select o.* , 
                           (Select concat(m.Name,' ',m.Lname) from member as m where m.Utype ='Customer' and m.ID = o.CustomerID)
                            as Cname
                            from orders as o
                            ");
        return $query->result();
}

public function getOrderData($oid)
{
 $query = $this->db->query("
                           Select o.OrderID as oid, o.Reference as ref,o.OrderDate as oDate,
                           o.DeliverDate as dDate,o.Discount as disc ,o.GrandTotal as Total,
                           concat(m.Name,' ',m.Lname) as CName, m.Email as email,m.ContactNumber as number,
                           m.uaddress as Caddr 
                           from orders as o,member as m 
                           where o.OrderID = '$oid' and o.CustomerID = m.ID and m.Utype = 'Customer'
                           ");
        return $query->row();
}

 public function DeleteOrderDetails($oid)
     {
          $this->db->where("oid",$oid);
          $this->db->delete("orderdetails");
     }
    


public function Update_Products_States_After_Release($pid,$NetWeight)
{
   $query = $this->db->query("
                                Select QuantityIssued as qi,QuantityAvailable as avlb
                                from products
                                where ProductID = '$pid'  
                                ");
        $CurrentState =  $query->result();
           $data = array( 
                      'QuantityIssued'  =>$CurrentState[0]->qi - $NetWeight, 
                      'QuantityAvailable'=>$CurrentState[0]->avlb + $NetWeight 
                      );
         

            $this->db->where('ProductID', $pid);
            $this->db->update('products', $data);
  
    
}

public function getProductsDataForOrder($oid)
{
    $query = $this->db->query("
                                Select p.ProductName as p_Name, sum(p.QuantityAvailable) as quantity
                                from products as p 
                                where p.QuantityIssued <= p.QuantityProduced and (p.ProductID IN
                                (
                                  Select pid from orderdetails where oid = '$oid'
                                  )
                                 ) or p.QuantityAvailable!=0
                                Group by p_Name
                              ");
        return $query->result();
 }
 
public function DeleteOrder($oid)
{
       $this->db->where("OrderID",$oid);
        $this->db->delete("orders");
}

public function getOrderedProducts($oid)
{
   $query = $this->db->query("
                          SELECT Name, (sum(NetWeight)) as amount,(SUM(NetValue) / SUM(NetWeight) ) as PerKg,
                          SUM(NetValue) as SubTotal
                          FROM `orderdetails` 
                          WHERE oid='$oid'
                          GROUP BY Name
                            ");
        return $query->result();

}
public function getCustomersForOrders()
  {
     $query = $this->db->query("Select ID as cid,CONCAT (Name,' ',Lname) as Cname from member
                                where Utype = 'Customer'");
      return $query->result();
  }

  public function getValidProductsForCalculation()
    {  
        $query = $this->db->query("
                                SELECT ProductID as pid,ProductName as name,QuantityProduced as purchased,
                                QuantityIssued as issued,QuantityAvailable as available,PriceperKG as price
                                FROM `products` 
                                where QuantityIssued<=QuantityProduced and QuantityAvailable !=0
                                Order by ProductDate
                                ");
        return $query->result();
    }

} 