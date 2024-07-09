
    <!-- ======= HEADER ======= -->
    <?php include_once "./components/header.php" ?>
    <!-- ======= END HEADER ======= -->

    <main id="main">

        <!-- =========  -->
        <?php require('./controller/insert-new-post.php'); ?>
        
        <!-- ======= New Post Form ======= -->
        <div class="row justify-content-center mt-5">

            <div class="col-lg-12">
                <h5 class="comment-title">Nuevo Post</h5>
                <form action="./controller/insert-new-post.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="comment-name">Título</label>
                            <input type="text" name="title" class="form-control" id="newPost-name" placeholder="Título del Post" value="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="comment-email">Extracto</label>
                            <input type="text" name="excerpt" class="form-control" id="newPost-excerpt" placeholder="Excerpt o extracto del Post" value="<?php echo htmlspecialchars($excerpt, ENT_QUOTES) ?>">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="content-post">Contenido (Requerido)</label>
                            <textarea class="form-control" name="content" id="content-post" placeholder="Contenido del Post" cols="30" rows="14"><?php echo htmlspecialchars($content, ENT_QUOTES) ?></textarea>
                        </div>
                        <div class="col-12">
                            <input type="submit" name="submit-new-post" class="btn btn-primary" value="Crear Post">
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- End New Post Form  -->
        <br>
        <br>

    </main> <!-- End #main -->



    <!-- ============= Footer ============= -->
    <?php include_once "./components/footer.php" ?>
    <!-- ================================== -->

