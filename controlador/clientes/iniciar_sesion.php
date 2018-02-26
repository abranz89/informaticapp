<?php
session_start();
require("../../modelo/conexion.php");
$email = mysqli_real_escape_string($mysqli,htmlentities($_POST['email']));
$clave =  mysqli_real_escape_string($mysqli,htmlentities($_POST['clave']));

$query = "SELECT * FROM clientes WHERE clave = MD5('$clave') AND email = '$email'";
$resultado = $mysqli->query($query);
$fila = $resultado->fetch_assoc();

$existe = count($fila);

if($existe != 0)
{
	if($fila['estado'] == 1)
	{
		echo "OK";
		$_SESSION['nombre'] = $fila['nombre']." ".$fila['apellido'];
		$_SESSION['email'] = $fila['email'];
		$_SESSION['id_usuario'] = $fila['id'];
	}
	else
	{
		echo "ESTADO";
	}
	
}
else
{
	echo "ERROR";
}

?>