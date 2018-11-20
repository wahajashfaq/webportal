
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark">

      <a class="navbar-brand mr-1" href="<?php echo base_url().'Dashboard'?>">WebPortal</a>

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
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h7>Husnain Ajmal</h7>
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url().'Dashboard'?>">
            <h6 class="text-center">
             <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></h6>
          </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'User'?>">
        <h6 class="text-center"><span>Add Users</span></h6>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'User/getusers'?>">
        <h6 class="text-center"><span>View Users</span></h6>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'Members'?>">
        <h6 class="text-center"><span>Add Member</span></h6>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'Members/getmembers'?>">
        <h6 class="text-center"><span>View Members</span></h6>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'Dashboard'?>">
        <h6 class="text-center"><span>Add Stocks</span></h6>
        </a> 
        </li>
        
       
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'Stocks'?>">
        <h6 class="text-center"><span>View Stocks</span></h6>
        </a> 
        </li>
        

         <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'Stocks'?>">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>Add Products</span></h6>
        </a> 
        </li>
        
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'Stocks'?>">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>View Products</span></h6>
        </a> 
        </li>
    </ul>
<!-- End of Side panel and header -->
