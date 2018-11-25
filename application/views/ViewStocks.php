<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Portsl Stocks</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- End of Side panel and header -->

<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Available Stocks</li>
          </ol>

           
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Available Stocks</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-responsive " id="StockdataTable"  `>
                    <thead style="Background:silver">
                    <tr >
                      <th>StockName</th>
                      <th>SuppliedBy</th>
                      <th>Purchased(KG)</th>
                      <th>Issued(KG)</th>
                      <th>CostPer(KG)</th>
                      <th>TotalBill</th>
                      <th>SuppliedOn</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($Stocks)):
                         foreach ($Stocks as $stock):
                        ?>
                      <tr> 
                      <td><?=$stock->StockName?></td>
                      <td><?=$stock->SupplierName?></td>
                      <td><?=$stock->QP?></td>
                      <td><?=$stock->Qissue?></td>
                      <td><?=$stock->Price?></td>
                      <td><?=$stock->bill?></td>
                      <td style="width:15%"><?=date("Y-m-d", strtotime($stock->date));?></td> 
                      <td><a href="<?php echo base_url()?>Stocks/editStock?DataID=<?php echo $stock->s_ID?>" data-placement="top" data-toggle="tooltip" title="Edit"style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
                      <td><button data-placement="top" data-toggle="tooltip" id="<?php echo $stock->s_ID?>" title="Delete" style="color:White" class="StockDelete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                      
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
