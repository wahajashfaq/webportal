<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends CI_Controller {

	public function index()
	{
		$this->load->view('ViewStocks');
	}

    public function addStock()
	{
		$this->load->view('ViewStocks');
	}
        

}
