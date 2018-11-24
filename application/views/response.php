<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 -->
<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 -->
    <!-- Bootstrap core CSS-->
<link href="http://localhost:81/WebPortal/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
<link href="http://localhost:81/WebPortal/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<link href="http://localhost:81/WebPortal/assets/css/sb-admin.css" rel="stylesheet">

   
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <title>Portal Members</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark">

      <a class="navbar-brand mr-1" href="http://localhost:81/WebPortal/Dashboard">WebPortal</a>

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
          <a class="nav-link" href="http://localhost:81/WebPortal/Dashboard">
            <h6 class="text-center">
             <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></h6>
          </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="http://localhost:81/WebPortal/User">
        <h6 class="text-center"><span>Add Users</span></h6>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="http://localhost:81/WebPortal/User/getusers">
        <h6 class="text-center"><span>View Users</span></h6>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="http://localhost:81/WebPortal/Members">
        <h6 class="text-center"><span>Add Member</span></h6>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="http://localhost:81/WebPortal/Members/getmembers">
        <h6 class="text-center"><span>View Members</span></h6>
        </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="http://localhost:81/WebPortal/Dashboard">
        <h6 class="text-center"><span>Add Stocks</span></h6>
        </a> 
        </li>
        
       
       <li class="nav-item">
        <a class="nav-link" href="http://localhost:81/WebPortal/Stocks">
        <h6 class="text-center"><span>View Stocks</span></h6>
        </a> 
        </li>
        

         <li class="nav-item">
        <a class="nav-link" href="http://localhost:81/WebPortal/Stocks">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>Add Products</span></h6>
        </a> 
        </li>
        
       <li class="nav-item">
        <a class="nav-link" href="http://localhost:81/WebPortal/Stocks">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
        <h6 class="text-center"><span>View Products</span></h6>
        </a> 
        </li>
    </ul>
<!-- End of Side panel and header -->
   

<!-- End of Side panel and header -->

<!-- Rest of the body starts here -->
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Registered Members</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Registered Members</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered  table-hover table-responsive" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr >
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Type</th>
                      <th>Address</th>
                      <th style="width:15%">Entry Date</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                    <tbody>
                                          <tr class ="table-danger"> <!--  -->
                                            <td>Husnain</td>
                      <td>Ajmal</td>
                      <td>husnain.ajmal80@gmail.com</td>
                      <td>03030966241</td>
                      <td>Supplier</td>
                      <td>Canal Bank</td> 
                      <td style="width:15%">2018-11-18</td> 
                      <td><a href="http://localhost:81/WebPortal/Members/editMember?DataID=1" data-placement="top" data-toggle="tooltip" id="Editbtn" title="Edit" style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
                      <td><button data-placement="top"  id="1" title="Delete" style="color:White" class=" Delete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                                                <tr class ="table-primary"> <!--  -->
                                              <td>Test2</td>
                      <td>testing2</td>
                      <td>Butt@gmail.com</td>
                      <td>03030966241</td>
                      <td>Customer</td>
                      <td>Canal Bank</td> 
                      <td style="width:15%">2018-11-18</td> 
                      <td><a href="http://localhost:81/WebPortal/Members/editMember?DataID=13" data-placement="top" data-toggle="tooltip" id="Editbtn" title="Edit" style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
                      <td><button data-placement="top"  id="13" title="Delete" style="color:White" class=" Delete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                          
                  </tbody>
                
                </table>
              </div>
            </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="http://localhost:81/WebPortal/assets/js/demo/Main.js" type="text/javascript"></script>

        
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © <b>WGW</b>Solutions 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost:81/WebPortal/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost:81/WebPortal/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost:81/WebPortal/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="http://localhost:81/WebPortal/assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="http://localhost:81/WebPortal/assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost:81/WebPortal/assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="http://localhost:81/WebPortal/assets/js/demo/datatables-demo.js"></script>
   
<!-- 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 -->
  </body>

</html>
   
