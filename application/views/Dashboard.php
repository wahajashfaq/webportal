<?php include_once('Templates/Admin_header.php');?>

    <title>Dashboard</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>


<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>


          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa fa-truck"></i>
                  </div>
                  <div class="mr-5"><?= $Data->Scount?> Supliers!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url()?>Suppliers">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa fa-user"></i>
                  </div>
                  <div class="mr-5"><?=  $Data->Ccount?> Customer!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url()?>Customers">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>

              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"><?=$Data->Ocount?> New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url()?>Orders">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw  fa-dice-d6"></i>

                  </div>
                  <div class="mr-5"><?=$Data->Pcount?> Products!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url()?>Products">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

            <!-- Add Footer here. Footer inlcudes logout model links and ending tags -->

    <div class="card-footer small text-muted"></div>
          </div>

<?php include_once('Templates/Admin_footer.php');?>
