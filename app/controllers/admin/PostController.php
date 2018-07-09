<?php

namespace app\controllers\admin;

use app\controllers\BaseController;
use app\models\BlogPost;
use Sirius\Validation\Validator;

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
        $errors = [];
        $result = false;
        $validator = new Validator();
        $validator->add('Title','required');
        $validator->add('Content','required');
        $validator->add('Author','required');

        if ($validator->validate($_POST)) {
            $blogPost = new BlogPost([
                'title' => $_POST['Title'],
                'content' => $_POST['Content'],
                'created_by' => $_POST['Author']
            ]);
            $blogPost->save();
            $result = true;
        } else{
            $errors = $validator->getMessages();
        }

        return $this->render('admin/insert-post', [
            'result'=> $result,
            'errors'=> $errors
        ]);
    }


}