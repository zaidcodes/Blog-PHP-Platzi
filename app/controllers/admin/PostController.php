<?php

namespace app\controllers\admin;

use app\controllers\BaseController;
use app\models\BlogPost;

class PostController extends BaseController{

    public function getIndex(){
        $blogPosts = BlogPost::all();
        //'SELECT Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_title FROM blog_post ORDER BY post_created_at,post_created_by ASC'
        return $this->render('admin/posts', ['blogPosts'=>$blogPosts]);
    }

    public function getCreate(){
        return $this->render('admin/insert-post');
    }
    
    public function postCreate(){
        $blogPost = new BlogPost([
            'title' => $_POST['inputTitle'],
            'content' => $_POST['inputContent'],
            'created_by' => $_POST['inputAuthor']
        ]);
        $blogPost->save();
        $result = true;
        return $this->render('admin/insert-post', ['result'=>$result]);
    }


}