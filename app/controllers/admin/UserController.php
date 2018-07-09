<?php

namespace app\controllers\admin;

use app\controllers\BaseController;
use app\models\User;
use Sirius\Validation\Validator;

class UserController extends BaseController{

    public function getIndex(){
        $users = User::all();
        return  $this->render('admin/users',[
            'users'=>$users
        ]);
    }

}