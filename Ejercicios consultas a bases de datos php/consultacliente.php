<?php
$host ="localhost";
$user ="root";
$pass ="";
$db='consultaprueba';
$con=mysqli_connect($host,$user,$pass)or die("Error al Conectar");
mysqli_select_db($con,$db)or die("No de pudo conectar con la base de datos ERROR 404 NOT FOUND");

$cons=$_POST["consulta"];
$r=$_POST["nrandom2"];
if ($cons == "cliente"){
	$sql = "select * from cliente where nombre = '$r'";
    $consresult = mysqli_query($con, $sql);
    $h = mysqli_num_rows($consresult);
	if ($h==0){
		echo "Error al encontrar resultados intente de nuevo";
		}else{
			echo "<strong>Clientes:</strong> ", $r."<br><br>";
			while ( $row = mysqli_fetch_assoc($consresult)) {
                $Nombre = $row["nombre"];
				$P_Apellido = $row["primerapellido"];
				$S_Apellido = $row["segundoapellido"];
				$Edad = $row["edad"];
				$Celular = $row["celular"];
		    }
	    }
    }else{
    	echo "Error al mostrar datos";
    }
?>
<table border="1" width="600">
	<tr>
		<th>Nombre</th>
		<th>Primer Apellido</th>
		<th>Segundo Apellido</th>
		<th>Edad</th>
		<th>Celular</th>
	</tr>

	<tr>
		<th><?php echo $Nombre; ?></th>
		<th><?php echo $P_Apellido; ?></th>
		<th><?php echo $S_Apellido?></th>
		<th><?php echo $Edad; ?></th>
		<th><?php echo $Celular; ?></th>
	</tr>
</table>