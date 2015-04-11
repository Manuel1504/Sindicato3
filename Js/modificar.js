$(document).ready(inicio)

function inicio(){
 $(".ModificarChofer").click(modificarChofer)
 $(".ModificarRuta").click(modificarRuta)
 $(".ModificarUnidad").click(modificarUnidad)
 $(".ModificarUsuario").click(modificarUsuario)


}

function modificarChofer(){

    var dat = $(this).parent().parent().find("td:eq(0)").html()
    var dato =$(this).parent().parent().find("td:eq(1)").html()
    var dato1 =$(this).parent().parent().find("td:eq(2)").html()
    var dato2 =$(this).parent().parent().find("td:eq(3)").html()
    var dato3 =$(this).parent().parent().find("td:eq(4)").html()
    var dato4 =$(this).parent().parent().find("td:eq(5)").html()
    var anio= dato4.substring(1,5)
    var mes= dato4.substring(6,8)
    var dia= dato4.substring(9,11)



    $("#Igafete").val($.trim(dat))
    $("#Inombre").val($.trim(dato))
    $("#IapPaterno").val($.trim(dato1))
    $("#IapMaterno").val($.trim(dato2))
    $("#Itelefono").val($.trim(dato3))
    $("#IfechaDeNacimiento").val(dato4).datepicker({"dateFormat": "yy-mm-dd"} )
    $("#modChofer").dialog({
		    width: 500,
            height: 350,
            show: "scale",
            hide: "scale",
            resizable: "false",
            modal: "true"
    })

    $("#ModificaChofer").click(function(){
var dato = $("#modificarChofer_frm").serialize()
$.ajax({
    url:"../Php/modificar/Chofer.php",
    dataType: "html",
    data: dato,
    type:"POST",
    success: function(dato){
        if(dato == 1){
            alert("El chofer ha sido modificado.")
       $("#modChofer").dialog('close')
       $("#Todos").load("../Php/Choferes.php")
        }else{
            alert("No se pudo modificar el chofer")
        $("#modChofer").dialog('close')
       $("#Todos").load("../Php/Choferes.php")
        }
    }

})

})


}

function modificarRuta(){
var id=$(this).parent().parent().find("td:eq(0)").html()
var nombre =$(this).parent().parent().find("td:eq(1)").html()
var descripcion =$(this).parent().parent().find("td:eq(2)").html()

$("#MnombreRuta").val($.trim(nombre))
$("#Mdescripcion").val($.trim(descripcion))
$("#id").val($.trim(id))

$("#modRuta").dialog({
            width: 500,
            height: 350,
            show: "scale",
            hide: "scale",
            resizable: "false",
            modal: "true"
    })
$("#ModificaRuta").click(function(){
var dato = $("#ModRuta_frm").serialize()
$.ajax({
    url:"../Php/modificar/Ruta.php",
    dataType: "html",
    data: dato,
    type:"POST",
    success: function(dato){
        if(dato == 1){
            alert("La ruta ha sido modificada.")
       $("#modRuta").dialog('close')
       $("#Todos").load("../Php/Rutas.php")
        }else{
            alert("No se pudo modificar la ruta")
        $("#modRuta").dialog('close')
       $("#Todos").load("../Php/Rutas.php")
        }
    }

})

})

}

function modificarUnidad(){

    var dat = $(this).parent().parent().find("td:eq(0)").html()
    var dato =$(this).parent().parent().find("td:eq(1)").html()
    var dato1 =$(this).parent().parent().find("td:eq(2)").html()
    var dato2 =$(this).parent().parent().find("td:eq(3)").html()
    var dato3 =$(this).parent().parent().find("td:eq(4)").html()
    var dato4 =$(this).parent().parent().find("td:eq(5)").html()

    $("#MnoEconomico").val($.trim(dat))
    $("#Mmarca").val($.trim(dato))
    $("#Mmodelo").val($.trim(dato1))
    $("#MnoPasajeros").val($.trim(dato2))
    $("#MnoMotor").val($.trim(dato3))
    $("#Mplaca").val($.trim(dato4))

    $("#modUnidad").dialog({
            width: 500,
            height: 350,
            show: "scale",
            hide: "scale",
            resizable: "false",
            modal: "true"
    })

    $("#ModificaUnidad").click(function(){
        var dato = $("#modUnidad_frm").serialize()
$.ajax({
    url:"../Php/modificar/Unidad.php",
    dataType: "html",
    data: dato,
    type:"POST",
    success: function(dato){
        if(dato == 1){
            alert("La unidad ha sido modificada.")
       $("#modUnidad").dialog('close')
       $("#Todos").load("../Php/Unidades.php")
        }else{
            alert("No se pudo modificar la unidad")
        $("#modUnidad").dialog('close')
       $("#Todos").load("../Php/Unidades.php")
        }
    }

})
    })
}

function modificarUsuario(){
    var dat = $(this).parent().parent().find("td:eq(0)").html()
    var dato =$(this).parent().parent().find("td:eq(1)").html()
    var dato1 =$(this).parent().parent().find("td:eq(2)").html()
    var dato2 =$(this).parent().parent().find("td:eq(3)").html()
    var dato3 =$(this).parent().parent().find("td:eq(4)").html()
    var dato4 =$(this).parent().parent().find("td:eq(5)").html()



    $("#id").val($.trim(dat))
    $("#Mnombre").val($.trim(dato))
    $("#MapPaterno").val($.trim(dato1))
    $("#MapMaterno").val($.trim(dato2))
    $("#Mtelefono").val($.trim(dato3))
    $("#Memail").val($.trim(dato4))


    $("#modUsuario").dialog({
            width: 500,
            height: 350,
            show: "scale",
            hide: "scale",
            resizable: "false",
            modal: "true"
    })

$("#ModificaUsuario").click(function(){
        var dato = $("#modificarUsuario_frm").serialize()
$.ajax({
    url:"../Php/modificar/Usuario.php",
    dataType: "html",
    data: dato,
    type:"POST",
    success: function(dato){
        if(dato == 1){
            alert("El usuario ha sido modificado")
       $("#modUsuario").dialog('close')
       $("#Todos").load("../Php/Usuario.php")
        }else{
            alert("No se modifico al usuario")
        $("#modUsuario").dialog('close')
       $("#Todos").load("../Php/Usuario.php")
        }
    }

})
    })
}
