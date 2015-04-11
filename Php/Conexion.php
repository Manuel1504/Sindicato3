<?php

$host="localhost";
$user="root";
$pass="";
$error="No se pudo conectar al servidor";
$error2="No se pudo conectar a la tabla solicitada";

$conexion=mysqli_connect($host,$user,$pass) or die ($error);
$baseDeDatos=mysqli_select_db($conexion,'Integradora2') or die ($error2);




?>
