<!-- ======= HEADER ======= -->
<?php include_once "./components/header.php" ?>
<!-- ======================= -->

<!-- ======= Post Grid Section ======= -->
<main id="main">
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="single-post.php"><img src="assets/img/post-landscape-1.png" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                        <h2><a href="single-post.php">Cleyber es el puto amo</a></h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-1.png" alt="" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Cleyber Garcia</h3>
                            </div>
                        </div>
                    </div>

                </div>

                <?php include_once "./controller/get-all-post.php" ?>
                <div class="col-lg-8">
                    <div class="row g-5">
                        
                        <div class="col-lg-4 border-start custom-border">
                            <?php 
                                $cont=0;
                                $mitad = ceil(count($all_posts)/2);
                            ?>
                            <?php foreach ($all_posts as $post) : ?>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/<?php echo ($post['id']) ?>.jpeg" alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">posted</span> <span class="mx-1">&bullet;</span> <span><?php echo $post['published_on']; ?></span></div>
                                    <h2><a href="single-post.php"><?php echo $post['title']; ?></a></h2>
                                </div>
                                <?php $cont++; ?>
                                <?php if ($cont == $mitad){break;} ?>
                            <?php endforeach; ?>
                        </div>

                        <div class="col-lg-4 border-start custom-border">
                            <!-- En este punto segmentamos el array desde su mitad en adelante para mostrar la mitad al lado la primera mitad -->
                            <?php 
                                $segunda_mitad_post = array_slice($all_posts, $mitad, null, true)
                            ?>
                            <?php foreach ($segunda_mitad_post as $post) : ?>
                                <div class="post-entry-1">
                                    <a href="single-post.php"><img src="assets/img/<?php echo ($post['id']) ?>.jpeg" alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">posted</span> <span class="mx-1">&bullet;</span> <span><?php echo $post['published_on']; ?></span></div>
                                    <h2><a href="single-post.php"><?php echo $post['title']; ?></a></h2>
                                </div>
                            <?php endforeach; ?>
                        </div>
              
                        <!-- Trending Section -->
                        <?php include_once "./controller/get-all-post.php" ?>
                        <div class="col-lg-4">

                            <div class="trending">
                                <h3>Trending</h3>
                                <ul class="trending-post">
                                <?php $i=1; ?>
                                <?php foreach ($all_posts as $post) : ?>
                                    <li>
                                        <a href="single-post.php">
                                            <span class="number"><?php $i ?></span>
                                            <h3><?php echo $post['title']; ?></h3>
                                            <span class="author"><?php echo $post['published_on']; ?></span>
                                        </a>
                                    </li>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->
</main><!-- End #main -->

<!-- ============= Footer ============= -->
<?php include_once "./components/footer.php" ?>
<!-- ================================== -->