<?php
namespace app\controllers\admin;

use app\controllers\BaseController;

class IndexController extends BaseController{

    function getIndex(){
        return $this->render('admin/index');
    }

}