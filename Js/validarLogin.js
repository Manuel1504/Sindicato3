$(document).ready(inicio)

function inicio(){
 $("#loginBtn").click(entrarAlSistema)


}

function entrarAlSistema(){
 var datos = $("#datosLogin").serialize()
 $.ajax({
   url:"Php/login.php",
   type:"POST",
   data: datos,
   datatype:"html",
   success:function(dato){
   	if(dato == 1){

   		window.location="Vista/administracion.html"
   	}else if(dato == 2){
   		window.location="Vista/checador.html"
   	}else if(dato== 0){
       window.location="index.html"
     }else{
   		alert("Usuario o contraseña incorrectos")
   	}
   }

 })

}
