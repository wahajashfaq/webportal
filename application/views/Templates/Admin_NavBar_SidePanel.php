
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark">

      <a class="navbar-brand mr-1" href="<?php echo base_url().'Dashboard'?>"><i>TimeTex Industries</i></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <!-- <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          --> <div class="input-group-append">
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h7>
              <?php
              if (isset($_SESSION['FullName'])) 
               {  echo $_SESSION['FullName']; } 
              ?>
           </h7>
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>
    </nav>

    <div id="wrapper" >
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'Dashboard'?>">
            <h6><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></h6>
          </a>
        </li>


      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Orders</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Orders Screens:</h6>
            <a class="dropdown-item" href="<?php echo base_url().'Orders'?>">Add Orders</a>
            <a class="dropdown-item" href="<?php echo base_url().'Orders/ShowOrders'?>">View Orders</a>
            </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Users Screens:</h6>
            <a class="dropdown-item" href="<?php echo base_url().'User'?>">Add Users</a>
            <a class="dropdown-item" href="<?php echo base_url().'User/getusers'?>">View Users</a>
            </div>
        </li>


    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Members</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Member Screens:</h6>
            <a class="dropdown-item" href="<?php echo base_url().'Members'?>">Add Member</a>
            <a class="dropdown-item" href="<?php echo base_url().'Members/getmembers'?>">View Members</a>
          </div>
     </li>


    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Stocks</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Stock Screens:</h6>
            <a class="dropdown-item" href="<?php echo base_url().'Stocks/addStockView'?>">Add Stock</a>
            <a class="dropdown-item" href="<?php echo base_url().'Stocks'?>">View Stocks</a>
          </div>
     </li>



    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-dice-d6"></i>
            <span>Products</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Product Screens:</h6>
            <a class="dropdown-item" href="<?php echo base_url().'Products'?>">Add Product</a>
            <a class="dropdown-item" href="<?php echo base_url().'Products/ProductView'?>">View Products</a>
          </div>
     </li>


    </ul>
<!-- End of Side panel and header -->
