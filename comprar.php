<?php
session_start();
include "kpf/flowAPI.php";
include("layouts/principal_registro.php"); 
require("modelo/conexion.php");
$cliente_id = $_SESSION['id_usuario'];
$query = "SELECT MAX(id) AS id_compra FROM compras WHERE clientes_id = ".$cliente_id;
$res = $mysqli->query($query);
$fila = $res ->fetch_assoc();

$id_compra = $fila['id_compra'];

$query2 = "SELECT productos.descripcion, productos.valor FROM productos inner join(compras) on compras.productos_id = productos.id WHERE compras.id = ".$id_compra;
$res2 = $mysqli->query($query2);
$fila2 = $res2 ->fetch_assoc();

$date = new DateTime();
$timestamp = $date->format('YmdHis');

$descripcion = $fila2['descripcion'];
$valor = intval($fila2['valor']);

//Opcional el medio de pago (Webpay = 1, Servipag = 2, Multicaja = 3, Todos = 9)
$medioPago = $flow_medioPago;

$flowAPI = new flowAPI();

try {
	$flow_pack = $flowAPI->new_order($id_compra, $valor, $descripcion, $_SESSION['email']);
	// Si desea enviar el medio de pago usar la siguiente línea
	//$flow_pack = $flowAPI->new_order($orden_compra, $monto, $concepto, $email_pagador, $medioPago);
	
} catch (Exception $e) {
	header('location: error.php');
}

?>

<section id="content">
	<div class="container">
			<h5>Confirme su orden antes de proceder al pago</h5>
			Orden N°: <?php echo $id_compra?><br />
			Monto: <?php echo $valor?><br />
			Descripción: <?php echo $descripcion?><br />
			Email: <?php echo $_SESSION['email'];?><br />
			<form method="post" action="<?php echo $flow_url_pago?>">
			<input type="hidden" name="parameters" value="<?php echo $flow_pack ?>" />
			<br>
			<button type="submit" class='btn btn-danger'>Continuar al pago</button>
			</form>
	</div>
</section>


<?php
include("layouts/final.php");
?>