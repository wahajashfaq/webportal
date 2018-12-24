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
                  <div class="mr-5">26 suppliers!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
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
                  <div class="mr-5">11 Customers!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
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
                  <div class="mr-5">123 New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
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
                  <div class="mr-5">13 Products!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          
          <!-- DataTables Example -->
          <!--<div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Available Stocks</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr >
                      <th>Name</th>
                      <th>Quantity Produced</th>
                      <th>Quantity Issued</th>
                      <th>Available</th>
                      <th>Product Date</th>
                      <th>Price Per Kg</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                 
                    <tbody>
                    <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                <tr class ="table-danger">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                    <tr class ="table-primary">
                      <td>Sulphuric Acid</td>
                      <td>1000</td>
                      <td>500</td>
                      <td>500</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                
                  </tbody>
                
                </table>
              </div>
            </div>-->

            <!-- Add Footer here. Footer inlcudes logout model links and emding tags -->
            
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

<?php include_once('Templates/Admin_footer.php');?>   
