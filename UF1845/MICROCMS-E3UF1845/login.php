<?php require('init.php') ?>
<?php
$error = false;

if (isset($_POST['submit-login'])) {
	if (!check_hash('login', $_POST['hash'])) {
		die('Hackeando, no?');
	}

	if (!login($_POST['username'], $_POST['password'])) {
		$error = true;
	}
}

if (is_logged_in()) {
	redirect_to('index.php');
}

?>

<?php require('templates/header.php'); ?>

<main id="main">

	<!-- ======= Formulario Login ======= -->
	<div class="row justify-content-center mt-5">

		<div class="col-lg-12">
			<h3 class="comment-title">Login</h3>

			<?php if ($error) : ?>
				<div class="error"><?php echo "Error de usuario o contraseña." ?></div>
			<?php endif; ?>

			<form action="" method="post">
				<div class="row">
					<div class="col-lg-6 mb-3">
						<label for="username">Usuario</label>
						<input type="text" name="username" class="form-control" id="username">
					</div>
					<div class="col-lg-6 mb-3">
						<label for="password">Contraseña</label>
						<input type="password" name="password" class="form-control" id="password">
					</div>
					<div class="col-12">
						<input type="hidden" name="hash" class="btn btn-primary" value="<?php echo htmlspecialchars(generate_hash('login'), ENT_QUOTES); ?>">
						<p>
							<input type="submit" name="submit-login" class="btn btn-primary" value="Login">
						</p>
					</div>
				</div>
			</form>
		</div>
	</div><!-- Fin Formulario Login  -->
</main><!-- Fin #main -->

<?php require('templates/footer.php'); ?>