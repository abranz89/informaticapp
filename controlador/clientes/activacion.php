<?php
require("../../modelo/conexion.php");
$id = mysqli_real_escape_string($mysqli,htmlentities($_GET['id']));

$query = "SELECT id, estado FROM clientes WHERE llave = '$id'";
$resultado = $mysqli->query($query);
$fila = $resultado ->fetch_assoc();

$cantidad = count($fila);

if($cantidad != 0)
{
	if($fila['estado'] == 2)
	{
		$query2 = "UPDATE clientes SET estado = 1 WHERE llave = '$id' AND id = ".$fila['id'];
		$resultado2 = $mysqli->query($query2);

		header("location: ../../ingresar.php");
	}
	
}
?>