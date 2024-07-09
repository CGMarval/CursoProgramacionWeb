
<?php

$error = false;
$precio1 = '';
$precio2 = '';
$precio3 = '';

if (isset($_POST['calcular-precio-promedio'])) {

	// Se ha enviado el formulario
	$precio1 = filter_input(INPUT_POST, 'precio-tienda1', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$precio2 = filter_input(INPUT_POST, 'precio-tienda2', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$precio3 = filter_input(INPUT_POST, 'precio-tienda3', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


	if (empty($precio1) || empty($precio2) || empty($precio3)) {
		$error = true;
	} else {
		include './inc/datos.php';
		calcular_promedio($precio1, $precio2, $precio3);
		// Redirigir al resultado
		header("location: resultado.php");
		
	}
}

?>

<?php if ($error) : ?>
	<div class="error">
		Error al introducir los datos.
	</div>
<?php endif; ?>

	<main id="main">
		<!-- ======= Formulario Calculadora de Promedio de Precios ======= -->
		<div class="row justify-content-center mt-5">

			<div class="col-lg-12">
				<h3 class="comment-title">Calculara de Precios</h3>
				<form action="" method="post">
					<div class="row">
						<div class="row">
						<div class="col-lg-6 mb-3">
							<label for="precio-tienda1">Precio de tienda #2</label>
							<input type="text" name="precio-tienda1" class="form-control" id="precio-tienda1" value="">
						</div>
						</div>
						<div class="row">
						<div class="col-lg-6 mb-3">
							<label for="precio-tienda2">Precio de tienda #2</label>
							<input type="text" name="precio-tienda2" class="form-control" id="excerpt" value="">
						</div>
						</div>
						<div class="row">
						<div class="col-lg-6 mb-3">
							<label for="precio-tienda3">Precio de tienda #3</label>
							<input type="text" name="precio-tienda3" class="form-control" id="excerpt" value="">
						</div>
						</div>
						<div class="row">
						<div class="col-12">
							<input type="submit" name="calcular-precio-promedio" class="btn btn-primary" value="Calcular">
						</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- Fin Formulario Calculadora de Promedio de Precios  -->
		<br> 
	</main> <!-- Fin #main -->
