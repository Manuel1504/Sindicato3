<?php
$id=$_POST['id'];


if(isset($id)){
 include('../Conexion.php');

 $query="DELETE FROM Ruta WHERE idRuta= $id";
 $sql= mysqli_query($conexion,$query);
 echo 1;
}else{
echo 0;
}
?>
