<?php

namespace app\controllers;
use app\models\BlogPost;

class IndexController extends BaseController{

    public function getIndex($page = 1){

        $limit = 5;
        
        $totalReg = BlogPost::all()->count();
        $totalPages = ceil($totalReg / $limit);
        $skip = ($limit * $page ) - $limit;

        $blogPosts = BlogPost::query()->orderBy('created_at','DESC')->skip($skip)->take($limit)->get();

        return $this->render('index', [
        	'blogPosts' => $blogPosts,
        	'totalPages' => $totalPages,
        	'page' => $page
        ]);
    }
}