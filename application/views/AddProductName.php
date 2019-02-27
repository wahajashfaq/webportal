<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Add Product Name</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Product Name</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>Products/AddProductNameEntry" method="post">
<fieldset>


<!-- Text input-->

<div class = "row">
   <div class="col-md-12 ">
    <div class="form-group">
      <label class="control-label" for="ProductName">Product Name</label>  
      <input id="ProductName" name="ProductName" type="text" placeholder="Product Name" class="form-control input-md" required="">
      <?php if(isset($error)){ ?>
      <h5><?php echo $error ?></h5>
      <?php } ?>
    </div>
   </div>



</div>










<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Add Product">     
    </div>
   </div>
</div>


</fieldset>
</form>

<?php include_once('Templates/Admin_footer.php');?>   




