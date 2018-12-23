<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Portal Orders</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- End of Side panel and header -->

<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard / Orders </a>
            </li>
            <li class="breadcrumb-item active">View Orders</li>
          </ol>

           
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Current Orders</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-responsive " id="StockdataTable">
                    <thead style="Background:silver">
                    <tr >
                      <th style="width:5%">Order# </th>
                      <th style="width:20%">Reference</th>
                      <th style="width:20%"> Name</th>
                      <th style="width:15%">Order Date</th>
                      <th style="width:15%">Deliver Date</th>
                      <th style="width:5%">Discount</th>
                      <th style="width:5%">Total</th>
                      <th style="width:5%">View</th>
                      <th style="width:20%">Cancel</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($Orders)):
                         foreach ($Orders as $p):
                        ?>
                      <tr> 
                      <td style="width:5%"><?=$p->OrderID?></td>
                      <td style="width:20%"><?=$p->Reference?></td>
                      <td style="width:20%"><?=$p->CustomerID?></td>
                      <td style="width:15%"><?=date("jS M,Y", strtotime($p->OrderDate));?></td>
                      <td style="width:15%"><?=date("jS M,Y", strtotime($p->DeliverDate));?></td>
                      <td style="width:5%"><?=$p->Discount?></td>
                      <td style="width:5%"><?=$p->GrandTotal?></td>
                      <td style="width:5%"><a href="<?php echo base_url();?>Orders/ViewOrderDetail?DataID=<?php echo $p->OrderID?>" data-placement="top" data-toggle="tooltip" title="View"style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a></td>     
                      <td style="width:20%"><button data-placement="top" data-toggle="tooltip" id="1" title="Cancel" style="color:White" class="OrderDelete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Cancel</button></td>
                      
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
