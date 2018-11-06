<?php

//Código que Agrega a un empleado a la BD.

//Conexión

include('dbconnect.php');

date_default_timezone_set("America/Chicago");

$date = date("Y/m/d");

$nombre = $_POST['nombre'];

//Query

$query = "INSERT INTO receptores(nombre) VALUES('$nombre')";

if(mysqli_query($conn, $query)){
	echo "Insert exitoso";
}else{
	echo "Error";
}

mysqli_close($conn);

header('Location: generar-orden.php');

?>