<?php
session_start();
date_default_timezone_set('America/La_Paz');
require 'mysqlConnect.php';

if(isset($_GET['edit'])){
    $edit_id=$_GET['edit'];

    $sel="select * from libre where id='$edit_id'";
    $run=mysqli_query($con,$sel);

    $row=mysqli_fetch_array($run);
    $hora=date("Y-m-d H:i;s");
    $estado=$row['estado'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Cambiar</title>
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
            <a href="index.php" class="logo"><b>Parqueo Unifranz El Alto</b></a>
            <!--logo end-->
            <div class="top-menu">
            </div>
        </header>

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <p class="centered"><a href="#"><img src="assets/img/assistant-144.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered"> <?php echo $_SESSION['email']; ?></h5>

                    <li class="mt">
                      <a href="lista_emple.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Regresar</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Cambiar Datos</h3>
            <div class="row mt">
              <div class="col-lg-12">
              <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-sm-10">
            <select name="estado" class="form-control" placeholder="Turno" name="estado" value="<?php echo $estado; ?>">
                <option value="libre">Libre</option>
                <option value="ocupado">Ocupado</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="datetime" class="form-control" placeholder="Nº de Indentidad" name="hora" value="<?php echo $hora; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-6 col-sm-10">
            <button type="submit" class="btn btn-default" name="update">Confirmar</button>
          </div>
        </div>
      </form>
              </div>
            </div>

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <?php
if(isset($_POST['update'])){

  $hora = mysqli_real_escape_string($con,$_POST['hora']);
  $estado = mysqli_real_escape_string($con,$_POST['estado']);

  $update="UPDATE `libre` SET `hora` = '$hora', `estado` = '$estado' WHERE `libre`.`id`='$edit_id';";
    $run_update=mysqli_query($con,$update);
    if($run_update){
      echo"<script>alert('Datos Cambiados Exitosamente')</script>";
      echo"<script>window.open('parque_libres.php','_self')</script>";

    }
    else{
      echo"<script>alert('Error Intente de nuevo')</script>";
      echo"<script>window.open('parque_libres.php','_self')</script>";
    }
}

?>

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
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

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
