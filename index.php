<?php
include_once 'config.php';

$query = $pdo->prepare('SELECT post_title, Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_image, post_content  FROM blog_post ORDER BY post_created_at DESC');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Blog | PHP | Platzi</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog en Platzi con PHP</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($blogPosts as $blogPost) { ?>
                    <div class="blog-post">
                        <h2 class="post-title"><?=$blogPost['post_title'];?></h2>
                        <p><?=$blogPost['post_created_at'];?> by <a href=""><?=$blogPost['post_created_by'];?></a></p>
                        <div class="blog-post-image">
                            <img src="<?=$blogPost['post_image'];?>" alt="Image-post">
                        </div>
                        <div class="blog-post-content">
                        <?=$blogPost['post_content'];?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut enim odit deleniti ratione aliquid magnam cupiditate autem. Voluptatem, est dolorem repellat quisquam, iste corporis eos fugit, odio distinctio ipsa accusantium.
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quisquam corrupti deserunt voluptates eaque autem consectetur, ab saepe similique modi commodi quis facere aliquid at nemo alias sint consequatur repudiandae!<br>
                    <a href="admin/index.php">Admin panel</a>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>