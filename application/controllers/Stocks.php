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

public function editStock()
	{
		if(isset($_GET['DataID']))
		{
         $this->load->model('stock_model','st');
         $sid = $_GET['DataID'];
         //echo $sid;
         $stock = $this->st->getStockData($sid);
         $suppliers = $this->st->getsuppliers();
    //       echo $sid;
    //       echo "<pre>";
		  // print_r($stock);exit;
	     $this->load->view('editStock',['stock'=>$stock,'suppliers'=>$suppliers,'supplierID'=>$stock->id]);
		}
       //echo $u_id;
	}

	public function updateStock()
	{
       	 $this->load->model('stock_model','st');
    	 $post =$this->input->post();

		 unset($post['submit']);
		 if (!isset($post['QuantityIssued']) or empty($post['QuantityIssued']) ) {	$post['QuantityIssued'] = 0; }
		 if (!isset($post['comments']) or empty($post['comments'])) { $post['comments'] = "No Comments"; }
		 $post['TotalPrice'] = $post['QuantityPurchased'] * $post['PriceperKG'];
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
		$suppliers = $this->st->getsuppliers();
		$this->load->view('AddStock',['suppliers'=>$suppliers]);
	}

    public function addStock()
	{
		 $this->load->model('stock_model','st');
    	 $post =$this->input->post();

		 unset($post['submit']);
		 if (!isset($post['QuantityIssued']) or empty($post['QuantityIssued']) ) {	$post['QuantityIssued'] = 0; }
		 if (!isset($post['comments']) or empty($post['comments'])) { $post['comments'] = "No Comments"; }

		 $post['TotalPrice'] = $post['QuantityPurchased'] * $post['PriceperKG'];
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
	 //     echo "<pre>";
		//  print_r($stocks);exit;
	 $this->load->view('ViewStocks',['Stocks'=>$stocks]);
     }

}
