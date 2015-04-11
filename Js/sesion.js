$(document).ready(inicio)

function inicio(){
  $("#cerrarSesionC").click(cerrarSesionChecador)
  $("#cerrarSesionA").click(cerrarSesionAdministrador)
}

function cerrarSesionChecador(){

$.ajax({
   url:"../Php/cerrarSesion.php",
    success: function(dato){
      if(dato = 1){

        window.location = "../index.html"
      }else{
        alert("No se puede cerrar sesion")
      }
    }


})

}


function cerrarSesionAdministrador(){

  $.ajax({
     url:"../Php/cerrarSesion.php",
      success: function(dato){
        if(dato = 1){

          window.location = "../index.html"
        }else{
          alert("No se puede cerrar sesion")
        }
      }


  })


}
