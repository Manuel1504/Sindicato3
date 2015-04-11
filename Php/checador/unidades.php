<?php
include('../Conexion.php');

$query="SELECT * FROM Unidad";
$sql=mysqli_query($conexion,$query);

while($row=mysqli_fetch_array($sql)){

	echo "<option value=".$row['noEconomico'].">".$row['noEconomico']."</option>";
}
?>
