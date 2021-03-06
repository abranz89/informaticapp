<?php
/**
 * Página de confirmación del Comercio
 */
include 'flowAPI.php';

// Inicializa la clase de flowAPI
$flowAPI = new flowAPI();

try {
	// Lee los datos enviados por Flow
	$flowAPI ->read_confirm();
	
} catch (Exception $e) {
	// Si hay un error responde false
	echo $flowAPI ->build_response(false);
	return;
}

//Recupera Los valores de la Orden
$FLOW_STATUS = $flowAPI->getStatus();  //El resultado de la transacción (EXITO o FRACASO)
$ORDEN_NUMERO = $flowAPI->getOrderNumber(); // N° Orden del Comercio
$MONTO = $flowAPI->getAmount(); // Monto de la transacción
$ORDEN_FLOW = $flowAPI->getFlowNumber(); // Si $FLOW_STATUS = "EXITO" el N° de Orden de Flow
$PAGADOR = $flowAPI->getPayer(); // El email del pagador

if($FLOW_STATUS == "EXITO") {
	// La transacción fue aceptada por Flow
	// Aquí puede actualizar su información con los datos recibidos por Flow
	echo $flowAPI->build_response(true); // Comercio envía recepción de la confirmación
} else {
	// La transacción fue rechazada por Flow
	// Aquí puede actualizar su información con los datos recibidos por Flow
	echo $flowAPI->build_response(true); // Comercio envía recepción de la confirmación
}
