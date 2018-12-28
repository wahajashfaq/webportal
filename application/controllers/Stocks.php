<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends CI_Controller {

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
