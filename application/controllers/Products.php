<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		
		$this->load->model('product_model','pt');
		$stocks = $this->pt->getStocksDataForProduct();
		$this->load->view('AddProduct',['Stocks'=>$stocks]);
		// $this->viewStock();
	}

public function editProduct()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('product_model','pd');
         $pid = $_GET['DataID'];
         $product = $this->pd->getProductData($pid);
         $SelectedData = $this->pd->getSelectedStocks($pid);
         // $StockRecords = 
         $this->Release_Stocks_From_Product($pid);
         $Stocks = $this->pd->getStocksDataForProduct();
         $this->load->view('editProduct',['product'=>$product,'Stocks'=>$Stocks,'SelectedData'=>$SelectedData]);	
		} 
       
	}

public function UpdateProductEntry()
{
	
}

public function Release_Stocks_From_Product($pid)
{
	$this->load->model('product_model','pd');
    $StockRecords= $this->pd->GetProductDetails($pid);
    $this->pd->DeleteProductDetails($pid);
     foreach ($StockRecords as $s) 
     {
     	$this->pd->Update_Stock_States_After_Release($s->sid,$s->NetWeight);
     }
//    return $StockRecords;
}

	public function AddProductEntry()
	{
		$product = $this->input->post();
		$snames = $product['sname'];
		$sweights = $product['sweight'];
		$product['QuantityIssued'] = 0;
        $product['QuantityAvailable']=$product['QuantityProduced'];

    if (!isset($product['comments']) or empty($post['comments'])) { $product['comments'] = "No Comments"; }
		
        unset($product['sname']);
        unset($product['sweight']);
        unset($product['submit']);
        unset($product['StockID']);
        unset($product['InputAmount']);
        
       

		foreach ($snames as $i=>$name) 
		{
			$InputItems[] = array
			         ( //this array must be created dynamic 
                      'name' => $name,
                      'amount' => $sweights[$i],
                      );
		
       }
        $this->load->model('product_model','pd');
        $StockItems = $this->pd->getValidStocksForCalculation();
        echo "<pre>";
        print_r($product);
        echo "The Stocks Items are..<br>";
        print_r($StockItems) ;
        foreach ($StockItems as $item) 
        {
             $item->NetWeight = 0;
             $item->NetValue = 0;
         }
//*********************CalCulation Starts***************************
         $UpdateItem =array();

foreach($InputItems as $i=>$input)
{
   $InputAmount = (int)$input['amount'];
  foreach($StockItems as $j=>$item)
  {
   
    //echo "Item is: " . $item['name']  ." ". $item['available']. "\n";
    if($input['name'] == $item->name) 
    {
         if($InputAmount<= (int)$item->available)
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

echo"<br>The Calculated Products Details are Below<br><br>";
$weight = 0;
$price=0;
foreach($UpdateItem as $item)
{
   $weight+= $item->NetWeight;
   $price+= $item->NetValue;
}

echo "Net Weight of Product is : " . $weight  ."<br>Net Price of Product is : ". $price. "<br>";

$PriceperKG =floatval(($price/$product['QuantityProduced']));
$product['PriceperKG']=$PriceperKG;
echo "The input Items are....<br>";
print_r($InputItems);
// echo "The StockItems  are....<br>";
// print_r($CopyStockItems);
echo "The Updated Items are....<br>";
print_r($UpdateItem);
         
print_r($product);
  $pid = $this->pd->addProduct($product);
  echo "<br>The Product ID is : " . $pid;
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

    redirect('/addProductView', 'refresh');	
}

	

    public function addProductView()
	{
		$this->load->model('product_model','pd');
		$Products = $this->pd->getProducts();
		$this->load->view('ViewProducts',['Products'=>$Products]);
	}
     
   

}
