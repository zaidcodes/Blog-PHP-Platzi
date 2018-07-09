<?php
namespace app\controllers\admin;

use app\controllers\BaseController;
use app\models\User;

class IndexController extends BaseController{

    function getIndex(){
        if(isset($_SESSION['userId'])){
            $userId = $_SESSION['userId'];
            $user = User::find($userId);

            if($user){
                return $this->render('admin/index');
            }

        }
        header('Location: ' . BASE_URL . 'auth/login');
    }

}