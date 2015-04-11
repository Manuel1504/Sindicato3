<?php

	$gafete=$_POST['gafete'];
	$nombre=$_POST['nombre'];
	$apPaterno=$_POST['apPaterno'];
	$apMaterno=$_POST['apMaterno'];
	$telefono=$_POST['telefono'];

	$fechaDeNacimiento=$_POST['fechaDeNacimiento'];


	if(isset($gafete)){
	include('../Conexion.php');
	$query="UPDATE Chofer SET  nombre = '$nombre', apPaterno = '$apPaterno', apMaterno = '$apMaterno', telefono = '$telefono' ,fechaDeNacimiento = '$fechaDeNacimiento' where gafete = $gafete";
	$sql=mysqli_query($conexion,$query);

	echo 1;

	}else{
		echo 0;
		}
?>
