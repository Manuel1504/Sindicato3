$(document).ready(inicio)

function inicio(){
	$(".EliminarChofer").click(eliminarChofer)
    $(".EliminarRuta").click(eliminarRuta)
    $(".EliminarUnidad").click(eliminarUnidad)
    $(".EliminarUsuario").click(eliminarUsuario)
}
function eliminarChofer(){


    var dato =$(this).parent().parent().find("td:eq(0)").html()

    $.ajax({
    url:"../Php/eliminar/Chofer.php",
    data: "gafete="+dato,
    datatype: "html",
    type:"POST",
    success:function(datos){
      if(datos==1){
        alert("El chofer se ha eliminado correctamente")
       $("#Todos").load("../Php/Choferes.php")
      }else{
        alert("No se pudo eliminar al chofer")
       $("#Todos").load("../Php/Choferes.php")
      }
    }

    })
}

function eliminarRuta(){
    var dato =$(this).parent().parent().find("td:eq(0)").html()
   $.ajax({
    url:"../Php/eliminar/Ruta.php",
    data: "id="+dato,
    datatype: "html",
    type:"POST",
    success:function(datos){
      if(datos==1){
        alert("La ruta se ha eliminado correctamente")
        $("#Todos").load("../Php/Rutas.php")
      }else{
        alert("Ruta no se ha eliminado")
        $("#Todos").load("../Php/Rutas.php")
      }
    }

    })
}

function eliminarUnidad(){
    var dato =$(this).parent().parent().find("td:eq(0)").html()
    $.ajax({
    url:"../Php/eliminar/Unidad.php",
    data: "id="+dato,
    datatype: "html",
    type:"POST",
    success:function(datos){
      if(datos==1){
        alert("La unidad se ha eliminado correctamente")
       $("#Todos").load("../Php/Unidades.php")
      }else{
        alert("Unidad no eliminada")
       $("#Todos").load("../Php/Unidades.php")
      }
    }

    })
}

function eliminarUsuario(){
var dato =$(this).parent().parent().find("td:eq(0)").html()
    $.ajax({
    url:"../Php/eliminar/Usuario.php",
    data: "id="+dato,
    datatype: "html",
    type:"POST",
    success:function(datos){
      if(datos==1){
        alert("El usuario se ha eliminado correctamente")
       $("#Todos").load("../Php/Usuario.php")
      }else{
        alert("Usuario no eliminado")
       $("#Todos").load("../Php/Usuario.php")
      }
    }

    })

}
