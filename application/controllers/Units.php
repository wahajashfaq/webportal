<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Units extends CI_Controller {
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
         $this->viewUnit();
    }



    public function addUnitView()
    {
        $this->load->view('AddUnit');
    }

    public function AddUnitEntry(){
        $this->load->model('unit_model','ut');
         $post =$this->input->post();
         
         unset($post['submit']);
         if (!isset($post['UnitName']) or empty($post['UnitName']) ) 
         {
            $this->load->view('AddUnit',['error' => 'please enter unit name']);
         }
         $unit['name'] = $post['UnitName'];
        if(!$this->ut->addUnit($unit))
        {
            $this->load->view('AddUnit',['error' => 'Unit Already Exist']);
        }
        else{
            $this->load->view('AddUnit',['error' => 'Unit Added']);
        }
    }

    public function viewUnit()
    {
        $this->load->model('unit_model','ut');
        $units = $this->ut->getUnit();
        $this->load->view('ViewUnits',['Units'=>$units]);
    }

    public function editUnit()
    {
        if(isset($_GET['DataName']))
        {
         $this->load->model('unit_model','ut');
         $uname = $_GET['DataName'];
         $stock = $this->st->getStockData($sid);
         $suppliers = $this->st->getsuppliers();
    //       echo "<pre>";
          // print_r($stock);exit;
         $this->load->view('editStock',['stock'=>$stock,'suppliers'=>$suppliers,'supplierID'=>$stock->id]);
        }
    }

    public function deleteUnit()
    {
       $this->load->model('unit_model');
        $uname = $this->input->post('uname');
        $this->unit_model->deleteUnit($uname);
        return true;
    }
}