<?php require_once "system/function.php"; ?>
<?php require_once "includes/header.php"; ?>
<?php require_once "includes/navbar.php"; ?>

<?php 

    if($_GET['post']) {

        $pID = $_GET['post'];

        $sql =  "SELECT * FROM post WHERE id=?";
        $res = getOne($sql, [$pID]);

    }

?>


<div class="post_details">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-9">
                <h1 class="post_detail_title"><?php echo $res->title; ?></h1>

                <div class="post_detail_img">
                    <img src="assets/uploads/<?php echo unserialize($res->image)[0]; ?>" alt="<?php echo $res->title; ?>">
                </div>

                <div class="post_detail_date">
                    <?php echo $res->created_at; ?>
                </div>

                <div class="post_detail_content">
                    <?php echo $res->content; ?>
                </div>
            </div>

            <div class="col-md-3">
                <h3>News Post Details</h3>
            </div>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>