<?php require_once "system/function.php"; ?>
<?php require_once "includes/header.php"; ?>
<?php require_once "includes/navbar.php"; ?>




    

<div class="latest_news my-5">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-9">
                <!-- <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title news_title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div> -->

                <div class="row row-cols-1 row-cols-lg-4 g-4">
                    <?php 

                        $sql = "SELECT * FROM post";
                        $posts = getAll($sql);

                        foreach($posts as $post) {

                    ?>
                        <a href="post_details.php?post=<?php echo $post->id; ?>" class="col d-block">
                            <div class="card border-0 news_card">
                                <div class="news_image">
                                    <img src="assets/uploads/<?= unserialize($post->image)[0] ?>" class="" alt="<?= $post->title; ?>">
                                </div>
                                
                                <div class="card-body">
                                    <h5 class="card-title news_title"><?php echo $post->title; ?></h5>
                                    <small class="d-block mb-3 news_date"><?php echo $post->created_at; ?></small>
                                    <!-- <div class="hstack">
                                        <button class="btn btn-sm btn-info ms-auto news_btn">details</button>
                                    </div> -->
                                </div>

                            </div>

                        </a>


                    <?php } ?>
            </div>

            <div class="col-md-3"></div>
        </div>
    </div>
</div>



<?php require_once "includes/footer.php"; ?>



