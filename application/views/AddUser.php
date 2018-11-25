<?php include_once('Templates/Admin_header.php');?>   
   
    <title>Add User</title>

<?php include_once('Templates/Admin_NavBar_SidePanel.php');?>   

<!-- Rest of the body starts here -->
    
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Dashboard" class="MyBreadCrumps">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add User</li>
          </ol>

<form class="form-horizontal" action="<?php echo base_url()?>User/addUser" method="post">
<fieldset>


<!-- Text input-->

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="name">First Name</label>  
      <input id="name" name="name" type="text" placeholder="First Name" class="form-control input-md" required="">
        
    </div>

   </div>
      <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="name">Last Name</label>  

      <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
        
    </div>

   </div>

</div>

<!-- Text input-->

<div class = "row">
   <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="password">Password</label>  
    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">       
    </div>
   </div>

   <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="emailaddress">Email Address</label>  
    <input id="emailaddress" name="emailaddress" type="text" placeholder="abc@gmail.com" class="form-control input-md" required="">       
    </div>
   </div>

</div>


<div class = "row">
  <div class="col-md-4 ">
    <div class="form-group">
      <label class="control-label" for="User Type">User Type</label>
        <select id="UserType" name="UserType" class="form-control" >
          <option value="Admin">Admin</option>
          <option value="Employee">Employee</option>
        </select>
    </div>
  </div>

    <div class="col-md-4 ">
    <div class="form-group">
    <label class="control-label" for="phone">Contact</label>  
    <input id="contact" name="contact" type="number" placeholder="xxxx-xxxxxxx" class="form-control input-md" required="">      
    </div>
   </div>

</div>

<div class = "row">
   <div class="col-md-8 ">
    <div class="form-group">
    <label class="control-label" for="Address">Address</label>  
    <input id="Address" name="Address" type="text" placeholder="Address" class="form-control input-md" required="">
    </div>
   </div>

</div>


<div class = "row">
   <div class="col-md-4 ">
      <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" required="">
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




