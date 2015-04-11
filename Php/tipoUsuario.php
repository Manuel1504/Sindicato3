<?php
include('Conexion.php');

$query="SELECT * FROM tipo";
$sql=mysqli_query($conexion,$query);

while($row = mysqli_fetch_array($sql)){


	echo "<option value=".$row['idTipo'].">".$row['nombre']."</option>";
}

?>
