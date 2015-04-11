<!DOCTYPE html>
<head>
	<title>Choferes</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">



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
<?php

include('Conexion.php');
$query = "SELECT * FROM Chofer ";
$sql=mysqli_query($conexion,$query);

?>
 <div class="container">
	<div class="table-responsive">
		<table class="table table-hover">

	            <tr>
					<th>Gafete</th>
					<th>Nombre </th>
					<th>Apellido Materno</th>
					<th>Apellido Paterno</th>

					<th>Telefono</th>
					<th>Fecha de nacimiento</th>
					<td><button id="agregarChofer" class="btn btn-success">Agregar chofer</button></td>
				</tr>
				<?php
				while ($row = mysqli_fetch_array($sql)){ ?>


				<tr>
					<td ><?php echo $row['gafete']?></td>
			        <td> <?php echo $row['nombre']?></td>
					<td> <?php echo $row['apMaterno']?></td>
					<td> <?php echo $row['apPaterno']?></td>

					<td> <?php echo $row['telefono']?></td>
					<td> <?php echo $row['fechaDeNacimiento']?></td>

					<td>
						<button class="btn btn-primary ModificarChofer">Modificar</button>
					 <!--<input type='button' class="ModificarChofer" value='Modificar'/>-->
					 </td>
					<td>
						<button class="btn btn-danger EliminarChofer">Eliminar</button>
					 <!--<input type='button' class="EliminarChofer" value='Eliminar'/>-->
					 </td>
				</tr>
			   <?php } ?>
	</table>


</div>
</div>
    <div  id="formChofer"  class="fakewindowcontain" style="display:none;" title="Agregar chofer">
		<form id="agregarChofer_frm" enctype="application/x-www-urlencoded">
					<div class="form-group">
				     <label> Gafete:</label><input type="text" id="gafete" name="gafete" class="form-control"/><br>
				    </div>
				    <div class="form-group">
				      <label> Nombre:</label><input type="text" id="nombre" name="nombre" class="form-control"/><br>
				    </div>
				    <div class="form-group">
				      <label> Apellido paterno:</label><input type="text" id="apPaterno" name="apPaterno"class="form-control"/><br>
				    </div>
				    <div class="form-group">
				     <label> Apellido materno:</label><input type="text" id="apMaterno" name="apMaterno" class="form-control"/><br>
				    </div>
				    <div class="form-group">
				      <label> Telefono:</label><input type="tel" id="telefono" name="telefono" class="form-control"/><br>
				    </div>
				    <div class="form-group">
				      <label> Fecha de nacimiento:</label><input type="date" id="fechaDeNacimiento" name="fechaDeNacimiento" class="form-control"/><br>
				    </div>
				    <div class="form-group">
				      <input type="button" id="RegistrarChofer" value="Registrar" class="form-control"/>
				    </div>
		</form>
     </div>
<div  id="modChofer"  class="fakewindowcontain"  style="display:none;"title="Modificar chofer">
		<form id="modificarChofer_frm" enctype="application/x-www-urlencoded">
					<input type="hidden" id="Igafete" name="gafete">
				    <div class="form-group">
				      <label> Nombre:</label><input type="text" id="Inombre" name="nombre" class="form-control"/><br><br>
				    </div>
				    <div class="form-group">
				      <label> Apellido paterno:</label><input type="text" id="IapPaterno" name="apPaterno"class="form-control"/><br><br>
				    </div>
				    <div class="form-group">
				     <label> Apellido materno:</label><input type="text" id="IapMaterno" name="apMaterno" class="form-control"/><br><br>
				    </div>
				    <div class="form-group">
				      <label> Telefono:</label><input type="tel" id="Itelefono" name="telefono" class="form-control"/><br><br>
				    </div>
				    <div class="form-group">
				      <label> Fecha de nacimiento:</label><input type="text" id="IfechaDeNacimiento"  name="fechaDeNacimiento" class="form-control"/><br><br>
				    </div>
				    <div class="form-group">
				      <input type="button" id="ModificaChofer" value="guardar" class="form-control"/>
				    </div>
		</form>
     </div>



</body>
</html>
