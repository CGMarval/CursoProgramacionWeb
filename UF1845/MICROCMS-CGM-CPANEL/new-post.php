<?php require('init.php'); ?>
<?php

// $error = false;
// $title = '';
// $excerpt = '';
// $content = '';

// if (isset($_POST['submit-new-post'])) {

// 	// Se ha enviado el formulario
// 	$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
// 	$excerpt = filter_input(INPUT_POST, 'excerpt', FILTER_SANITIZE_STRING);
// 	$content = strip_tags($_POST['content'], '<br><p><a><img><div>');

// 	if (empty($title) || empty($content)) {
// 		$error = true;
// 	} else {
// 		insert_post($title, $excerpt, $content);
// 		// Redirigir al blog
// 		redirect_to('index.php');
// 	}
// }

?>
<?php //require('templates/header.php'); ?>
<!-- <h2>Crear nuevo post</h2> -->

<?php //if ($error) : ?>
	<!-- <div class="error">
		Error en el formulario.
	</div> -->
<?php //endif; ?>

	<!-- <main id="main"> -->
		<!-- ======= Formulario Nuevo Post ======= -->
		<!-- <div class="row justify-content-center mt-5">

			<div class="col-lg-12">
				<h3 class="comment-title">Nuevo Post</h3>
				<form action="" method="post">
					<div class="row">
						<div class="col-lg-6 mb-3">
							<label for="title">Título (requerido)</label>
							<input type="text" name="title" class="form-control" id="title" value="<?php //echo htmlspecialchars($title, ENT_QUOTES); ?>">
						</div>
						<div class="col-lg-6 mb-3">
							<label for="excerpt">Extracto</label>
							<input type="text" name="excerpt" class="form-control" id="excerpt" value="<?php //echo htmlspecialchars($excerpt, ENT_QUOTES); ?>">
						</div>
						<div class="col-12 mb-3">
							<label for="content">Contenido (Requerido)</label>
							<textarea name="content" class="form-control" id="content" cols="30" rows="30"><?php //echo htmlspecialchars($content, ENT_QUOTES); ?></textarea>
						</div>
						<div class="col-12">
							<input type="submit" name="submit-new-post" class="btn btn-primary" value="Enviar">
						</div>
					</div>
				</form>
			</div> -->
		<!-- </div> Fin Formulario Nuevo Post  -->
		<!-- <br>  -->
	<!-- </main> Fin #main --> -->

<?php require('templates/footer.php'); ?>
