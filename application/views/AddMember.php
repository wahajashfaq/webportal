<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Add Member</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Member</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>Members/addMember" method="post">
<fieldset>


<!-- Text input-->

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="name">First Name</label>  
      <input id="Name" name="Name" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>

   </div>
      <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="name">Last Name</label>  

      <input id="Lname" name="Lname" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>

   </div>

</div>

<!-- Text input-->

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="Email">Email Address</label>  
    <input id="Email" name="Email" type="text" placeholder="" class="form-control input-md" required="">
        
    </div>

   </div>
    <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="ContactNumber">Contact</label>  
    <input id="ContactNumber" name="ContactNumber" type="number" placeholder="" class="form-control input-md" required="">
    </div>
   </div>

</div>


<div class = "row">
  <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="User Type">User Type</label>
        <select id="UType" name="UType" class="form-control">
          <option value="Supplier">Supplier</option>
          <option value="Customer">Customer</option>
        </select>
    </div>
  </div>
</div>

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
    <label class="control-label" for="uaddress">Address</label>  
    <input id="uaddress" name="uaddress" type="text" placeholder="Address" class="form-control input-md" required="">
    </div>
   </div>

</div>


<div class = "row">
   <div class="col-md-4 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="EntryDate">Date</label>
        <input class="form-control" id="EntryDate" name="EntryDate" placeholder="MM/DD/YYY" type="date" required=""s/>
      </div>
   </div>
</div>

<!-- <div class="input-group date" data-provide="datepicker">
        <label class="control-label" for="quantity">Date</label>  
        <input type="text" class="form-control">
</div>
 -->


<div class = "row">
   <div class="col-md-8 ">
      <div class="form-group">
      <label for="comments">Description</label>
      <textarea class="form-control" name="comments" id="comments" rows="7" cols="50"></textarea>
      </div>
  </div>
</div>


<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
    
    <input name="submit" class="btn btn-md btn-primary" type="submit" value="Add User ">     
    </div>
   </div>
</div>


</fieldset>
</form>

<?php include_once('Templates/Admin_footer.php');?>   
