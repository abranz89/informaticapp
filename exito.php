<?php
include("layouts/principal_registro.php"); 
/**
 * Página de éxito del Comercio
 * Esta página será invocada por Flow cuando la transacción resulte exitosa
 * y el usuario presione el botón para retornar al comercio desde Flow
 */
include 'kpf/flowAPI.php';

// Inicializa la clase de flowAPI
$flowAPI = new flowAPI();

try {
	// Lee los datos enviados por Flow
	$flowAPI->read_result();
} catch (Exception $e) {
	error_log($e->getMessage());
	header($_SERVER['SERVER_PROTOCOL'] . ' 500 Ha ocurrido un error interno', true, 500);
	return;
}

//Recupera los datos enviados por Flow
$ordenCompra = $flowAPI->getOrderNumber();
$monto = $flowAPI->getAmount();
$concepto = $flowAPI->getConcept();
$pagador = $flowAPI->getPayer();
$flowOrden = $flowAPI->getFlowNumber();

?>

<section id="content">
	<div class="container">
		<h4>Su pago se ha realizado exitosamente</h4>
		Orden de Compra: <?php echo $ordenCompra?><br />
		Monto: <?php echo $monto?><br />
		Descripción: <?php echo $concepto?><br />
		Pagador: <?php echo $pagador?><br />
		Flow Orden N°: <?php echo $flowOrden?><br />
		<br>
		<h5>Gracias por su compra</h5>
	</div>
</section>

<?php
include("layouts/final.php");
?>
