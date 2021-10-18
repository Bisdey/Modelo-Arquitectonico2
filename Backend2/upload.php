<?php
require 'mysqlConnect.php';
?>
<?php
if(isset($_POST['sub'])){
	$location=mysqli_real_escape_string($con,$_POST['turno']);
	$name=mysqli_real_escape_string($con,$_POST['nombre']);
	$slot=mysqli_real_escape_string($con,$_POST['apellido']);
	$street = mysqli_real_escape_string($con,$_POST['direccion']);
	$ci = mysqli_real_escape_string($con,$_POST['ci']);
	$estado = mysqli_real_escape_string($con,$_POST['estado']);

	if($location==''&& $street==''&& $name=='' && $slot==''&& $ci==''&& $estado==''){
		echo"<script>alert('No deje espacios en blanco')</script>";
		echo"<script>window.open('index.php','_self')</script>";
		exit();
	}else{

		$insert="INSERT INTO `trabajador` (`turno`, `nombre`, `apellido`, `direccion`,`ci`,`estado`) VALUES ('$location', '$name', '$slot', '$street', '$ci', '$estado');";
		$run_insert=mysqli_query($con,$insert);
		if($run_insert){
			echo"<script>alert('Empleado Agregado Exitosamente')</script>";
			echo"<script>window.open('lista_emple.php','_self')</script>";

		}
		else{
			echo"<script>alert('Error Intente de Nuevo')</script>";
			echo"<script>window.open('agregar_emple.php','_self')</script>";
		}
	}
}

?>
