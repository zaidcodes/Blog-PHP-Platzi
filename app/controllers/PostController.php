<?php
namespace app\controllers;

use app\models\BlogPost;
use app\controllers\BaseController;

class PostController extends BaseController{
  
  public function getIndex($id){
    $blogPost = BlogPost::where('id', $id)->first();

    if ($blogPost) {
      return $this->render('post', ['blogPost' => $blogPost]);
    }

    header('Location: ' . BASE_URL);
  }

}