<?php

include('dbconnect.php');

date_default_timezone_set("America/Chicago");

$date = date("Y/m/d");

$id = $_GET['id'];

$query = "UPDATE vales SET estatus='Entregado', fechauso='$date' WHERE id='$id'";

if(mysqli_query($conn, $query)){
	echo "Update exitoso";
}else{
	echo "Error";
}

header('Location: ver-ordenes.php');


?>