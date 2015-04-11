$(document).ready(inicio)

function inicio(){

$("#agregarChofer").click(chofer)
$("#agregarUnidad").click(unidad)
$("#agregarRuta").click(ruta)
$("#agregarUsuario").click(usuario)
$("#tipo").load("../Php/tipoUsuario.php")
$("#Mtipo").load("../Php/tipoUsuario.php")


}

function chofer(){

	$("#formChofer").dialog({
		    width: 500,
            height: 350,
            show: "scale",
            hide: "scale",
            resizable: "false",
            modal: "true"
    })

	$("#RegistrarChofer").click(function(){
  var dato = $("#agregarChofer_frm").serialize()

   $.ajax({
     url:"../Php/agregar/Chofer.php",
     data: dato,
     datatype:"html",
     type:"POST",
     success:function(datos){
       if(datos==1){
         alert("Chofer agregado");
       cargaChoferes();
       $("#formChofer").dialog('close');
       $("#Todos").load("../Php/Choferes.php")
       }else{
         alert("Chofer no agregado")
       $("#formChofer").dialog('close');
       $("#Todos").load("../Php/Choferes.php")
       }

     }
   })

   })


}

function unidad(){
$("#formUnidad").dialog({
        width: 500,
            height: 350,
            show: "scale",
            hide: "scale",
            resizable: "false",
            modal: "true"
    })
$("#RegistrarUnidad").click(function(){
  var dato = $("#agregarUnidad_frm").serialize()

   $.ajax({
     url:"../Php/agregar/Unidad.php",
     data: dato,
     datatype:"html",
     type:"POST",
     success:function(datos){
       if(datos==1){
         alert("Unidad agregada")
        $("#formUnidad").dialog('close')
       $("#Todos").load("../Php/Unidades.php")
       }else{
         alert("Unidad no agregado")
       $("#formUnidad").dialog('close')
       $("#Todos").load("../Php/Unidades.php")
       }

     }
   })
 })
}

function ruta(){
 $("#formRuta").dialog({
            width: 500,
            height: 350,
            show: "scale",
            hide: "scale",
            resizable: "false",
            modal: "true"


 })
 $("#RegistrarRuta").click(function(){
  var dato = $("#agregarRuta_frm").serialize()

   $.ajax({
     url:"../Php/agregar/ruta.php",
     data: dato,
     datatype:"html",
     type:"POST",
     success:function(datos){
       if(datos==1){
         alert("Ruta agregada")
       $("#formRuta").dialog('close')
       $("#Todos").load("../Php/Rutas.php")
       }else if(datos == 2){
        alert("El usuario ya existe")
       }else{
         alert("Ruta no agregada")
       $("#formRuta").dialog('close')
       $("#Todos").load("../Php/Rutas.php")
       }

     }
   })
 })

}
function usuario(){

$("#formUsuario").dialog({
        width: 500,
            height: 350,
            show: "scale",
            hide: "scale",
            resizable: "false",
            modal: "true"
    })
$("#RegistrarUsuario").click(function(){
  var dato = $("#agregarUsuario_frm").serialize()

   $.ajax({
     url:"../Php/agregar/usuario.php",
     data: dato,
     datatype:"html",
     type:"POST",
     success:function(datos){
       if(datos==1){
         alert(" Usuario agregado")
       $("#formUsuario").dialog('close')
       $("#Todos").load("../Php/Usuario.php")
       }else{
         alert("Usuario no agregado")
       $("#formUsuario").dialog('close')
       $("#Todos").load("../Php/Usuario.php")
       }

     }
   })
 })


}
