<!DOCTYPE html>
<head>
	<title>Reportes</title>
	<meta charset="utf-8">


</head>
<body>
<?php
include('Conexion.php');

$query="SELECT * FROM reporte";
$sql=mysqli_query($conexion,$query);
?>

<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.structure.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.structure.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.theme.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.theme.min.css" >

	<script type="text/javascript" src="../Js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="../Js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Js/bootstrap.js"></script>

<div class="container">
	<div class="table-responsive">
		<table class="table table-condensed">


	            <tr>
					<th>Reporte</th>
					<th>Checador</th>
					<th>Chofer</th>
					<th>Unidad</th>
					<th>Ruta</th>
					<th>Estado</th>
					<th>Observaciones</th>
					<th>Fecha</th>

				</tr>
				<?php

				while ($row = mysqli_fetch_array($sql)){

					?>
		<tr>
		<td><?php echo $row['idReporte']?></td>

		<td><?php echo $row['usuario_idUsuario']?></td>
    <td> <?php echo $row['chofer_gafete']?></td>
		<td> <?php echo $row['unidad_noEconomico']?></td>
		<td> <?php echo $row['ruta_idRuta']?></td>
		<td> <?php echo $row['estado']?></td>
		<td> <?php echo $row['observaciones']?></td>
		<td> <?php echo $row['Hora']?></td>

	 </tr>
   <?php } ?>

   <nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
	</table>



</div>
</div>
</body>
</html>
