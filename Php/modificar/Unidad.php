<?php


		 $noEconomico=$_POST['noEconomico'];
		 $marca=$_POST['marca'];
		 $modelo=$_POST['modelo'];
		 $noPasajeros=$_POST['noPasajeros'];
		 $noMotor=$_POST['noMotor'];
		 $placa=$_POST['placa'];

		 if(isset($placa)){
		 include('../Conexion.php');
		 $query="UPDATE Unidad SET marca ='$marca',modelo = '$modelo',noPasajeros ='$noPasajeros',noMotor ='$noMotor',placa ='$placa' where noEconomico = '$noEconomico'";
		 $sql=mysqli_query($conexion,$query);


			echo 1;
			}else{
				echo 0;
				}



?>
