<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends CI_Controller {


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
	public function index()
	{
		//$this->load->model('stock_model','st');
		//$this->st->getsuppliers();
		 $this->viewStock();
	}

 public function CreateCreditorsReport()
 {
 	$this->load->model('stock_model','pd');
    $Records = $this->pd->GetOwingPaymentsForReport();
    $Sum=0;
    foreach ($Records as $key => $r) 
    {
        $paid = $this->pd->getCreditPaymentpaid($r->ID);
        if(is_null($paid[0]->paid)){
            $paid[0]->paid=0;
        }
        $r->Due = $r->Due - $paid[0]->paid;
    	$Sum += $r->Due;
    }
    $this->load->view('ReportCreditors',['Records'=>$Records,'Total'=>$Sum]);     
 }
public function editStock()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('stock_model','st');
         $sid = $_GET['DataID'];
         $stock = $this->st->getStockData($sid);
         $suppliers = $this->st->getsuppliers();
         $stocksname = $this->st->GetStocksName();
         $this->load->model('unit_model','ut');
         $units = $this->ut->getUnit();
	     $this->load->view('editStock',['stock'=>$stock,'suppliers'=>$suppliers,'supplierID'=>$stock->id,'stocksname'=>$stocksname,'units'=>$units]);
		}
 	}

	public function updateStock()
	{
       	 $this->load->model('stock_model','st');
    	 $post =$this->input->post();

		 unset($post['submit']);
		 if (!isset($post['QuantityIssued']) or empty($post['QuantityIssued']) ) {	$post['QuantityIssued'] = 0; }
		 if (!isset($post['comments']) or empty($post['comments'])) { $post['comments'] = "No Comments"; }
		 $post['TotalPrice'] = $post['QuantityPurchased'] * $post['PriceperKG'];
         $post['owe'] = $post['TotalPrice'];
		 $post['QuantityAvailable'] = $post['QuantityPurchased'] - $post['QuantityIssued'];
         $sid = $post['DataID'];
		 unset($post['DataID']);

		    // echo "<pre>";
		    // print_r($post);exit;
		 $this->st->UpdateStock($sid,$post);
		 $this->viewStock();
	}

public function CreateStockValuationReport()
{
	$this->load->model('stock_model','st');
    $Records = $this->st->GetStockValuationForReport();
    $Sum=0;
    // echo "<pre>";
    // print_r($Records);exit;
    foreach ($Records as $key => $r) 
    {
    	$Sum += $r->total;
    }
    $this->load->view('ReportStocks',['Records'=>$Records,'Total'=>$Sum]);
}

    public function addStockView()
	{
		$this->load->model('stock_model','st');
        $this->load->model('unit_model','ut');
        $units = $this->ut->getUnit();
        $suppliers = $this->st->getsuppliers();
        $stocksname = $this->st->GetStocksName();
		$this->load->view('AddStock',['suppliers'=>$suppliers,'stocksname'=>$stocksname,'units'=>$units]);
    }
    
    public function addStockNameView()
	{
		$this->load->view('AddStockName');
    }

    public function AddStockNameEntry(){
        $this->load->model('stock_model','st');
         $post =$this->input->post();
         
         unset($post['submit']);
         if (!isset($post['StockName']) or empty($post['StockName']) ) 
         {
            $this->load->view('AddStockName',['error' => 'please enter stock name']);
         }
         $stock['name'] = $post['StockName'];
        if(!$this->st->addStockName($stock))
        {
            $this->load->view('AddStockName',['error' => 'Stock Name Already Exist']);
        }
        else{
            $this->load->view('AddStockName',['error' => 'Stock Name Added']);
        }
    }

    public function addStock()
	{
		 $this->load->model('stock_model','st');
    	 $post =$this->input->post();

		 unset($post['submit']);
		 if (!isset($post['QuantityIssued']) or empty($post['QuantityIssued']) ) {	$post['QuantityIssued'] = 0; }
		 if (!isset($post['comments']) or empty($post['comments'])) { $post['comments'] = "No Comments"; }

		 $post['TotalPrice'] = $post['QuantityPurchased'] * $post['PriceperKG'];
         $post['owe'] = $post['QuantityPurchased'] * $post['PriceperKG'];
		 $post['QuantityAvailable'] = $post['QuantityPurchased'] - $post['QuantityIssued'];

		 $this->st->addStock($post);
		 $this->viewStock();
    }
    
    public function deleteStock()
    {
        $this->load->model('stock_model');
        $uid = $this->input->post('uid');
        $this->stock_model->DeleteStockData($uid);
        return true;
    }

     public function viewStock()
     {
     	$this->load->model('stock_model','st');
	    $stocks = $this->st->getStocks();
	    $UsedStocks = $this->st->getUsedStocks();
        foreach ($stocks as $skey => $s)
        {
            foreach ($UsedStocks as $key => $u) 
            {
                if ($s->s_ID == $u->ID) 
                {
                    $s->DontDelete = 1;
                    break;
                }
                else
                { 
                      $s->DontDelete = 0;   
                }
            }
        }
      //  echo "<pre>";
        // print_r($stocks);
          // print_r($UsedStocks);exit;
	 $this->load->view('ViewStocks',['Stocks'=>$stocks]);
     }

     public function CreditPaymentDetails($id){

        $this->load->model('stock_model','st');
        $Records = $this->st->getCreditPaymentDetails($id);
        $Name = $this->st->getCreditPaymentName($id);
        $due = $this->st->getCreditPaymentDue($id);
        $paid = $this->st->getCreditPaymentpaid($id);
        if(is_null($paid[0]->paid)){
            $paid[0]->paid=0;
        }
        $owe = $due[0]->owe -$paid[0]->paid;
        $sname = $due[0]->StockName;
        $sdate = $due[0]->StockDate;
        $this->load->view('CreditPaymentdetails',['Records' => $Records,'Name'=> $Name,'Owe'=> $owe,'ID'=> $id,'Error'=>" ",'sname'=>$sname,'sdate'=>$sdate]);
     }

     public function AddCreditEntery($id)
    {
         $this->load->model('stock_model','st');
         $post =$this->input->post();

         unset($post['submit']);

                $Records = $this->st->getCreditPaymentDetails($id);
                $Name = $this->st->getCreditPaymentName($id);
                $due = $this->st->getCreditPaymentDue($id);
                $paid = $this->st->getCreditPaymentpaid($id);
                if(is_null($paid[0]->paid)){
                    $paid[0]->paid=0;
                }
                $owe = $due[0]->owe -$paid[0]->paid;
                $sname = $due[0]->StockName;
                $sdate = $due[0]->StockDate;
         if (!isset($post['PayAmount']) or empty($post['PayAmount']) ) { 
                $error = 'Enter ammount!';

                $this->load->view('CreditPaymentdetails',['Records' => $Records,'Name'=> $Name,'Owe'=> $owe,'ID'=> $id,'Error'=>$error,'sname'=>$sname,'sdate'=>$sdate ]);

         }
         if (!isset($post['PayDate']) or empty($post['PayDate'])) {
            $error = 'Enter Date!';

                $this->load->view('CreditPaymentdetails',['Records' => $Records,'Name'=> $Name,'Owe'=> $owe,'ID'=> $id,'Error'=>$error,'sname'=>$sname,'sdate'=>$sdate ]);
         }
         if($post['PayAmount']>$owe){
            $error = 'Amount greater than due amount!';

                $this->load->view('CreditPaymentdetails',['Records' => $Records,'Name'=> $Name,'Owe'=> $owe,'ID'=> $id,'Error'=>$error,'sname'=>$sname,'sdate'=>$sdate ]);
         }
         else{
             $stocks['SID'] = $id;
             $stocks['date'] =$post['PayDate'];
             $stocks['amount'] =$post['PayAmount'];
             $error = 'Amount Added!';
             $this->st->AddCreditEntery($stocks);
             $Records = $this->st->getCreditPaymentDetails($id);
             $due = $this->st->getCreditPaymentDue($id);
             $paid = $this->st->getCreditPaymentpaid($id);
             if(is_null($paid[0]->paid)){
                $paid[0]->paid=0;
             }
             $owe = $due[0]->owe -$paid[0]->paid;       
             $this->load->view('CreditPaymentdetails',['Records' => $Records,'Name'=> $Name,'Owe'=> $owe,'ID'=> $id,'Error'=>$error,'sname'=>$sname,'sdate'=>$sdate]);
        }
    }

    public function DeleteCreditEntery($id = 0, $ID = 0)
    {
         $this->load->model('stock_model','st');
         $this->st->DeleteCreditEntery($id);
         $this->CreditPaymentDetails($ID);
    }

    public function ViewStockNames(){
        $this->load->model('stock_model','ut');
        $units = $this->ut->GetStocksName();
        $this->load->view('ViewStockNames',['Units'=>$units]);
    }

    public function DeleteStockName()
    {
         
       $this->load->model('stock_model');
        $uname = $this->input->post('uname');
        $this->stock_model->deleteStockName($uname);
        return true;
    }
}
