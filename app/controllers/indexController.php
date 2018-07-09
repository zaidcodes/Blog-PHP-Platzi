<?php

namespace app\controllers;

class IndexController extends BaseController{

    public function getIndex(){
        global $pdo;

        $query = $pdo->prepare('SELECT post_title, Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_image, post_content  FROM blog_post ORDER BY post_created_at DESC');
        $query->execute();
        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $this->render('index', ['blogPosts'=>$blogPosts]);
    }
}