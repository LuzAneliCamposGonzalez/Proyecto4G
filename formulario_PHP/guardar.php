<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $db="formulario";
    $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
    mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
        $Nombre=$_POST["fname"];
        $Apellido=$_POST["fapellido"];
        $Edad=$_POST["fedad"];
        $Numero=$_POST["fnumero"];
        $Correo_Electronico=$_POST["fcorreo"];
        $Direccion=$_POST["fdireccion"];
        $RFC=$_POST["fRFC"];
        $Idioma=$_POST["fidioma"];
        $Descripcion=$_POST["fdescripcion"];
    $sql="INSERT INTO datos VALUES('$Nombre','$Apellido','$Edad','$Numero','$Correo_Electronico','$Direccion','$RFC','$Idioma','$Descripcion')";
    $ejecutar=mysqli_query($con,$sql);
    if(!$ejecutar){
        echo"Hubo Algun Error";
    }else{
        echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
    }
?>