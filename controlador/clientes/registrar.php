<?php
/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/
$recaptcha = $_POST["g-recaptcha-response"];

	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LewEToUAAAAAPse3rPudP7OsOMnS_RVVfwk6XOv',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) 
	{
			require("../../modelo/conexion.php");
			if($mysqli)
			{
				$nombres = mysqli_real_escape_string($mysqli,htmlentities($_POST['nombres']));
				$apellidos = mysqli_real_escape_string($mysqli,htmlentities($_POST['apellidos']));
				$email = mysqli_real_escape_string($mysqli,htmlentities($_POST['email']));
				$clave = mysqli_real_escape_string($mysqli,htmlentities($_POST['password']));
				$clave_encri = md5($clave);
				$fecha_creacion = date('Y-m-d h:m:i');

				$llave = md5(rand(10000000,100000000000));

					$query = "INSERT INTO clientes(nombre,apellido,email,clave,llave,estado,created_at,updated_at) VALUES('$nombres','$apellidos','$email','$clave_encri','$llave',2,'$fecha_creacion','$fecha_creacion')";
					$resultado = $mysqli->query($query);



					if($resultado)
					{

						$cabecera ="MIME-Version: 1.0\r\n";
						$cabecera .= "Content-Type: text/html; charset=iso-8859-1\r\n" ;
						$cabecera .= 'From: programacion@cablecolor.cl' . "\r\n" .
                                                'Reply-To: programacion@cablecolor.cl' . "\r\n" .
                                                'X-Mailer: PHP/' . phpversion();    
                        $asunto = "Confirmacion de cuenta";
                        $para = $email;

                        $mensaje = "<html>";
                        $mensaje .= "<head>";
                        $mensaje .= "</head>";

                        $mensaje .= "<body>";
                        $mensaje .= "<h3>Confirmaci&oacute;n de cuenta</h3>";
						$mensaje .= "<p>Debes activar tu cuenta pulsando este enlace:</p>";  
						$mensaje .= "<p><a href='https://www.informaticapp.cl/beta/informaticapp/controlador/clientes/activacion.php?id=$llave'>Activar cuenta</a></p>";
						$mensaje.="<br><br>";
                        $mensaje .= "<img src='https://informaticapp.cl/beta/informaticapp/img/Logo3.png' width='200px'>";
                        $mensaje .= "</body>";

                        $mensaje .= "</html>";

                        mail($para, $asunto, $mensaje, $cabecera);
						echo "OK";
					}
					else
					{
						echo $mysqli->errno;
					}

			}
			else
			{
				echo "no se pudo conectar a la bd";
			}
	}
	else
	{
		echo "ERROR";
	}





?>