<?php
require 'mysqlConnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Control de Parqueadero</title>
    <link rel="icon" href="assets/img/ny.jpg" />
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <section id="container" >

      <header class="header black-bg">

            <!--logo start-->
            <a href="index.php" class="logo"><b>ADMINISTRADOR</b></a>
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
        <section class="wrapper site-min-height">
          
          <h3><i class="fa fa-angle-right"></i> Agregar Empleado</h3>
          <div class="row mt">
          	<div class="col-lg-12">
              <form class="form-horizontal" action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-sm-10">
                    <select name="turno" class="form-control">
                         <option value="Mañana">Mañana</option>
                         <option value="Tarde">Tarde</option>
                         <option value="Noche">Noche</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                     <input type="text" class="form-control"  placeholder="Direccion" name="direccion">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Nombre(s)" name="nombre">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Apellido(s)" name="apellido">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nº de Indentidad" name="ci">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                     <select name="estado" class="form-control">
                         <option value="inactivo">Inactivo</option>
                         <option value="activo">Activo</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-6 col-sm-10">
                    <button type="submit" class="btn btn-default" name="sub">Enviar</button>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </section>
    <!--/wrapper -->
    </section><!-- /MAIN CONTENT -->

<!--main content end-->
<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        &copy; <?php echo date("Y"); ?> Copyright.
        <a href="blank.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="script.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>



<!--script for this page-->

</body>
</html>
