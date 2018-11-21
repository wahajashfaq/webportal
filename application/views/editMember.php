<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Edit User</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit User</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>Members/updateMember" method="post">
<fieldset>


<!-- Text input-->

<div class = "row">
   
   <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="name">First Name</label>  
      <input id="name" name="name" type="text" value="<?php echo $user->Name?>" class="form-control input-md" required="">
        <?php echo form_hidden('info_id', $user->ID, 'id="info_id"'); ?>
    </div>
   </div>
    
    <div class="col-md-4 ">
      <div class="form-group">
      <label class="control-label" for="name">Last Name</label>  
      <input id="lname" name="lname" type="text" value="<?php echo $user->Lname?>" class="form-control input-md" required="">
    </div>
   </div>

</div>

<!-- Text input-->

<div class = "row">

   <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="emailaddress">Email Address</label>  
    <input id="emailaddress" name="emailaddress" type="text" value="<?php echo $user->Email?>" class="form-control input-md" required="">       
    </div>
   </div>

  <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="phone">Contact</label>  
    <input id="contact" name="contact" type="number" value="<?php echo $user->ContactNumber?>" class="form-control input-md" required="">      
    </div>
   </div>

</div>


<div class = "row">
  
  <div class="col-md-4 ">
    <div class="form-group">
        <label class="control-label" for="User Type">User Type</label>
          <select id="UserType" name="UserType"  class="form-control" >
            <option value="Supplier"<?=$user->Utype == 'Supplier' ? ' selected="selected"' : '';?>>Supplier </option>
            <option value="Customer"<?=$user->Utype == 'Customer' ? ' selected="selected"' : '';?>>Customer </option>
          </select>
    </div>
  </div>

</div>

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
    <label class="control-label" for="Address">Address</label>  
    <input id="Address" name="Address" type="text" value="<?php echo $user->uaddress?>" class="form-control input-md" required="">
    </div>
   </div>

</div>

<div class = "row">
   <div class="col-md-4 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>

        <input class="form-control" id="date" name="date"  type="date" value="<?php echo date("Y-m-d", strtotime($user->EntryDate ));?>" required="">
      </div>
   </div>
</div>

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
    <label class="control-label" for="comments">Description</label>  
     <textarea class="form-control" name="comments" id="comments"  rows="7" cols="50">
     <?php echo $user->comments?>
     </textarea>
    </div>
   </div>
</div>

 

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Save Update">     
    </div>
   </div>
</div>


</fieldset>
</form>

<?php include_once('Templates/Admin_footer.php');?>   




