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
            <li class="breadcrumb-item active">DataBase Error</li>
          </ol>

           <!-- Start Coding From here -->
             <!-- Page Content -->
          <h1 class="display-1">DataBase Error</h1>
          <p class="lead">The Error <?=$error?> Occured while performing actions. 
            <a href="javascript:history.back()">go back</a>to the previous page, or
           
      <div class="card-footer small text-muted"></div>
      </div>

<?php include_once('Templates/Admin_footer.php');?>   
