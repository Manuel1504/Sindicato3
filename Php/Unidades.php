<?php
 include('Conexion.php');
 $query="SELECT * FROM Unidad";
 $sql=mysqli_query($conexion,$query);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Untitled Document</title>
    <script type="text/javascript" src="../Js/npm.js"></script>
    <script type="text/javascript" src="../Js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="../Js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Js/bootstrap.js"></script>
    <script type="text/javascript" src="../Js/ajax.js"></script>
    <script type="text/javascript" src="../Js/jquery-ui.js"></script>
    <script src="../Js/agregar.js"></script>
    <script src="../Js/eliminar.js"></script>
    <script src="../Js/modificar.js"></script>


    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.structure.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.structure.min.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.theme.css" >
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.theme.min.css" >

</head>
<body>
<div class="container">
	<div class="table-responsive">
		<table class="table table-hover">
<thead>
                <tr>
					<td><b>Numero<br></b></td>
					<td><b>Marca <br></b></td>
					<td> <b>Modelo</b><br></td>
					<td> <b>Capacidad<br></b></td>
					<td><b>Motor<br></b></td>
					<td><b>Placa<br></b></td>
					<td><button id="agregarUnidad" class="btn btn-success">Agregar Unidad</button></td>
				</tr>

</thead>
<tbody>
	<?php  while ($row = mysqli_fetch_array($sql)){?>
		<tr>
		  <td>
			 <?php echo $row['noEconomico']; ?>
		  </td>

		  <td>
			  <?php echo $row['marca']; ?>
		  </td>

		  <td>
			 <?php echo $row['modelo']; ?>
		  </td>

		  <td>
			  <?php echo $row['noPasajeros']; ?>
		  </td>

		  <td>
			<?php echo $row['noMotor']; ?>
		  </td>
		   <td>
		    <?php echo $row['placa']; ?>
			</td>


		  <td>
		  <button type="button" class="btn btn-primary ModificarUnidad">Modificar</button>
			<!--<input type="button" class="ModificarUnidad" class="btn btn-success" value="Modificar"/>-->
		  </td>

		  <td>
		  	<button type="button" class="btn btn-danger EliminarUnidad">Eliminar</button>
			 <!-- <input type="button" class="EliminarUnidad" value="Eliminar"/>-->
		  </td>
		</tr>

		<?php }?>
        </tbody>
</table>
</div>
</div>

<div id="formUnidad" title="Agregar unidad" style="display: none;">
<form id="agregarUnidad_frm">
		<div class="form-group">
		<label> Numero economico:</label><input type="text" id="noEconomico" name="noEconomico" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Marca:</label><input type="text" id="marca" name="marca" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Modelo:</label><input type="text" id="modelo" name="modelo" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Numero de pasajeros:</label><input type="text" id="noPasajeros" name="noPasajeros" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Numero de motor:</label><input type="text" id="noMotor" name="noMotor" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Placa:</label><input type="text" id="placa" name="placa" class="form-control"/><br>
		</div>
		<input type="button" id="RegistrarUnidad"value="Registrar" class="form-control"/>
</form>
</div>
<div id="modUnidad" title="Modificar unidad" style="display: none;">
<form id="modUnidad_frm">

		<input type="hidden" id="MnoEconomico" name="noEconomico" class="form-control"/><br>

		<div class="form-group">
		<label> Marca:</label><input type="text" id="Mmarca" name="marca" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Modelo:</label><input type="text" id="Mmodelo" name="modelo" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Numero de pasajeros:</label><input type="text" id="MnoPasajeros" name="noPasajeros" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Numero de motor:</label><input type="text" id="MnoMotor" name="noMotor" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Placa:</label><input type="text" id="Mplaca" name="placa" class="form-control"/><br>
		</div>
		<input type="button" id="ModificaUnidad" value="Guardar" class="form-control"/>
</form>
</div>
</body>
</html>
