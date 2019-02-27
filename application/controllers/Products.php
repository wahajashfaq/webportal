<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {


    function __construct()
    {
         parent::__construct();
         $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
         $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
         $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
         $this->output->set_header('Pragma: no-cache');
         if (!$this->session->has_userdata('Login') && (!$this->session->userData('Login'))) {
            redirect('login', 'refresh');	
         }
         
         
	}
	
	public function index()
	{
		
		$this->load->model('product_model','pt');
		$stocks = $this->pt->getStocksDataForProduct();
		$productsname = $this->pt->GetProductsName();
		// echo "<pre>";
		// print_r($stocks);exit;
		$this->load->view('AddProduct',['Stocks'=>$stocks,'Productsname'=>$productsname]);
		// $this->viewStock();
	}

	public function addProductNameView()
	{
		$this->load->view('AddProductName');
	}
	
	public function AddProductNameEntry(){
        $this->load->model('product_model','pr');
         $post =$this->input->post();
         
         unset($post['submit']);
         if (!isset($post['ProductName']) or empty($post['ProductName']) ) 
         {
            $this->load->view('AddProductName',['error' => 'please enter product name']);
         }
         $product['name'] = $post['ProductName'];
        if(!$this->pr->addProductName($product))
        {
            $this->load->view('AddProductName',['error' => 'Product Name Already Exist']);
        }
        else{
            $this->load->view('AddProductName',['error' => 'Product Name Added']);
        }
    }

public function editProduct()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('product_model','pd');
         $pid = $_GET['DataID'];
         $product = $this->pd->getProductData($pid);
         $SelectedData = $this->pd->getSelectedStocks($pid);
          $Stocks = $this->pd->getStocksDataForProduct();
        
          //    echo "<pre>";
          //   echo "<br>The Selected Stocks Are<br>";
          // print_r($SelectedData);
        
        foreach ($SelectedData as $s) 
        {
        	foreach ($Stocks as $p) 
        	{
        		if($p->s_Name == $s->name)
        		{
                      $p->quantity += $s->amount;
        		}
        	}
        }

         // echo "<br>The Updated Stocks Are<br>";
         //  print_r($Stocks); exit;

         $this->load->view('editProduct',['product'=>$product,'Stocks'=>$Stocks,'SelectedData'=>$SelectedData]);	
		} 
       
	}

public function UpdateProductEntry()
{
	    //Getting Data from POST Request
		$product = $this->input->post();
		$pid = $product['DataID'];
		$this->load->model('product_model','pd');
       
        $this->Release_Stocks_From_Product($pid);
       
	    $this->pd->DeleteProductDetails($pid);
    
		//Setting Post Data for Use. This Function call Sets Post data and 
		// Return us Selected $InputItems of user
		$InputItems = $this->SetProductPostData($product);
		// echo "<pre>";
		// print_r($InputItems);exit;
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
//		$weight = 0;
		$price=0;
		foreach($UpdateItem as $item)
		{
//		   $weight+= $item->NetWeight;
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

public function CreateProductValuationReport()
{
	$this->load->model('product_model','pd');
    $Records = $this->pd->GetProductValuationForReport();
    $Sum=0;
    // echo "<pre>";
    // print_r($Records);exit;
    foreach ($Records as $key => $r) 
    {
    	$Sum += $r->total;
    }
    $this->load->view('ReportProducts',['Records'=>$Records,'Total'=>$Sum]);
}

public function Release_Stocks_From_Product($pid)
{
	$this->load->model('product_model','pd');

	//Getting all data of Product Details Before releasing them
    $StockRecords= $this->pd->GetProductDetails($pid);
    
    
    //Delete is Neccessary as We always update Stocks after entry of product
    //We compute Available Stocks without Current NetValues So that we can use modeified values 
    //of StockItems
    //If we want to Edit we want to and Should use the state of Stocks Without Update. So We delete
    //All the Product details and compute them again. Be cause we don't know how many details are there
    //at the time of Update 
       // echo "<pre>";
       // print_r($StockRecords);exit;
    

      // echo "<pre>";
      // print_r($StockRecords);exit;
     foreach ($StockRecords as $s) 
     {
     	$this->pd->Update_Stock_States_After_Release($s->sid,$s->NetWeight);
     	//echo $s->sid." ".$s->NetWeight."<br>";
     }
    
}

    public function SetProductPostData(&$product)
    {
        $snames = $product['sname'];
		$sweights = $product['sweight'];
		//Setting Neccessary Variables to Insert in DB and rest of the calculation 
		 
        $product['QuantityAvailable']= $product['QuantityProduced'] - $product['QuantityIssued'];
        //Adding Available attribute eqaul to produced amount
       //Initial All produced amount will be available to make order
//If User doesnt enter comments or decription set it to default
    if (!isset($product['comments']) or empty($post['comments'])) { $product['comments'] = "No Comments"; }
//Unsetting /Removing all attributes that are further not required
        unset($product['sname']);
        unset($product['sweight']);
        unset($product['submit']);
        unset($product['StockID']);
        unset($product['InputAmount']);
        
       
//Currently we hava array of Selected Stock names and their weight in seperate equal sized arrays
// say sname and sweight respectively 
//We have to loop through arrays and make a single 2d array for easier processing ahead 
		foreach ($snames as $i=>$name) 
		{
		   $InputItems[] =array(  
		                      'name' => $name,
		                      'amount' => $sweights[$i],
		                      );
		
       }
       return $InputItems;
    }

    public function Calculate_And_Generate_Stocks_Updates(&$InputItems,&$StockItems)
    {
         $UpdateItem =array();

         //UpdateItem is the array that holds all the Updated Stocks
         //We Update records in StockItems array and push only updated value in this array
         //According to the type of Stock Names

       //*********************CalCulation Starts***************************

		//For the sake of simplicity and abstracion we on the view side show unique 
		//Stock with all available amount. ForEach Input item(Stock) in
		//Selected stocks from POST query by user. Loop through the Valid Available stocks from db and
		//Update the value till required amount is 0 for that stock

		foreach($InputItems as $i=>$input)
		{
		   $InputAmount = (int)$input['amount'];//Input amount is required Amount of selected stock
		   // Loop through all the available StockItems from DB to update and compare values
		  foreach($StockItems as $j=>$item)
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

	public function AddProductEntry()
	{
		//Getting Data from POST Request
		$product = $this->input->post();
		 $product['QuantityIssued'] = 0; //Issued Quantity will be 0 for new product by default 
         //$product['QuantityAvailable']=$product['QuantityProduced'];//Adding Available attribute eqaul to produced amount
          $InputItems = $this->SetProductPostData($product);
       
		 //Now InputItems is the array that contain all the selected stocks at each index
		 //Load the product model as pd and get Valid Stocks to compare against Selected stocks
		 //and make updates
		 //By valid we mean a stock should have some amount Available  and != 0.
        $this->load->model('product_model','pd');
        $StockItems = $this->pd->getValidStocksForCalculation();//Getting all Valid Stocks
        // echo "<pre>";
        // print_r($product);
        // echo "The Stocks Items are..<br>";
        // print_r($StockItems) ;
  //We need to calculate NetWeight used from each Stock and netValue calculated accordingly
  //But we dont store these attributes in stocks table. So for calculation we are adding these varibles
  // In each object of Valid available stocks      
        foreach ($StockItems as $item) 
        {
             $item->NetWeight = 0;
             $item->NetValue = 0;
         }

        $UpdateItem = $this->Calculate_And_Generate_Stocks_Updates($InputItems,$StockItems); 
// echo"<br>The Calculated Products Details are Below<br><br>";
$weight = 0;
$price=0;
foreach($UpdateItem as $item)
{
   $weight+= $item->NetWeight;
   $price+= $item->NetValue;
}

// echo "Net Weight of Product is : " . $weight  ."<br>Net Price of Product is : ". $price. "<br>";

$PriceperKG =floatval(($price/$product['QuantityProduced']));
$product['PriceperKG']=$PriceperKG;
// echo "The input Items are....<br>";
// print_r($InputItems);
// echo "The StockItems  are....<br>";
// print_r($CopyStockItems);
// echo "The Updated Items are....<br>";
// print_r($UpdateItem);
         
// print_r($product);
//exit;
	  $pid = $this->pd->addProduct($product);
	  
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

    redirect('Products/ProductView', 'refresh');	
}

	public function DeleteProduct()
	{
	$this->load->model('product_model','pd');
	$pid = $this->input->post('uid');
	$this->Release_Stocks_From_Product($pid);
    $this->pd->DeleteProductDetails($pid);
    $this->pd->DeleteProduct($pid);
    //return true;
}
    public function ProductView()
	{
		$this->load->model('product_model','pd');
		$Products = $this->pd->getProducts();
		$UsedProducts = $this->pd->getUsedProducts();
		foreach ($Products as $skey => $p)
        {
            foreach ($UsedProducts as $key => $u) 
            {
                if ($p->pid == $u->ID) 
                {
                    $p->DontDelete = 1;
                    break;
                }
                else
                { 
                      $p->DontDelete = 0;   
                }
            }
        }
		
		$this->load->view('ViewProducts',['Products'=>$Products]);
	}
     
   

}
