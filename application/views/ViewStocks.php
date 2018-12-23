<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Portal Stocks</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- End of Side panel and header -->

<!-- Rest of the body starts here -->


      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard / Stocks</a>
            </li>
            <li class="breadcrumb-item active">Available Stocks</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>Stocks/AddStockEntry" method="post">
<fieldset>

<div class = "row">

   <div class="col-md-4 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="StockDate">From Date</label>
        <input class="form-control" id="FromDate" name="FromDate" placeholder="MM/DD/YYY" type="date" required="">
      </div>
   </div>

   <div class="col-md-4 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="ToDate">To Date</label>
        <input class="form-control" id="ToDate" name="ToDate" placeholder="MM/DD/YYY" type="date" required="">
      </div>
    
   </div>
 </div>

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Search">     
    </div>
   </div>
</div>

</fieldset>
</form>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Available Stocks</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-responsive table-md " id="StockdataTable"  `>
                    <thead style="Background:silver">
                    <tr >
                      <th style="width:20%">StockName</th>
                      <th style="width:20%">SuppliedBy</th>
                      <th style="width:5%">Purchased</th>
                      <th style="width:5%">Issued</th>
                      <th style="width:5%">CostPer</th>
                      <th style="width:5%">TotalBill</th>
                      <th style="width:15%">SuppliedOn</th>
                      <th style="width:10%">Edit</th>
                      <th style="width:15%">Delete</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($Stocks)):
                         foreach ($Stocks as $stock):
                        ?>
                      <tr> 
                      <td style="width:20%"><?=$stock->StockName?></td>
                      <td style="width:20%"><?=$stock->SupplierName?></td>
                      <td style="width:5%"><?=$stock->QP?></td>
                      <td style="width:5%"><?=$stock->Qissue?></td>
                      <td style="width:5%"><?=$stock->Price?></td>
                      <td style="width:5%"><?=$stock->bill?></td>
                      <td style="width:15%"><?=date("Y-m-d", strtotime($stock->date));?></td> 
                      <td style="width:10%"><a href="<?php echo base_url()?>Stocks/editStock?DataID=<?php echo $stock->s_ID?>" data-placement="top" data-toggle="tooltip" title="Edit"style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
                      <td style="width:15%"><button data-placement="top" data-toggle="tooltip" id="<?php echo $stock->s_ID?>" title="Delete" style="color:White" class="StockDelete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                      
                    </tr>
                          <?php
                          endforeach;
                          else:
                          ?>
                        <tr>
                          <td colspan="9">
                            No Records Found..!!
                          </td>
                        </tr>
                      <?php endif;?>

                  </tbody>
                
                </table>
              </div>
            </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

<?php include_once('Templates/Admin_footer.php');?>   
