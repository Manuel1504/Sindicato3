<?php
include('../Conexion.php');
$query="SELECT * FROM Ruta";
$sql=mysqli_query($conexion,$query);

while($row=mysqli_fetch_array($sql)){

	echo "<option value=".$row['idRuta'].">".$row['nombre']."</option>";
}

?>
