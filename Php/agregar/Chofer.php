<?php


	$gafete=$_POST['gafete'];
	$nombre=$_POST['nombre'];
	$apPaterno=$_POST['apPaterno'];
	$apMaterno=$_POST['apMaterno'];
	$telefono=$_POST['telefono'];

	$fechaDeNacimiento=explode("-",$_POST['fechaDeNacimiento']);

	$fecha=$fechaDeNacimiento[2]."-".$fechaDeNacimiento[1]."-".$fechaDeNacimiento[0];

	if(isset($gafete)){
	include('../Conexion.php');
	$query="INSERT INTO Chofer(gafete, nombre, apPaterno, apMaterno, telefono,fechaDeNacimiento) VALUES('$gafete','$nombre','$apPaterno','$apMaterno','$telefono','$fecha')";
	$sql=mysqli_query($conexion,$query);

	echo 1;

	}else{
		echo 0;
		}





?>
