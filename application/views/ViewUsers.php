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
                <table class="table table-striped table-hover table-responsive " id="UserdataTable">
                    <thead style="Background:silver">
                    <tr >
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Type</th>
                      <th>Address</th>
                      <th style="width:15%">EntryDate</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($users)):
                         foreach ($users as $user):
                          if($user->Utype == "Admin"){
                        ?>
                    <tr class =""> <!-- table-danger -->
                      <?php
                      }else{ ?>
                      <tr class =""> <!-- table-primary -->
                        <?php }?>
                      <td><?=$user->Name?></td>
                      <td><?=$user->Lname?></td>
                      <td><?=$user->u_pass?></td>
                      <td><?=$user->Email?></td>
                      <td><?=$user->ContactNumber?></td>
                      <td><?=$user->Utype?></td>
                      <td><?=substr($user->uaddress,0,10)?></td>
                      <td style="width:15%"><?=date("Y-m-d", strtotime($user->EntryDate));?></td>
                      <td><a href="<?php echo base_url()?>User/editUser?DataID=<?php echo $user->u_ID?>" data-placement="top" data-toggle="tooltip" title="Edit"style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
                      <td><button data-placement="top" data-toggle="tooltip" id="<?php echo $user->u_ID?>" title="Delete" style="color:White" class="UserDelete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>

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
    <div class="card-footer small text-muted"></div>
          </div>

<?php include_once('Templates/Admin_footer.php');?>
