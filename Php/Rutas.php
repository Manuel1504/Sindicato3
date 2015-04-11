
<?php
include('Conexion.php');
 //Sentencia para mostrar datos
 $query="SELECT * FROM Ruta";
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
                 	<td><b>Id<br></b></td>
					<td><b>Nombre<br></b></td>
					<td><b>Descripción <br></b></td>
					<td><button id="agregarRuta" class="btn btn-success">Agregar ruta</button></td>

				</tr>
</thead>
	<tbody>
<?php

while ($row = mysqli_fetch_array($sql)){ ?>
		<tr>
			<td>
			  <?php echo $row['idRuta'];?>
		  </td>
		  <td>
			  <?php echo $row['nombre'];?>
		  </td>
		  <td>
			  <?php echo $row['descripcion'];?>
		  </td>
		  <td>
		  		<button class="btn btn-primary ModificarRuta">Modificar</button>
			<!-- <input type="button" class="ModificarRuta" value="Modificar"/>-->
		  </td>
		  <td>
		  		<button class="btn btn-danger EliminarRuta">Eliminar</button>
			  <!--<input type="button" class="EliminarRuta" value="Eliminar"/>-->
		  </td>
		</tr>
		<?php }?>
		</tbody>
        </table>
    </div>
    </div>
    <div id="formRuta" title="Agregar ruta" style="display: none;">
    <form id="agregarRuta_frm">
    	<div class="form-group">
		<label> Nombre:</label><input type="text" id="nombreRuta" name="nombreRuta" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Descripcion:</label><input type="text" id="descripcion" name="descripcion"class="form-control"/><br>
		</div>

<input type="button" id="RegistrarRuta"value="Registrar"class="form-control"/>
</form>
</div>
<div id="modRuta" style="display: none;" title="Modificar ruta">
<form id="ModRuta_frm" >
    	<div class="form-group">
    	<input type="hidden" id="id" name="id" >
        </div>
        <div class="form-group">
		<label> Nombre:</label><input type="text" id="MnombreRuta" name="nombreRuta" class="form-control"/><br>
		</div>
		<div class="form-group">
		<label> Descripcion:</label><input type="text" id="Mdescripcion" name="descripcion"class="form-control"/><br>
		</div>

<input type="button" id="ModificaRuta"value=" Guardar cambios"class="form-control"/>
</form>
</div>
</body>
</html>
