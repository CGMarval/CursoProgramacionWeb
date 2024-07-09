<?php require('init.php'); ?>
<?php
if (isset($_GET['delete-post'])) {
	$id = $_GET['delete-post'];
	if (!check_hash('delete-post-' . $id, $_GET['hash'])) {
		die('Hackeando, no?');
	}

	delete_post($id);
	redirect_to('index.php');
	die();
}
?>

<!-- ======= HEADER ======= -->
<?php require( 'templates/header.php' ); ?>
<!-- ======================= -->

<?php
$all_posts = get_all_posts();

$post_found = false;
if (isset($_GET['view'])) {
	$post_found = get_post($_GET['view']);
	if ($post_found) {
		$all_posts = [$post_found];
	}
};
?>
 

<?php if (isset($_GET['success'])) : ?>
	<div class="success">
		El post ha sido creado
	</div>
<?php endif; ?>

<!-- ======= Sección Post con Grid ======= -->
<main id="main">
	<section id="posts" class="posts">
		<div class="container" data-aos="fade-up">
			<div class="row g-5 posts">
				<?php if (!$post_found) : ?>
					<div class="col-lg-8">
						<div class="row g-5">

							<?php 
								$cont=0;
								$primeraMitad = ceil(count($all_posts)/2);
							?>
							<div class="col-lg-6 border-start custom-border">
								<?php foreach ($all_posts as $post) : ?>
									<article class="post">
										<div>
											<a href="?view=<?php echo $post['id']; ?>"><img src="assets/img/<?php echo ($post['id']) ?>.jpeg" alt="" class="img-fluid"></a>
										</div>
										<header>
											<h2 class="post-title">
												<a href="?view=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
											</h2>
										</header>
										<div class="post-content">
											<?php if ($post_found) : ?>
												<?php echo $post['content']; ?>
											<?php else : ?>
												<?php echo $post['excerpt']; ?>
											<?php endif; ?>
										</div>
										<footer>
											<span class="post-date">
												<?php
												// Convertir la fecha de la cadena a un timestamp y luego a un objeto DateTime
												$date = new DateTime('@' . strtotime($post['published_on']));
												$date->setTimezone(new DateTimeZone(date_default_timezone_get())); // Ajustar a la zona horaria predeterminada

												// Formatear la fecha
												$formattedDate = $date->format('d M Y');
												?>
												Publicada en:
												<?php echo $formattedDate ?>
											</span>
											<?php if (is_logged_in()) : ?>
												<div class="delete-post">
													<a href="?delete-post=<?php echo $post['id']; ?>&hash=<?php echo generate_hash('delete-post-' . $post['id']); ?>">Eliminar post</a>
												</div>
											<?php endif ?>
										</footer>
									</article>
									<br> <br> <br>
									<?php $cont++; ?>
									<?php if ($cont == $primeraMitad){break;} ?>
								<?php endforeach; ?>
							</div>
						
					
							<?php 
								$segunda_mitad_post = array_slice($all_posts, $primeraMitad, null, true);
							?>
							<div class="col-lg-6 border-start custom-border">
								<?php foreach ($segunda_mitad_post as $post) : ?>
									<article class="post">
										<div>
											<a href="?view=<?php echo $post['id']; ?>"><img src="assets/img/<?php echo ($post['id']) ?>.jpeg" alt="" class="img-fluid"></a>
										</div>
										<header>
											<h2 class="post-title">
												<a href="?view=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
											</h2>
										</header>
										<div class="post-content">
											<?php if ($post_found) : ?>
												<?php echo $post['content']; ?>
											<?php else : ?>
												<?php echo $post['excerpt']; ?>
											<?php endif; ?>
										</div>
										<footer>
											<span class="post-date">
												<?php
												// Convertir la fecha de la cadena a un timestamp y luego a un objeto DateTime
												$date = new DateTime('@' . strtotime($post['published_on']));
												$date->setTimezone(new DateTimeZone(date_default_timezone_get())); // Ajustar a la zona horaria predeterminada

												// Formatear la fecha
												$formattedDate = $date->format('d M Y');
												?>
												Publicada en:
												<?php echo $formattedDate ?>
											</span>
											<?php if (is_logged_in()) : ?>
												<div class="delete-post">
													<a href="?delete-post=<?php echo $post['id']; ?>&hash=<?php echo generate_hash('delete-post-' . $post['id']); ?>">Eliminar post</a>
												</div>
											<?php endif ?>
										</footer>
									</article>
									<br> <br> <br>
								<?php endforeach; ?>
							</div>
						</div>	
					</div> 

					<!-- Sección últimos post -->
					<div class="col-lg-4">
						<div class="trending">
							<h3>Lo último</h3>
							<ul class="trending-post">
								<?php $i = 1; ?>
								<?php foreach (array_reverse($all_posts) as $post) : ?>
									<li>
										<a href="?view=<?php echo $post['id']; ?>">
											<span class="number"><?php echo $i ?></span>
											<h3><?php echo $post['title']; ?></h3>
											<span class="author"><?php $date = new DateTime($post['published_on']); echo $date->format('d M Y'); ?></span>
										</a>
									</li>
									<?php $i++; ?>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				<?php else : ?>
					<div class="col-lg-12">
						<div class="row g-5">
							<div class="col-lg-2"></div>
							<div class="col-lg-8 border-start custom-border">
								<?php foreach ($all_posts as $post) : ?>
									<article class="post">
										<div>
											<a href=""><img src="assets/img/<?php echo ($post['id']) ?>.jpeg" alt="" class="img-fluid"></a>
										</div>
										<header>
											<h2 class="post-title">
												<a href=""><?php echo $post['title']; ?></a>
											</h2>
										</header>
										<div class="post-content">
											<?php if ($post_found) : ?>
												<?php echo $post['content']; ?>
											<?php else : ?>
												<?php echo $post['excerpt']; ?>
											<?php endif; ?>
										</div>
										<footer>
											<span class="post-date">
												<?php
												// Convertir la fecha de la cadena a un timestamp y luego a un objeto DateTime
												$date = new DateTime('@' . strtotime($post['published_on']));
												$date->setTimezone(new DateTimeZone(date_default_timezone_get())); // Ajustar a la zona horaria predeterminada

												// Formatear la fecha
												$formattedDate = $date->format('d M Y');
												?>
												Publicada en:
												<?php echo $formattedDate ?>
											</span>
											<?php if (is_logged_in()) : ?>
												<div class="delete-post">
													<a href="?delete-post=<?php echo $post['id']; ?>&hash=<?php echo generate_hash('delete-post-' . $post['id']); ?>">Eliminar post</a>
												</div>
											<?php endif ?>
										</footer>
									</article>
									<br> <br> <br>
								<?php endforeach; ?>
							</div>
							<div class="col-lg-2"></div>
						</div>
					</div>
				<?php endif ?>	
			</div> <!-- Fin Fila Blog -->
		</div> <!-- Fin Contenedor -->
	</section> <!-- Fin Sección Post con Grid -->
</main><!-- Fin #main -->

<?php require('templates/footer.php'); ?>
