<?php include_once('Templates/Admin_header.php');?>

    <title>Stocks Name</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>
<!-- End of Side panel and header -->

<!-- Rest of the body starts here -->


      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard / Stocks Name</a>
            </li>
            <li class="breadcrumb-item active">Available Stocks Name</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Available Stocks Name</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover table-responsive table-md " id="StockdataTable"  `>
                    <thead style="Background:silver">
                    <tr >
                      <th style="width:20%">StockName</th>
                      <th style="width:15%">Delete</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($Units)):
                         foreach ($Units as $unit):
                        ?>

                      <tr>
                      <td style="width:20%"><?=$unit->name?></td>
                      <td style="width:15%"><button  data-placement="top" data-toggle="tooltip" name="<?php echo $unit->name?>" title="Delete" style="color:White" class="SnameDelete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>

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
