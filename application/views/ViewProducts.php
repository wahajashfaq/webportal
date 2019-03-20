<?php include_once('Templates/Admin_header.php');?>

    <title>Portal Products</title>

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
            <li class="breadcrumb-item active">Available Products</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Available Products</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-responsive " id="StockdataTable"  `>
                    <thead style="Background:silver">
                    <tr >
                      <th>Completed On</th>
                      <th>Product Name</th>
                      <th>Unit</th>
                      <th>Produced</th>
                      <th>Issued</th>
                      <th>CostPer(Unit)</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>View</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($Products)):
                         foreach ($Products as $p):
                        ?>
                      <tr>
                       <td style="width:15%"><?=date("Y-m-d", strtotime($p->date));?></td>
                      <td><?=$p->pName?></td>
                      <td><?=$p->unit?></td>
                      <td><?=$p->QP?></td>
                      <td><?=$p->Qissue?></td>
                      <td><?=$p->Price?></td>
                       <?php
                      $Isdisabled='';
                      if (isset($p->DontDelete) && $p->DontDelete ==1) {
                        $Isdisabled='disabled';
                      }?>
                     <td>
                      <?php if(isset($p->DontDelete) && $p->DontDelete ==1){ ?>
                      <a href="#" data-placement="top" data-toggle="tooltip" title="Edit"style="color:White;background-color: #007BC4;" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a>
                      <?php }else { ?>
                        <a href="<?php echo base_url('Products/editProduct?DataID='.$p->pid); ?>" data-placement="top" data-toggle="tooltip" title="Edit"style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a>
                      <?php }?>
                      </td>
                      <td><button <?php echo $Isdisabled?> data-placement="top" data-toggle="tooltip" id="<?php echo $p->pid?>" title="Delete" style="color:White" class="ProductDelete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                      <td><a href="<?php echo base_url('Products/Productdetails?DataID='.$p->pid); ?>">View Details</a></td>

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
    <div class="card-footer small text-muted"></div>
          </div>

<?php include_once('Templates/Admin_footer.php');?>
