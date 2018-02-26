<?php
include("layouts/principal_registro.php"); 
 ?>

		<section id="content">
			<div class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

						<form role="form" class="register-form" action="" method="post" >
							<h2>Regístrate <small> y se parte de nuestros clientes</small></h2>

							<div class="validation"></div>
							
							<div class="row">

								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombres" id="first_name" class="form-control input-lg" placeholder="Nombre" tabindex="1" required="required">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="apellidos" id="last_name" class="form-control input-lg" placeholder="Apellido" tabindex="2" required="required">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo electrónico" tabindex="4" required="required">
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5" required="required">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Repita la contraseña" tabindex="6" required="required">
									</div>
								</div>
							</div>

							

							<div class="row">
								<div class="col-xs-4 col-sm-3 col-md-3">
									<span class="button-checkbox">
										<button type="button" class="btn" data-color="info" tabindex="7">Acepto</button>
				                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
									</span>


								</div>

								<div class="col-xs-8 col-sm-9 col-md-9">
									Si haces click en <strong class="label label-primary">Registrarse</strong> ,tu estas aceptando nuestros <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terminos y condiciones</a> sobre el sitio.
								</div>
							</div>

							<br>
							<div class="g-recaptcha" data-sitekey="6LewEToUAAAAAA200MQ9ffCGiTW67no8WiKcgasd"></div>
							<br>
							<div class="row">
								<div class="col-xs-12 col-md-6"><input type="submit" value="Registrarse" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
								<div class="col-xs-12 col-md-6">¿Ya tienes una cuenta? <a href="ingresar.php">Ingresa</a></div>
							</div>
						</form>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Términos y Condiciones de Uso</h4>
							</div>
							<div class="modal-body">
								<?php
								include("terminosycondiciones.php");
								?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
			</div>
</section>


<?php
include("layouts/final.php");
?>