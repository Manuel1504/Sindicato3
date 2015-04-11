<?php


$nombre=$_POST['nombreRuta'];
$descripcion=$_POST['descripcion'];

if(isset($nombre)){
	include('../Conexion.php');
  $query="INSERT INTO Ruta(idRuta, nombre, descripcion,FechaDeAlta) VALUES('','$nombre','$descripcion',now())";
	$sql=mysqli_query($conexion,$query);

	echo 1;
	}else{
		echo 0;
		}


?>
