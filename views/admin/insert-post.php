<?php
$result = false;
if(!empty($_POST)){
    $sql = "INSERT INTO blog_post (post_title, post_content, post_created_by) VALUES (:title, :content, :author);";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'title' => $_POST['inputTitle'],
        'content' => $_POST['inputContent'],
        'author' => $_POST['inputAuthor']
    ]);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>New post | Admin Panel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Posts</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
            <h2>New Post</h2>
            <p>
                <a class="btn btn-secondary" href="posts.php">Back</a>
            </p>
            <?php if($result){ ?>
                <div class="alert alert-success">Post saved!</div>
            <?php } ?>
            <form action="insert-post.php" method="POST">
                <br>
                <div class="form-group">
                    <!-- <label for="inputTitle">Title</label> -->
                    <input class="form-control" type="text" name="inputTitle" id="inputTitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <!-- <label for="inputAuthor">Author</label> -->
                    <input class="form-control" type="text" name="inputAuthor" id="inputAuthor" placeholder="Author">
                </div>
                <div class="form-group custom-file">
                    <input type="file" class="custom-file-input" id="inputImage" required>
                    <label class="custom-file-label" for="inputImage">Choose Image...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
                <br>
                <br>
                <textarea class="form-control" name="inputContent" id="inputContent" cols="30" rows="10" placeholder="Content"></textarea>
                <br>
                <input class="btn btn-primary" type="submit" value="Save">
            </form>
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut enim odit deleniti ratione aliquid magnam cupiditate autem. Voluptatem, est dolorem repellat quisquam, iste corporis eos fugit, odio distinctio ipsa accusantium.
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quisquam corrupti deserunt voluptates eaque autem consectetur, ab saepe similique modi commodi quis facere aliquid at nemo alias sint consequatur repudiandae!<br>
                    <a href="index.php">Admin panel</a>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>