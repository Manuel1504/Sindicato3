<?php

$nombre=$_POST['nombre'];
$paterno=$_POST['apPaterno'];
$materno=$_POST['apMaterno'];
$telefono=$_POST['telefono'];
$correo=$_POST['email'];
$id=$_POST['idUsuario'];
$tipo=$_POST['tipo'];

if(isset($correo)){
	include('../Conexion.php');

	$query="UPDATE usuario SET nombre = '$nombre', apPaterno = '$paterno',apMaterno = '$materno', telefono ='$telefono',email = '$correo', tipo_idTipo = '$tipo' WHERE idUsuario = '$id'";
	 	$sql=mysqli_query($conexion,$query);
	  echo 1;


}else{
	echo 0;
 }


?>
