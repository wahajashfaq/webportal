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
                <table class="table table-striped table-hover table-responsive " id="StockdataTable"  `>
                    <thead style="Background:silver">
                    <tr >
                      <th>Order Number</th>
                      <th>Regerence</th>
                      <th>Customer Name</th>
                      <th>Order Date</th>
                      <th>Deliver Date</th>
                      <th>Discount</th>
                      <th>Grand Total</th>
                      <th>View</th>
                      <th>Edit</th>
                      <th>Cancel</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($Orders)):
                         foreach ($Orders as $p):
                        ?>
                      <tr> 
                      <td><?=$p->OrderID?></td>
                      <td><?=$p->Reference?></td>
                      <td><?=$p->CustomerID?></td>
                      <td style="width:15%"><?=date("Y-m-d", strtotime($p->OrderDate));?></td>
                      <td style="width:15%"><?=date("Y-m-d", strtotime($p->DeliverDate));?></td>
                      <td><?=$p->Discount?></td>
                      <td><?=$p->GrandTotal?></td>
                      <td><a href="<?php echo base_url();?>Orders/ViewOrderDetail?DataID=<?php echo $p->OrderID?>" data-placement="top" data-toggle="tooltip" title="Edit"style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> View</a></td>     
                      <td><a href="#" data-placement="top" data-toggle="tooltip" title="Edit"style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
                      <td><button data-placement="top" data-toggle="tooltip" id="1" title="Delete" style="color:White" class="ProductDelete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                      
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
