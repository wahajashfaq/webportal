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
            <li class="breadcrumb-item active">Member Details</li>
          </ol>

           <!-- Start Coding From here -->
          <div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-bordered ">

          <!--Table head-->
          <thead>
            <tr>
             
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr style="border:2px solid;border-style:ridge;">
              <td colspan ="2" style="background:rgb(230, 230, 230);" ><b>User ID</b></td>
              <td colspan ="4"><?=$user->ID?></td>
              </tr>
            <tr style="border:2px solid;border-style:ridge;">
              <td colspan ="2" style="background:rgb(230, 230, 230);"><b>First Name</b></td>
              <td colspan ="4"><?=$user->Name?></td>
              </tr>
            <tr style="border:2px solid;border-style:ridge;" >
              <td colspan ="2" style="background:rgb(230, 230, 230);"><b>Last Name</b></td>
              <td colspan ="4"><?=$user->Lname?></td>
              </tr>


            <tr style="border:2px solid;border-style:ridge;">
              <td colspan ="2" style="background:rgb(230, 230, 230);"><b>Email</b></td>
              <td colspan ="4"><?=$user->Email?></td>
              </tr>
            <tr style="border:2px solid;border-style:ridge;" >
              <td colspan ="2" style="background:rgb(230, 230, 230);"><b>User Type</b></td>
              <td colspan ="4"><?=$user->Utype?></td>
              </tr>

             <?php
               if ($numbers) {
                foreach ($numbers as $key => $n) {  ?>
              <tr style="border:2px solid;border-style:ridge;" >
              <td colspan ="2" style="background:rgb(230, 230, 230);"><b>Contact# <?=$key+1?></b></td>
              <td colspan ="4"><?=$n->ph?></td>
              </tr>

             <?php    
                }
               }
             ?>

              <tr style="border:2px solid;border-style:ridge;">
              <td colspan ="2" style="background:rgb(230, 230, 230);"><b>Address</b></td>
              <td colspan ="4"><?=$user->uaddress?></td>
              </tr>
            <tr style="border:2px solid;border-style:ridge;" >
              <td colspan ="2" style="background:rgb(230, 230, 230);"><b>Entry Date</b></td>
              <td colspan ="4"><?=date("dS M,Y", strtotime($user->EntryDate));?></td>
              </tr>

             <tr style="border:2px solid;border-style:ridge;" >
              <td colspan ="2" style="background:rgb(230, 230, 230);"><b>comments </b></td>
              <td colspan ="4" style=" white-space: normal"><?=$user->comments?></td>
              </tr>
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
</section>
<!--Section: Live preview-->



      <div class="card-footer small text-muted"></div>
      </div>

<?php include_once('Templates/Admin_footer.php');?>   
