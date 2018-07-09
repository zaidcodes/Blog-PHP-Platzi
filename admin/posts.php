<?php
$query = $pdo->prepare('SELECT Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_title FROM blog_post ORDER BY post_created_at,post_created_by ASC');
$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Posts | Admin Panel</title>
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
            <h2>Added Posts </h2> <br>
            <a class="btn btn-primary" href="insert-post.php">New Post</a><br>
                <table class="table">
                    <tr>
                        <th>Date</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php foreach($blogPosts as $blogPost){ ?>
                        <tr>
                            <td><?=$blogPost['post_created_at'];?></td>
                            <td><?=$blogPost['post_created_by'];?></td>
                            <td><?=$blogPost['post_title'];?></td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    <?php } ?>

                </table>
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