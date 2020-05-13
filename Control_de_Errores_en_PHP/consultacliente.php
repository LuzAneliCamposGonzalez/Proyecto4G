<?php
$mysqli= new mysqli("localhost","root","","consultaprueba");
if ($mysqli->connect_errno) {
	echo "Fallo al conectarse a Mysql: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
if (isset($_POST['consulta'])) {
	$Nombre = $_POST['nrandom2'];
	$Query = "SELECT * FROM cliente WHERE nombre = '$Nombre'";
	$Resultado = mysqli_query($mysqli, $Query);
	if (!$Resultado) {
		echo "Commit fallido ($Resultado->errno) $Resultado->error";
		exit();
	}else{
		while ($row = mysqli_fetch_assoc($Resultado)) {
			echo "<center>";
	        echo "<h1>";
	                echo "Informacion del Cliente";
	        echo "</h1>";
	        echo "</center>";

			echo "<br>";
			echo "<br>";
			echo "<lu>";

			echo "<h3>";
			echo "Nombre: ";
			echo "</h3>";
			echo $Nombra = $row["nombre"];
			echo "<br>";

			echo "<h3>";
			echo "Primer Apellido: ";
			echo "</h3>";
			echo $P_Apellido = $row["primerapellido"];
			echo "<br>";

			echo "<h3>";
			echo "Segundo Apellido: ";
			echo "</h3>";
			echo $S_Apellido = $row["segundoapellido"];
			echo "<br>";

			echo "<h3>";
			echo "Edad: ";
			echo "</h3>";
			echo $Edad = $row["edad"];
			echo "<br>";

			echo "<h3>";
			echo "Celular: ";
			echo "</h3>";
			echo $Celular = $row["celular"];
			echo "</lu>";
		}
	}
}
?>
