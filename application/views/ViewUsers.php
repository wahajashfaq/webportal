<?php include_once('Templates/Admin_header.php');?>   
   
    <title>View Users</title>

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
            <li class="breadcrumb-item active">Registered Users</li>
          </ol>

           

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Registered Users</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover table-responsive" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr >
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Type</th>
                      <th>Address</th>
                      <th>Entry Date</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($users)):
                         foreach ($users as $user):
                          if($user->Utype == "Admin"){
                        ?>
                    <tr class ="table-danger"> <!--  -->
                      <?php 
                      }else{ ?>
                      <tr class ="table-primary"> <!--  -->
                        <?php }?>
                      <td><?=$user->Name?></td>
                      <td><?=$user->Lname?></td>
                      <td><?=$user->mem_pass?></td>
                      <td><?=$user->Email?></td>
                      <td><?=$user->ContactNumber?></td>
                      <td><?=$user->Utype?></td>
                      <td><?=$user->uaddress?></td>
                      <td><?=$user->EntryDate?></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</button></td>
                      <td><button  data-placement="top" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                          <?php
                          endforeach;
                          else:
                          ?>
                        <tr>
                          <td colspan="3">
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
