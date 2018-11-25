<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>WebPortal Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url().'/assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url().'/assets/vendor/fontawesome-free/css/all.min.css';?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url().'/assets/css/sb-admin.css';?>" rel="stylesheet">
<script type="text/javascript">
//$('.mail').click(function
//{
//  alert("Husnain AJmal");
//    $('#MailError').fadeOut();
//});
function foo(){
  $('#MailError1').fadeOut();
};

</script>

  </head>

  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form class="form-horizontal" action="<?php echo base_url().'User/LoginService'?>" method="post">
               <span id="MailError1" class="text-danger"><?php 
                 if (isset($error)) {
                    echo $error;
                  } ?>
                </span>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="inputEmail" id="inputEmail" onclick="foo()" class="form-control input-md mail" placeholder="Email address"  autofocus="autofocus" required="" />
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required="">
                <label for="inputPassword">Password</label>
                 <span class="text-danger"></span>
              </div>
            </div>
           
            <div class="form-group">    
            <input name="submit" class="btn btn-block btn-primary" type="submit" value="Login ">     
            </div>
            


          </form>
          <div class="text-center">
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'/assets/vendor/jquery/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js';?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'/assets/vendor/jquery-easing/jquery.easing.min.js';?>"></script>
     <script src="<?php echo base_url().'assets/js/sb-admin.min.js';?>"></script>

  </body>

</html>
