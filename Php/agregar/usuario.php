<?php

$nombre=$_POST['nombre'];
$paterno=$_POST['apPaterno'];
$materno=$_POST['apMaterno'];
$telefono=$_POST['telefono'];
$correo=$_POST['email'];
$clave=$_POST['clave'];
$tipo=$_POST['tipo'];

if(isset($correo)){
	include('../Conexion.php');
	$sql1="SELECT email from usuario where email = $correo";
	 $query= mysqli_query($conexion,$sql1);
	 if(empty($query)){
		$query1="INSERT INTO usuario VALUES('','$tipo','$nombre','$paterno','$materno','$telefono','$correo','$clave')";
	 	$sql=mysqli_query($conexion,$query1);
	  echo 1;
	}else{
		echo 2;

    }

}else{
	echo 0;
 }


?>
