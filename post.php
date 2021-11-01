<?php 

    require_once "includes/header.php";
    require_once "includes/navbar.php";
    include_once "system/function.php";


    if(isset($_POST['add'])) {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $postImg = $_FILES['files'];
        $post_date = $_POST['post_date'];
        $img = [];


        foreach($postImg['tmp_name'] as $key => $val) {
            
            $imageLink = mt_rand(time(), time()) + mt_rand(time(), time()) . "_" . $postImg['name'][$key];
            move_uploaded_file($postImg['tmp_name'][$key], "assets/uploads/". $imageLink);
            array_push($img, $imageLink);

        }

        $ans = insertPost($title, $content, serialize($img), $post_date, 'post');

        echo $ans;

    }
?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 border border-danger rounded bg-white p-5 my-5">

                <form action="post.php" method="post" enctype="multipart/form-data">
                    <legend class="text-center text-primary">Add News</legend>

                    <div class="mb-3">
                        <label for="post-title" class="form-label">Post Title</label>
                        <input type="text" name="title" class="form-control" id="post-title" placeholder="title">
                    </div>
                    <div class="mb-3">
                        <label for="post-content" class="form-label">Post Content</label>
                        <textarea style="resize: none;" class="form-control" name="content"  id="post-content" rows="3" placeholder="content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="post-image" class="form-label d-block">Post Image</label>
                        <input id="post-image" type="file" name="files[]" multiple>
                    </div>
                    <div class="mb-5">
                        <label for="post-date" class="form-label d-block">Post Date</label>
                        <input type="date" class="form-control" name="post_date" id="post-date">
                    </div>
                    <div class="hstack">
                        <button type="submit" name="add" class="btn btn-primary ms-auto">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php 

    require_once "includes/footer.php";
?>