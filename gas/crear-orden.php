<?php

//Conexión

include('dbconnect.php');

$id = $_GET['id'];

$query = "SELECT * FROM receptores WHERE id='$id'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$nombre = $row['nombre'];

//Query

$query = "INSERT INTO vales(receptor, estatus) VALUES('$nombre', 'Pendiente')";

if(mysqli_query($conn, $query)){
	echo "Insert exitoso";
}else{
	echo "Error";
}

header('Location: orden.php');

?>