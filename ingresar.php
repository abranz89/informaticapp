<?php
include("layouts/principal_registro.php"); 
 ?>

<section id="content">
	<div class="container">


		<div class="row">

			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

			<div class="validation"></div>

				<form role="form" class="login-form" method="post" action="">
					<h2>Ingresa <small> y administra tu cuenta</small></h2>
					<!--<hr class="colorgraph">-->
					
					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo electrónico" tabindex="4">
					</div>
					<div class="form-group">
						<input type="password" class="form-control input-lg" name="clave" id="exampleInputPassword1" placeholder="Contraseña">
					</div>

					<div class="row">
						<div class="col-xs-4 col-sm-3 col-md-3">
							<span class="button-checkbox">
				<button type="button" class="btn" data-color="info" tabindex="7">Recúerdame</button>
                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
			</span>
						</div>
					</div>

					<!--<hr class="colorgraph">-->
					
					<div class="row">
						<div class="col-xs-12 col-md-6"><input type="submit" value="Ingresar" class="btn btn-danger btn-block btn-lg" tabindex="7"></div>
						<div class="col-xs-12 col-md-6">¿No tiene una cuenta? <a href="registro.php">Regístrate</a></div>
					</div>
				</form>
			</div>
		</div>

	</div>

	<br>
	<br>
	<br>
	<br>
</section>
		
<?php
include("layouts/final.php");
?>