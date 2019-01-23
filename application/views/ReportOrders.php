<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Orders Report</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Orders Report</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>GetCustomerOrders" method="post">
<fieldset>


<div class = "row">
   <div class="col-md-4 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="FromDate">FromDate</label>
        <input class="form-control" id="FromDate" name="FromDate" placeholder="MM/DD/YYY" type="date" required=""s/>
      </div>
   </div>

   <div class="col-md-4 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="ToDate">ToDate</label>
        <input class="form-control" id="ToDate" name="ToDate" placeholder="MM/DD/YYY" type="date" required=""s/>
      </div>
   </div>
   
</div>

<div class="row">
<div class="col-md-4 ">
     <div class="form-group">
     <label class="control-label" for="CustomerID">Customers</label>
        <select  required id="CustomerID" name="CustomerID" class="form-control" >
         <?php
          if ($Customers) 
          {
           ?>
           <option value="" selected>Select Customer</option>
          <?php foreach ($Customers as $Customer):?>
          <option  value="<?php echo $Customer->cid;?>"><?php echo $Customer->Cname?></option>
          <?php endforeach;
           }else
           {?>
              <option value="0" selected>No Customer In system</option>  
           <?php
           }
          ?>
        </select>    
     </div>
     <?php 
     if ($Customers) 
     { }
      else{
      ?>
      <span style="color:red" class="Error4">No Customer Available for Order</span>
      <?php
      }
     ?>
     <span style="color:red" class="Error3">Must Select Customer to proceed</span>

  </div>

</div>

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Get Orders">     
    </div>
   </div>
</div>


</fieldset>
</form>

<?php include_once('Templates/Admin_footer.php');?>   
