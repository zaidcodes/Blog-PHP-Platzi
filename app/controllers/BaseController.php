<?php

namespace app\controllers;

use Twig_Loader_Filesystem;

class BaseController{

    protected $templateEngine;

    public function __construct(){
        $loader = new Twig_Loader_Filesystem('../views');
        $this->$templateEngine = new \Twig_Enviroment($loader, [
            'debug' => true,
            'cache' => false
        ]);
    }

    public function render($fileName, $data = []){
        return $this->templateEngine->render($fileName,$data);
    }
}