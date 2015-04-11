<?php
include('../Conexion.php');
$query="SELECT * from Chofer";
$sql=mysqli_query($conexion,$query);

while($row= mysqli_fetch_array($sql)){

	echo "<option value=".$row['gafete'].">".$row['gafete']."</option>";
}
?>
