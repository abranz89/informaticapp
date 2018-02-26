<?php
$email = $_POST['email'];
$nombre = $_POST['name'];
$asunto = $_POST['subject'];
$mensaje2 = $_POST['message'];


	$mensaje = "<html><body>";
	//$mensaje .="<img src='http://web.cablecolor.cl/images/logo_cablecolor2014.jpg' width='20%' />";
	$mensaje .="<p>Nombre : ".$nombre."</p>";
	$mensaje .= "<p>Correo: ".$email."</p>";
	$mensaje .= "<p>Mensaje: ".$mensaje2."</p>";
	
	$destino = "abran_contreras@hotmail.com";
	//$destino = 'contacto@informaticapp.cl, acontreras@informaticapp.cl, jrivera@informaticapp.cl, pdiaz@informaticapp.cl';
	//$asunto = "Contacto InformaticAPP";
	$cabecera ="MIME-Version: 1.0\r\n";
	$cabecera .= "Content-Type: text/html; charset=iso-8859-1\r\n" ;
	
	if(mail($destino, $asunto, $mensaje, $cabecera))
	{
		echo "OK";
	}
	else
	{
		echo "ERROR";
	}

?>