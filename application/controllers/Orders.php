<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

     function __construct()
    {
         parent::__construct();
         $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
         $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
         $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
         $this->output->set_header('Pragma: no-cache');
         if (!$this->session->has_userdata('Login') && (!$this->session->userData('Login'))) 
         {
           redirect('login', 'refresh');	
         }
         
    }

public function OrdersReport()
{
	$this->load->model('order_model','model');
		$Customers = $this->model->getCustomersForOrders();
		
	$this->load->view('ReportOrders',['Customers'=>$Customers]);
}

public function CreateOrdersReport()
{
	$post = $this->input->post();
	$From = $post['FromDate'];
	$To = $post['ToDate'];
	$c_id = $post['CustomerID'];
	$this->load->model('order_model','model');
	$data = $this->model->GetOrdersByCustomer($From,$To,$c_id);
	$this->load->view('ReportOrderView',['data'=>$data]);

	//   echo "<pre>";
 // print_r($data);exit;
}
	public function index()
	{
		$this->load->model('order_model','model');
		$Customers = $this->model->getCustomersForOrders();
		$Products = $this->model->getProductsForOrders();
		$this->load->view('AddOrder',['Products'=>$Products,'Customers'=>$Customers]);
	}
   
public function GenerateInvoice()
{
	$oid = $this->input->get('DataID');
	// echo $oid;exit;
	$this->load->library('Pdf');
	$this->load->model('order_model','obj');    
	//$oid = 9;
	$OrderedProducts = $this->obj->getOrderedProducts($oid);
    $OrderDetail = $this->obj->getOrderData($oid);
    $this->load->view('Invoice',['products'=>$OrderedProducts,'Order'=>$OrderDetail]);	
		
	//$this->load->view('Invoice');
}
 public function AddOrder()
 {
         $product = $this->input->post();
		 $InputItems = $this->SetProductPostData($product);
          // echo "<pre>";
          // print_r($InputItems);exit;
		 $this->load->model('order_model','pd');
         $ProductItems = $this->pd->getValidProductsForCalculation();//Getting all Valid Stocks
        
        foreach ($ProductItems as $item) 
        {
             $item->NetWeight = 0;
             $item->NetValue = 0;
         }

        $UpdateItem = $this->Calculate_And_Generate_Stocks_Updates($InputItems,$ProductItems); 
        $price=0;
		foreach($UpdateItem as $item)
		{
		   $price+= $item->NetValue;
		}
		$DiscountedPrice = $price - $product['Discount'];
		if ($DiscountedPrice>0) 
		{
			//If Valid Discounted Price
	        $product['GrandTotal'] = $DiscountedPrice;
		}
        else
        {
        	//If User Enters Discount Greated than the grandtotal itself The Dicount will get set to 0
        	// causing no change in Grandtotal
        	$product['Discount']=0;
        	$product['GrandTotal'] = $price;
        }
	  $oid = $this->pd->addOrder($product);
	  
	   foreach ($UpdateItem as  $item) 
	   { 
		  	$pid=$item->pid;
		  	$issued = $item->issued;
		  	$available = $item->available;
		//  	echo "Pid : ". $pid . " Issued : " . $issued . " Available " . $available ." <br>";
		  	$this->pd->UpdateProductsAfterOrderEntry($pid,$issued,$available);  
	   }
	//   exit;
		foreach($UpdateItem as $item)
		{
			unset($item->purchased);
			//unset($item->price);
			unset($item->available);
			unset($item->issued);
			$item->oid=$oid;
			$this->pd->addOrderDetails($item);
		}
       redirect('Orders/ShowOrders', 'refresh');	

     }


public function deleteOrder()
{
	$this->load->model('order_model','od');
	$oid = $this->input->post('uid');
	$this->Release_Products_From_Order($oid);     
    $this->od->DeleteOrderDetails($oid);
    $this->od->DeleteOrder($oid);
    //return true;
}
 public function UpdateOrderEntry()
 {
         $product = $this->input->post();
         $oid = $product['DataID'];
		 $InputItems = $this->SetProductPostData($product);
         unset($product['DataID']); 
         // echo "<pre>";
         // print_r($InputItems);exit;
     	 $this->load->model('order_model','pd');
         $this->Release_Products_From_Order($oid);
         
         $this->pd->DeleteOrderDetails($oid);
    
	     $ProductItems = $this->pd->getValidProductsForCalculation();//Getting all Valid Stocks
        
        foreach ($ProductItems as $item) 
        {
             $item->NetWeight = 0;
             $item->NetValue = 0;
         }

        $UpdateItem = $this->Calculate_And_Generate_Stocks_Updates($InputItems,$ProductItems); 
        $price=0;
		foreach($UpdateItem as $item)
		{
		   $price+= $item->NetValue;
		}
		$DiscountedPrice = $price - $product['Discount'];
		if ($DiscountedPrice>0) 
		{
			//If Valid Discounted Price
	        $product['GrandTotal'] = $DiscountedPrice;
		}
        else
        {
        	//If User Enters Discount Greated than the grandtotal itself The Dicount will get set to 0
        	// causing no change in Grandtotal
        	$product['Discount']=0;
        	$product['GrandTotal'] = $price;
        }
	 // $oid = $this->pd->addOrder($product);
	      $this->pd->UpdateOrder($oid,$product);
	   foreach ($UpdateItem as  $item) 
	   { 
		  	$pid=$item->pid;
		  	$issued = $item->issued;
		  	$available = $item->available;
		  	$this->pd->UpdateProductsAfterOrderEntry($pid,$issued,$available);  
	   }
		foreach($UpdateItem as $item)
		{
			unset($item->purchased);
			//unset($item->price);
			unset($item->available);
			unset($item->issued);
			$item->oid=$oid;
			$this->pd->addOrderDetails($item);
		}
       redirect('Orders/ShowOrders', 'refresh');	

 }    

 public function CreateDebtorsReport()
 {
 	$this->load->model('order_model','pd');
    $Records = $this->pd->GetDuePaymentsForReport();
    $Sum=0;
    foreach ($Records as $key => $r) 
    {
    	$Sum += $r->Due;
    }
    $this->load->view('ReportDebtors',['Records'=>$Records,'Total'=>$Sum]);     
 }
	public function tempView()
	{
	  $this->load->view('OrderDetails');
    }

public function editOrder()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('order_model','od');
         $oid = $_GET['DataID'];
        // echo "ID id : " .$oid;
         $Order = $this->od->getOrderDetails($oid);
         $SelectedData = $this->od->getSelectedProducts($oid);
         $Customers = $this->od->getCustomersForOrders();
		 $Products = $this->od->getProductsDataForOrder($oid);
          // echo "<pre>" . " " . $oid;
          // print_r($SelectedData);
          // print_r($Products);

        foreach ($SelectedData as $s) 
        {
        	foreach ($Products as $p) 
        	{
        		if($p->p_Name == $s->name)
        		{
                      $p->quantity += $s->amount;
        		}
        	}
        }
       //   print_r($Products);exit;
       //   print_r($Products);
       //   print_r($SelectedData);exit;
         $this->load->view('editOrder',['Order'=>$Order,'Products'=>$Products,'Customers'=>$Customers,'SelectedData'=>$SelectedData]);	
		} 
       
	}


    public function SetProductPostData(&$product)
    {

        $snames = $product['sname'];
		$sweights = $product['sweight'];
		$sprice = $product['sprice'];
   if (!isset($product['comments']) or empty($product['comments'])) { $product['comments'] = "No Comments"; }
   if (!isset($product['Discount']) or empty($product['Discount'])) { $product['Discount'] = 0; }
        unset($product['sname']);
        unset($product['sweight']);
        unset($product['sprice']);
        unset($product['SPrice']);
        unset($product['submit']);
        unset($product['StockID']);
        unset($product['InputAmount']);
        
       
		foreach ($snames as $i=>$name) 
		{
		   $InputItems[] =array
		                (
		                'name' => $name,
		                'amount' => $sweights[$i],
		                'price' => $sprice[$i],
		                );
       }
       return $InputItems;
    }

    public function ShowOrders()
	{
		$this->load->model('order_model','obj');
		$Orders = $this->obj->getOrders();
		$this->load->view('ViewOrders',['Orders'=>$Orders]);
	}


	public function temp()
	{
		$this->load->view("OrderDetails");
	}
	   
   public function ViewOrderDetail()
   {
     if(isset($_GET['DataID']))
		{
         $this->load->model('order_model','obj');
         $oid = $_GET['DataID'];
         $OrderedProducts = $this->obj->getOrderedProducts($oid);
         $OrderDetail = $this->obj->getOrderData($oid);
         
         $this->load->view('OrderDetails',['products'=>$OrderedProducts,'Order'=>$OrderDetail]);	
		} 
   }



    public function Calculate_And_Generate_Stocks_Updates(&$InputItems,&$ProductItems)
    {
         $UpdateItem =array();
		foreach($InputItems as $i=>$input)
		{
		   $InputAmount = (int)$input['amount'];//Input amount is required Amount of selected stock
		   // Loop through all the available StockItems from DB to update and compare values
		  foreach($ProductItems as $j=>$item)
		  {
		    //echo "Item is: " . $item['name']  ." ". $item['available']. "\n";
		    //We need to update all the stocks item in available products for every product item in selected stocks
		    //For that if we select A than all the available stock items with A in product and have available amount
		    //will be filtered here at a time. Comparison is made by Product Names
		    if($input['name'] == $item->name) 
		    {
		    	$item->price  = $input['price'];
		         if($InputAmount<= (int)$item->available)  //
		         {
		          $item->NetWeight = $InputAmount;
		          $item->NetValue  = $item->price * $InputAmount;
		          $item->issued    +=$InputAmount;
		          $item->available -=$InputAmount;

		          array_push($UpdateItem,$item);
		          break; 
		         }
		         else
		         {
		          $item->NetWeight = $item->available;
		          $item->NetValue =$item->price * $item->NetWeight;
		          
		          $item->issued +=$item->available;
		          $InputAmount-=$item->available;
		          $item->available=0;
		          array_push($UpdateItem,$item);         
		         }
		     }
		   }
		}

        return $UpdateItem;   	
      }



   public function Release_Products_From_Order($oid)
   {
	$this->load->model('order_model','od');
     $ProductRecords= $this->od->Get_Data_From_OrderDetails($oid);
	     foreach ($ProductRecords as $p) 
	     {
	     	$this->od->Update_Products_States_After_Release($p->pid,$p->NetWeight);
	     }
	    
    }
    



public function OldUpdateOrderEntry()
{
	    //Getting Data from POST Request
		$Order = $this->input->post();
		$oid = $Order['DataID'];
		$this->load->model('order_model','od');       
	    $this->od->DeleteOrderDetails($oid);
    
		//Setting Post Data for Use. This Function call Sets Post data and 
		// Return us Selected $InputItems of user
		$InputItems = $this->SetProductPostData($Order);
		unset($Order['DataID']);
        
        //Getting all Valid Stocks
        $StockItems = $this->od->getValidStocksForCalculation();
        //We will be computing our results and updates against these $StockItems
        foreach ($StockItems as $item) 
        {
             $item->NetWeight = 0;
             $item->NetValue = 0;
        }

        $UpdateItem = $this->Calculate_And_Generate_Stocks_Updates($InputItems,$StockItems); 
		$price=0;
		foreach($UpdateItem as $item)
		{
		   $price+= $item->NetValue;
		}

		$PriceperKG =floatval(($price/$Order['QuantityProduced']));
		$Order['PriceperKG']=$PriceperKG;

	  
	   foreach ($UpdateItem as  $item) 
	   { 
		  	$sid=$item->sid;
		  	$issued = $item->issued;
		  	$available = $item->available;
		  	$this->od->UpdateStocksAfterProductEntry($sid,$issued,$available);  
	   }
		foreach($UpdateItem as $item)
		{
			unset($item->purchased);
			unset($item->price);
			$item->pid=$oid;
			$this->od->addProductDetails($item);
		}

         $this->od->UpdateProduct($oid,$Order);
         redirect('Orders/ShowOrders', 'refresh');	

}



}
