<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function index()
	{
		$this->load->model('order_model','model');
		$Customers = $this->model->getCustomersForOrders();
		$Products = $this->model->getProductsForOrders();
		$this->load->view('AddOrder',['Products'=>$Products,'Customers'=>$Customers]);
	}
   

     public function AddOrder()
     {
         $product = $this->input->post();
		 $InputItems = $this->SetProductPostData($product);
          
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
		  	$this->pd->UpdateProductsAfterOrderEntery($pid,$issued,$available);  
	   }
		foreach($UpdateItem as $item)
		{
			unset($item->purchased);
			unset($item->price);
			unset($item->available);
			unset($item->issued);
			$item->oid=$oid;
			$this->pd->addOrderDetails($item);
		}
    redirect('Products/ProductView', 'refresh');	
     }
	public function tempView()
	{
	  $this->load->view('OrderDetails');
    }

    public function SetProductPostData(&$product)
    {

        $snames = $product['sname'];
		$sweights = $product['sweight'];
   if (!isset($product['comments']) or empty($product['comments'])) { $product['comments'] = "No Comments"; }
   if (!isset($product['Discount']) or empty($product['Discount'])) { $product['Discount'] = 0; }
        unset($product['sname']);
        unset($product['sweight']);
        unset($product['submit']);
        unset($product['StockID']);
        unset($product['InputAmount']);
        
       
		foreach ($snames as $i=>$name) 
		{
		   $InputItems[] =array
		                (
		                'name' => $name,
		                'amount' => $sweights[$i],
		                );
       }
       return $InputItems;
    }

    public function OrdersView()
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

   public function Release_Stocks_From_Product($pid)
   {
	$this->load->model('product_model','pd');

	//Getting all data of Product Details Before releasing them
    $StockRecords= $this->pd->GetProductDetails($pid);
     foreach ($StockRecords as $s) 
     {
     	$this->pd->Update_Stock_States_After_Release($s->sid,$s->NetWeight);
     	//echo $s->sid." ".$s->NetWeight."<br>";
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
		    //We need to update all the stocks item in available stocks for every stock item in selected stocks
		    //For that if we select A than all the available stock items with A in Stock and have available amount
		    //will be filtered here at a time. Comparison is made by Stock Names
		    if($input['name'] == $item->name) 
		    {

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
		          $item->NetValue = $item->price * $item->NetWeight;
		         
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


public function editProduct()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('product_model','pd');
         $pid = $_GET['DataID'];
         $product = $this->pd->getProductData($pid);
         $SelectedData = $this->pd->getSelectedStocks($pid);
         
         $this->Release_Stocks_From_Product($pid);
         $Stocks = $this->pd->getStocksDataForProduct();
         $this->load->view('editProduct',['product'=>$product,'Stocks'=>$Stocks,'SelectedData'=>$SelectedData]);	
		} 
       
	}

public function UpdateProductEntry()
{
	    //Getting Data from POST Request
		$product = $this->input->post();
		$pid = $product['DataID'];
		 $this->load->model('product_model','pd');       
	    $this->pd->DeleteProductDetails($pid);
    
		//Setting Post Data for Use. This Function call Sets Post data and 
		// Return us Selected $InputItems of user
		$InputItems = $this->SetProductPostData($product);
		unset($product['DataID']);
        
        //Getting all Valid Stocks
        $StockItems = $this->pd->getValidStocksForCalculation();
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

		$PriceperKG =floatval(($price/$product['QuantityProduced']));
		$product['PriceperKG']=$PriceperKG;

	  
	   foreach ($UpdateItem as  $item) 
	   { 
		  	$sid=$item->sid;
		  	$issued = $item->issued;
		  	$available = $item->available;
		  	$this->pd->UpdateStocksAfterProductEntry($sid,$issued,$available);  
	   }
		foreach($UpdateItem as $item)
		{
			unset($item->purchased);
			unset($item->price);
			$item->pid=$pid;
			$this->pd->addProductDetails($item);
		}

         $this->pd->UpdateProduct($pid,$product);
         redirect('Products/ProductView', 'refresh');	

}



}
