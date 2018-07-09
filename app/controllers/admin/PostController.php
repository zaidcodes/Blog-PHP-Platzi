<?php

namespace app\controllers\admin;

class PostController{

    public function getIndex(){
        global $pdo;

        $query = $pdo->prepare('SELECT Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_title FROM blog_post ORDER BY post_created_at,post_created_by ASC');
        $query->execute();
        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
        return render('../views/admin/posts.php', ['blogPosts'=>$blogPosts]);
    }

    public function getCreate(){
        return render('../views/admin/insert-post.php');
    }
    
    public function postCreate(){
        global $pdo;

        $result = false;
        $sql = "INSERT INTO blog_post (post_title, post_content, post_created_by) VALUES (:title, :content, :author);";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'title' => $_POST['inputTitle'],
            'content' => $_POST['inputContent'],
            'author' => $_POST['inputAuthor']
        ]);
        return render('../views/admin/insert-post.php', ['result'=>$result]);
    }


}