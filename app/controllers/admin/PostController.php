<?php

namespace app\controllers\admin;

use app\controllers\BaseController;

class PostController extends BaseController{

    public function getIndex(){
        global $pdo;

        $query = $pdo->prepare('SELECT Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_title FROM blog_post ORDER BY post_created_at,post_created_by ASC');
        $query->execute();
        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $this->render('admin/posts', ['blogPosts'=>$blogPosts]);
    }

    public function getCreate(){
        return $this->render('admin/insert-post');
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
        return $this->render('admin/insert-post', ['result'=>$result]);
    }


}