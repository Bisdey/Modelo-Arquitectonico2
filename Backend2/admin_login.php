<?php
session_start();
require 'mysqlConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">

    <title>Bienvenido</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" action="admin_login.php" method="post">
              <a href="../index.php">
                  <i class="fa fa-dashboard"></i>
                  <span>Regresar</span>
              </a>
		        <h2 class="form-login-heading">BIENVENIDO</h2>
		        <div class="login-wrap">
		            <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
		            <br>
		            <input type="password" name="password"  class="form-control" placeholder="Password">
              </br>
            </br>
		            <button class="btn btn-theme btn-block" name='admin_login'  type="submit"><i class="fa fa-lock"></i> ACCEDER</button>
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

		                      </div>
		                      <!--<div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-theme" type="button">Submit</button>
                          </div>-->
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		      </form>

	  	</div>
	  </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/Smp.jpg", {speed: 500});
    </script>
    <?php
      if(isset($_POST['admin_login'])){
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $email=mysqli_real_escape_string($con,$_POST['email']);

        $sel="select * from aministrador where email='$email' AND password='$password'";
        $run=mysqli_query($con,$sel);
        $check=mysqli_num_rows($run);
        if($check==0)
        {
        	echo"<script>alert('La constraseña o el Email son incorrectos intente de nuevo')</script>";
        	exit();
        }
        else{
        	$_SESSION['email']=$email;
        	echo"<script>window.open('index.php','_self')</script>";
        }
      }
    ?>
  </body>
</html>
