$(document).ready(inicio)

function inicio(){
	$("#muestraUnidad").click(cargaUnidades)
	$("#muestraChoferes").click(cargaChoferes)
	$("#muestraReportes").click(cargaReportes)
	$("#muestraRutas").click(cargaRutas)
	$("#muestraUsuarios").click(cargaUsuarios)
	}

function cargaUnidades(){
	$("#Todos").load("../Php/Unidades.php")
	}
function cargaChoferes(){
	$("#Todos").load("../Php/Choferes.php")
	}
function cargaReportes(){
	$("#Todos").load("../Php/Reporte.php")
	}
function cargaUsuarios(){
	$("#Todos").load("../Php/Usuario.php")
	}
function cargaRutas(){
	$("#Todos").load("../Php/Rutas.php")
	}
