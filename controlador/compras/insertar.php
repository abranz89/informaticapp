<?php
session_start();
require("../../modelo/conexion.php");
$articulo = mysqli_real_escape_string($mysqli,htmlentities(base64_decode($_GET['articulo'])));
$cliente_id = $_SESSION['id_usuario'];
$fecha = date('Y-m-d h:m:i');
$query = "INSERT INTO compras(clientes_id,productos_id,estados_id,created_at,updated_at) VALUES($cliente_id,$articulo,1,'$fecha','$fecha')";
$resultado = $mysqli->query($query);
//$id= $mysqli->insert_id;// Obtiene el ultimo ID
if($resultado)
{
	header("location: ../../comprar.php");
}
else
{
	header("location: ../../");
}

?>