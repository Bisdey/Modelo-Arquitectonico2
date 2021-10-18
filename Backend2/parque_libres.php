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
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Parqueadero</title>
    <link rel="icon" href="assets/img/ny.jpg" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

  </head>

  <body>

  <section id="container" >
  
      <header class="header black-bg">

            <!--logo start-->
            <a href="index.php" class="logo"><b>Parqueadero</b></a>
            <!--logo end-->
      </header>
  
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="#"><img src="assets/img/assistant-144.png" class="img-circle" width="60"></a></p>
                    <h5 class="centered"> <?php echo $_SESSION['email']; ?></h5>

                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Regresar</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <section id="main-content">
          <section class="wrapper">
				    <div class="row">

	             <div class="col-md-12">
	               <div class="content-panel">

              <table class="table table-bordered">
                      <tr><h2> Ver Parqueaderos Libres</h2></tr>
                      <tr align="center">
                      <th>Codigo</th>
                      <th>Hora</th>
                      <th>Estado</th>
                      </tr>
<?php
$sel="select * from libre";
$run=mysqli_query($con,$sel);
$i=0;
while($row=mysqli_fetch_array($run)){
$id=$row['id'];
$estado=$row['estado'];
$street=$row['hora'];
?>
                      <tr>
                      <td><?php echo $id; ?></td>
                      <td><?php echo $street; ?></td>
                      <td><?php echo $estado; ?></td>
                      <td><a href="cambiar_libre.php? edit=<?php echo $id; ?>">Cambiar</a></td>
<?php }?>

              </table>
	             </div><!--/content-panel -->
	           </div><!-- /col-md-12 -->
				  </div>

		    </section><!--wrapper -->
      </section><!-- /MAIN CONTENT -->
  </section>
  
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
