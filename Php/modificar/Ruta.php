<?php
$nombre=$_POST['nombreRuta'];
$descripcion=$_POST['descripcion'];
$id=$_POST['id'];

if(isset($id)){
	include('../Conexion.php');

	$query="UPDATE Ruta SET nombre='$nombre', descripcion = '$descripcion' where idRuta = '$id'";
	$sql=mysqli_query($conexion,$query);


	echo 1;
}else{

	echo 0;
}



?>
