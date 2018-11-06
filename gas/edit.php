<?php

//Código para editar la información de un empleado.
include('dbconnect.php');

date_default_timezone_set("America/Chicago");

$date = date("Y/m/d");

$id = $_POST['id'];

$monto = $_POST['monto'];

$folio = $_POST['folio'];

$empresa = $_POST['empresa'];

$gasolina = $_POST['gasolina'];

$vehiculo = $_POST['vehiculo'];

$ticket = $_POST['ticket'];

$query = "UPDATE vales SET monto='$monto', folio='$folio', empresa='$empresa', gasolina='$gasolina', vehiculo='$vehiculo', fecharec='$date', ticket='$ticket' WHERE id='$id'";

if(mysqli_query($conn, $query)){
	echo "Updated";
	header('Location: ver-ordenes.php');
}else{
	echo "Error";
	echo $id;
}

mysqli_close($conn);

?>