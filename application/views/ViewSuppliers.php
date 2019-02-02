<?php include_once('Templates/Admin_header.php');?>
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <title>Suppliers</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
            <li class="breadcrumb-item active">Suppliers</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <b style ='text-align:center'>Registered Suppliers</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-responsive" id="StockdataTable" width="100%" cellspacing="0">
                    <thead style="Background:silver">
                    <tr >
                      <th style="width:15%">Entry Date</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <!--<th>Number</th>-->
                      <th>View</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>

                    <tbody>
                      <?php if(count($users)):
                         foreach ($users as $user):
                          if($user->Utype == "Supplier"){
                        ?>
                    <tr class =""> <!--  -->
                      <?php
                      }else{ ?>
                      <tr class =""> <!--  -->
                        <?php }?>
                      <td style="width:15%"><?=date("Y-m-d", strtotime($user->EntryDate));?></td>
                      <td><?=$user->Name ?></td>
                      <td><?=$user->Lname?></td>
                      <td><?=$user->Email?></td>
                    <!--  <td><?=$user->ContactNumber?></td>-->
                      <td><a href="<?php echo base_url()?>Members/GetMemberDetails?DataID=<?php echo $user->ID?>" data-placement="top" data-toggle="tooltip" id="Editbtn" title="Edit" style="color:White" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> View</a></td>
                      
                      <td><a href="<?php echo base_url()?>Members/editMember?DataID=<?php echo $user->ID?>" data-placement="top" data-toggle="tooltip" id="Editbtn" title="Edit" style="color:White" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i> Edit</a></td>
                      <td><button data-placement="top"  id="<?php echo $user->ID?>" title="Delete" style="color:White" class=" Delete btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </tr>
                          <?php
                          endforeach;
                          else:
                          ?>
                        <tr>
                          <td colspan="8">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="<?php echo base_url().'assets/js/demo/Main.js';?>" type="text/javascript"></script>
<?php include_once('Templates/Admin_footer.php');?>
