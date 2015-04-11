<?php


$usuario= $_POST['usuario'];
$passa= $_POST['pass'];


if(isset($usuario) && isset($passa)){
  include('Conexion.php');

  session_start();
  $query="SELECT * FROM usuario WHERE  clave = '$passa' AND nombre = '$usuario' OR email = '$usuario' Limit 1";


  $result =mysqli_query($conexion,$query);

 if ( $row = $result->fetch_array()){
   $valor = $row['tipo_idTipo'];

   $_SESSION['nombre']=$row['nombre'];
   $_SESSION['id']=$row['idUsuario'];

 }


  if($valor == 1){

  echo 1;
  }else if($valor == 2){
  	echo 2;
  }else{
  echo 0;

  }
}else{


  echo 0;
}

?>
