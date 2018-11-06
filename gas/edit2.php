<?php

//Código para editar la información de un empleado.
include('dbconnect.php');

$id = $_GET['id'];

$nombre = $_GET['nombre'];

$query = "UPDATE receptores SET nombre='$nombre' WHERE id='$id'";

if(mysqli_query($conn, $query)){
	echo "Updated";
	header('Location: generar-orden.php');
}else{
	echo "Error";
}

mysqli_close($conn);

?>