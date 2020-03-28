<?php
$host ="localhost";
$user ="root";
$pass ="";
$db='consultaprueba';
$con=mysqli_connect($host,$user,$pass)or die("Error al Conectar");
mysqli_select_db($con,$db)or die("No de pudo conectar con la base de datos ERROR 404 NOT FOUND");

$cons=$_POST["consulta"];
$r=$_POST["nrandom1"];
if ($cons == "sucursal"){
	$sql = "select nombre,primerapellido from cliente where sucursalcliente = '$r'";
    $consresult = mysqli_query($con, $sql);
    $h = mysqli_num_rows($consresult);
	if ($h==0){
		echo "No se Encontro reultado";
		}else{
		echo "<strong>Clientes de la sucursal:</strong> ", $r."<br><br>";
		while ( $row = mysqli_fetch_assoc($consresult)) {
            $Nombre = $row["nombre"]."<br>";
			$Apellido = $row["primerapellido"]."<br><br>";

		}
	}
    }else{
    echo "Error 404 NOT FOUND xd";
	}
?>
<table border="1" width="600">
	<tr>
		<th>Nombre</th>
		<th>Apellido</th>
	</tr>

	<tr>
		<th><?php echo $Nombre; ?></th>
		<th><?php echo $Apellido; ?></th>
	</tr>
</table>