$(document).ready(inicio)

function inicio(){

	$("#Chofer").load("../Php/checador/Chofer.php")
	$("#Unidad").load("../Php/checador/unidades.php")
	$("#Ruta").load("../Php/checador/Ruta.php")

	$("#registra").click(function(){
     var dat =$("#checadorFrm").serialize()

     $.ajax({
        url: "../Php/agregar/Reporte.php",
        data: dat,
        datatype: "html",
        type: "POST",
        success: function(dato){
          if(dato == 1){
          	alert("Reporte exitoso")
          }else{
          	alert("Ocurrio un problema")
          }

        }

     })
		$("#Observaciones").val("")
	})
}
