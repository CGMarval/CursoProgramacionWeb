
  <!-- ======= HEADER ======= -->
  <?php include_once "./components/header.php" ?>
  <!-- ======= END HEADER ======= -->

  <main id="main">

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= All Post Content ======= -->
            <!-- llamamos al controlador del array de los posts asociativo para llenar el array con la info de la base de datos -->
            <?php include_once "./controller/get-all-post.php" ?>
            <!-- ============================ punto 3 ============================================== -->
            <!-- Creamos un loop para mostrar los posts nuevos requerido en el punto #3 de la prueba -->
            <?php foreach ($all_posts as $post) : ?>
              <div class="all-post">
                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <h1 class="mb-5"><?php echo $post['title']; ?></h1>
                <p><?php echo $post['excerpt']; ?></p>

                <!-- <figure class="my-4">
                  <img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid">
                  <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>
                </figure> -->
                <p><?php echo $post['content']; ?></p>
              </div>
            <?php endforeach; ?>

    </section>
  </main><!-- End #main -->

  <!-- ============= Footer ============= -->
  <?php include_once "./components/footer.php" ?>
  <!-- ================================== -->
