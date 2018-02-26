<?php
/*******************************************************************************
* config                                                                      	*
* Página de configuración del comercio                                          *
* Version: 1.4                                                                 	*
* Date:    2016-08-17                                                         	*
* Author:  flow.cl                                                     			*
********************************************************************************/


/**
 * Ingrese aquí la URL de su página de éxito
 * Ejemplo: http://www.comercio.cl/kpf/exito.php
 * 
 * @var string
 */
//$flow_url_exito = 'http://localhost/informaticapp/exito.php';
$flow_url_exito = 'https://www.informaticapp.cl/beta/informaticapp/exito.php';

/**
 * Ingrese aquí la URL de su página de fracaso
 * Ejemplo: http://www.comercio.cl/kpf/fracaso.php
 * 
 * @var string
 */
//$flow_url_fracaso = 'http://localhost/informaticapp/fracaso.php';
$flow_url_fracaso = 'https://www.informaticapp.cl/beta/informaticapp/fracaso.php';

/**
 * Ingrese aquí la URL de su página de confirmación
 * Ejemplo: http://www.comercio.cl/kpf/confirmacion.php
 * 
 * @var string
 */
//$flow_url_confirmacion = 'http://localhost/informaticapp/kpf/confirma.php';
$flow_url_confirmacion = 'https://www.informaticapp.cl/beta/informaticapp/kpf/confirma.php';

/**
 * Ingrese aquí la URL de su página de retorno
 * Ejemplo: http://www.comercio.cl
 * 
 * @var string
 */
//$flow_url_retorno = 'http://localhost/flow';
$flow_url_retorno = 'https://www.informaticapp.cl/beta/informaticapp/';

/**
 * Ingrese aquí la página de pago de Flow
 * Ejemplo:
 * Sitio de pruebas = http://flow.tuxpan.com/app/kpf/pago.php
 * Sitio de produccion = https://www.flow.cl/app/kpf/pago.php
 * 
 * @var string
 */
$flow_url_pago = 'http://flow.tuxpan.com/app/kpf/pago.php';

# Commerce specific config

/**
 * Ingrese aquí la ruta (path) en su sitio donde están las llaves
 * 
 * @var string
 */
//$flow_keys = 'C:\Program Files (x86)\Apache Group\Apache2\htdocs\informaticapp\kpf\keys';
$flow_keys = '/home/informa5/public_html/beta/informaticapp/kpf/keys';

/**
 * Ingrese aquí la ruta (path) en su sitio donde estarán los archivos de logs
 * 
 * @var string
 */
//$flow_logPath = 'C:\Program Files (x86)\Apache Group\Apache2\htdocs\flow\kpf\logs';
//$flow_logPath = '/home/informa5/public_html/flow/kpf/logs';

/**
 * Ingrese aquí el email con el que está registrado en Flow
 * 
 * @var string
 */
$flow_comercio = 'abran_contreras@hotmail.com';

/**
 * Ingrese aquí el medio de pago
 * Valores posibles:
 * Solo Webpay = 1
 * Solo Servipag = 2
 * Solo Multicaja = 3
 * Todos los medios de pago = 9
 * 
 * @var string
 */
$flow_medioPago = '1';

/**
 * Ingrese aquí el modo de acceso
 * Valores posibles:
 * Mostrar pasarela Flow = f 
 * Ingresar directamente al medio de pago = d
 * 
 * @var string
 */
$flow_tipo_integracion = 'd';
?>
