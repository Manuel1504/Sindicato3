<?php
$gafete=$_POST['gafete'];


if(isset($gafete)){
 include('../Conexion.php');

 $query="DELETE FROM Chofer WHERE gafete= $gafete";
 $sql= mysqli_query($conexion,$query);
 echo 1;
}else{
echo 0;
}
?>
