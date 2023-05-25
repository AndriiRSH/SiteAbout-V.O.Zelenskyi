<?php include_once('header.php'); ?>
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Звернення</h1>
        <section class="featured-posts-section">
            <div class="row">
                <?php
                foreach ($posts as $post) {?>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right" >
                    <div class="blog-post-thumbnail-wrapper" >
                        <img src = "<?= $post['image']; ?>" alt = "blog post" >
                    </div >
                    <a href = "" class="blog-post-permalink" >
                        <h6 class="blog-post-title" ><?= $post['title']; ?></h6 >
                    </a >
                </div >
              <?php } ?>
            </div>
        </section>

    </div>

</main>
<?php include_once('footer.php'); ?>
