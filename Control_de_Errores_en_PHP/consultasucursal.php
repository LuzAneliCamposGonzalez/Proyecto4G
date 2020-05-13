<?php
$mysqli= new mysqli("localhost","root","","consultaprueba");
if ($mysqli->connect_errno) {
	echo "Fallo al conectarse a Mysql: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
if (isset($_POST['consulta'])) {
	$Nombre = $_POST['nrandom1'];
	$Query = "SELECT nombre, primerapellido FROM cliente WHERE sucursalcliente = '$Nombre'";
	$Resultado = mysqli_query($mysqli, $Query);
	if (!$Resultado) {
		echo "Commit fallido ($Resultado->errno) $Resultado->error";
		exit();
	}else{
		while ($row = mysqli_fetch_assoc($Resultado)) {
			echo "<center>";
	        echo "<h1>";
	        echo "Informacion de la sucursal ";
	        echo "</h1>";
	        echo "</center>";
	        echo "<strong>Clientes de la sucursal:</strong> ", $Nombre."<br><br>";
	        echo "<lu>";

	        echo "<h3>";
            echo "Nombre: ";
            echo "</h3>";
			echo $Nombra = $row["nombre"];
			echo "<br>";

			echo "<h3>";
			echo "Apellido: ";
			echo "</h3>";
			echo $Apellido = $row["primerapellido"]."<br><br>";
			echo "</lu>";
		}
	}
}
?>
