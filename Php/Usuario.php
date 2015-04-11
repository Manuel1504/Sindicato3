<?php
include('Conexion.php');
$query="SELECT * FROM usuario";
$sql=mysqli_query($conexion,$query);


?>
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
<div class="container">
	<div class="table-responsive">
		<table class="table table-hover">

	            <tr>
					<th>NumeroDeRegistro</th>
					<th>Nombre </th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Tipo de usuario</th>
					<td><button id="agregarUsuario" class="btn btn-success">Agregar usuario</button></td>
				</tr>

				<?php while ($row = mysqli_fetch_array($sql)){

					         $sql1="SELECT nombre from Tipo where idTipo =".$row['tipo_idTipo'];
                   $nombre = mysqli_query($conexion,$sql1);

					?>


	<tr>
		<td><?php echo $row['idUsuario']?></td>
        <td><?php echo  $row['nombre']?></td>
		<td><?php echo  $row['apPaterno']?></td>
		<td><?php echo  $row['apMaterno']?></td>
		<td><?php echo  $row['telefono']?></td>
		<td><?php echo  $row['email']?></td>
		    <?php  while($tipo=mysqli_fetch_array($nombre)){ ?>
		<td><?php echo  $tipo['nombre']; }?></td>

			<td><button class="btn btn-primary ModificarUsuario" > Modificar </button></td>
        <!--<td> <input type='button' class='ModificarUsuario' value='Modificar'/></td>-->
        	<td><button class="btn btn-danger EliminarUsuario"> Eliminar </button></td>
		<!--<td> <input type='button' class='EliminarUsuario' value='Eliminar'/></td>-->
	 </tr>
   <?php }?>
	</table>
</div>
</div>
<div id="formUsuario" style="display:none;" title="Agregar usuario">
<form id="agregarUsuario_frm">
	    <div class="form-group">
		    <label> Nombre:</label><input type="text" id="nombre" name="nombre"  class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Apellido paterno:</label><input type="text" id="apPaterno" name="apPaterno" class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Apellido materno:</label><input type="text" id="apMaterno" name="apMaterno"  class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Telefono:</label><input type="tel" id="telefono" name="telefono"  class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Correo electronico:</label><input type="text" id="email" name="email" class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Contraseña:</label><input type="password" id="clave" name="clave" class="form-control"/><br>
		</div>
		<div class="form-group">
			<label>Tipo de usuario:</label><select id="tipo" name="tipo" class="form-control">Seleccione el tipo de usuario</select><br>
		</div>
		    <input type="button" id="RegistrarUsuario"value="Registrar" class="form-control"/>
</form>
</div>

<div id="modUsuario" style="display:none;" title="Modificar usuario">
<form id="modificarUsuario_frm">

	    <div class="form-group">
	    	<input type="hidden" id="id" name= "idUsuario">
	    </div>
	    <div class="form-group">
		    <label> Nombre:</label><input type="text" id="Mnombre" name="nombre"  class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Apellido paterno:</label><input type="text" id="MapPaterno" name="apPaterno" class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Apellido materno:</label><input type="text" id="MapMaterno" name="apMaterno"  class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Telefono:</label><input type="tel" id="Mtelefono" name="telefono"  class="form-control"/><br>
		</div>
		<div class="form-group">
		    <label> Correo electronico:</label><input type="text" id="Memail" name="email" class="form-control"/><br>
		</div>
		<div class="form-group">
			<label>Tipo de usuario:</label><select id="Mtipo" name="tipo" class="form-control">Seleccione el tipo de usuario</select><br>
		</div>
		    <input type="button" id="ModificaUsuario"value="Guardar" class="form-control"/>
</form>
</div>

</body>
</html>
