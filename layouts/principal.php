<?php
session_start();
  if($_SERVER['HTTPS']!="on")
  {
     //$redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    // header("Location:$redirect");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Servicios informáticos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Servicios informáticos" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon1.png">

	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

<script>
	function link(content)
	{	
		
		var strAncla = '#' + content;
		$('html,body').animate({scrollTop: $(strAncla).offset().top}, 2000);
	}


</script>
</head>

<body>


<div id="wrapper">
		<!-- start header -->
		<header>
		

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="index.php"><img src="img/Logo3.png" alt="" style="margin-top: -18px" width="240" height="72" /></a>
					</div>
					<div class="navbar-collapse collapse" role="navigation">
						<ul class="nav navbar-nav">
							<li class="dropdown active">
								<a href="#content" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Inicio <!--<i class="fa fa-angle-down">--></i></a>
								

							</li>
							<li class="dropdown">
								<a href="#" onclick="link('content')" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Servicios <!--<i class="fa fa-angle-down"></i>--></a>
							
							</li>
							<li><a href="#" onclick="link('sobreNosotros')">Sobre nosotros</a></li>
						
							<li><a href="#" onclick="link('contacto')">Contacto</a></li>

							<?php 
							if(isset($_SESSION['nombre']))
							{
								?>
									<li class="dropdown active" id="sesion">
										<a href="#content" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">  <span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $_SESSION['nombre'];?> <i class="fa fa-angle-down"></i></a>
										
											<ul class="dropdown-menu" id="sesion2">
												<!--<li><a href="#">Mi cuenta</a></li>-->
												<li><a href="controlador/clientes/cerrar_sesion.php">Cerrar sesi&oacute;n</a></li>

											</ul>

									</li>
								<?php
							}
							else
							{
								?>
								<li><a href="ingresar.php">Iniciar sesi&oacute;n</a></li>
								<?php
							}
							?>

							

						</ul>
					</div>
				</div>
			</div>
		</header>