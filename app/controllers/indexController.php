<?php

namespace app\controllers;
use app\models\BlogPost;

class IndexController extends BaseController{

    public function getIndex(){
        $blogPosts = BlogPost::query()->orderBy('created_at','DESC')->get();
        //'SELECT post_title, Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_image, post_content  FROM blog_post ORDER BY post_created_at DESC'
        return $this->render('index', ['blogPosts'=>$blogPosts]);
    }
}