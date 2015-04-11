<?php


		 $noEconomico=$_POST['noEconomico'];
		 $marca=$_POST['marca'];
		 $modelo=$_POST['modelo'];
		 $noPasajeros=$_POST['noPasajeros'];
		 $noMotor=$_POST['noMotor'];
		 $placa=$_POST['placa'];

		 if(isset($placa)){
		 include('../Conexion.php');

    $query="INSERT INTO unidad(noEconomico,marca,modelo,noPasajeros,noMotor,placa)values
 		 ('$noEconomico','$marca','$modelo','$noPasajeros','$noMotor','$placa')";
		 $sql=mysqli_query($conexion,$query);


			echo 1;
			}else{
				echo 0;
				}



?>
