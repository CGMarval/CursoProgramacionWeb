<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog-E1-UF1845</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->

  <!-- Vendor JS Files -->
  <script defer src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script defer src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script defer src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script defer src="assets/vendor/aos/aos.js"></script>
  <script defer src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script defer src="assets/js/main.js"></script>

</head>
<body>
    <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>CGM-Blog</h1>
      </a>

      <?php include_once "./controller/time-zone-controller.php" ?>
      <div>
          <h6>Última act.: <?php echo date('H:i:s d-m-Y'); ?></h6>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li class="dropdown"><a href="#"><span>Post</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="last-post.php">Ver Último Post</a></li>
              <li class="dropdown"><a href="#"><span>Administrar post</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Buscar Post</a></li>
                  <li><a href="#">Modificar Post</a></li>
                  <li><a href="#">Borrar Post</a></li>
                  <li><a href="new-post.php">Crear Nuevo Post</a></li>
                </ul>
              </li>
              <li><a href="all-post.php">Ver Todos Los Post</a></li>
            </ul>
          </li>  -->

          <li><a href="index.php">Blog</a></li>
          <li><a href="new-post.php">Nueva Entrada</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->
</body>
</html>