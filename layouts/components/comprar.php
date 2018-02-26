<?php
if(isset($_SESSION['nombre']))
{
	?>
	<a href="controlador/compras/insertar.php?articulo=<?php echo base64_encode($articulo);?>" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Comprar ahora</a>
	<?php
}
else
{
	?>
	<a href="registro.php" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Regístrate ahora</a>
	<?php
}
?>