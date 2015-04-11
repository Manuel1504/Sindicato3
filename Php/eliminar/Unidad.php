<?php
$id=$_POST['id'];


if(isset($id)){
 include('../Conexion.php');
$query="DELETE FROM Unidad WHERE noEconomico= $id";
 $sql= mysql_query($conexion,$query);
 echo 1;
}else{
echo 0;
}
?>
