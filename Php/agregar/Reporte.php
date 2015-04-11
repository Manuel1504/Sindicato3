<?php
$chofer=$_POST['Chofer'];
$unidad=$_POST['Unidad'];
$ruta=$_POST['Ruta'];
$estado=$_POST['Estado'];
$observaciones=$_POST['Observaciones'];
$capacidad=$_POST['Capacidad'];

if(isset($unidad)){

  include('../Conexion.php');

  session_start();
  $id =$_SESSION['id'];
   $query="INSERT INTO `reporte` (`idReporte`, `unidad_noEconomico`, `ruta_idRuta`, `chofer_gafete`, `usuario_idUsuario`, `estado`, `observaciones`, `capacidad`,`Hora`) VALUES ('','$unidad','$ruta','$chofer','$id','$estado','$observaciones','$capacidad',now())";
   $sql=mysqli_query($conexion,$query);

   echo 1;
}else{
  echo 0;

}
?>
