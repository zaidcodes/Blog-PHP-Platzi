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
    public function getCreate(){
        return  $this->render('admin/insert-user');
    }
    public function postCreate(){
        $errors = [];
        $result = false;
        $validator = new Validator();
        $validator->add('Name','required');
        $validator->add('Lastname','required');
        $validator->add('Email','required');
        $validator->add('Email','email');
        $validator->add('Nickname','required');
        $validator->add('Password','required');
        $validator->add('Repeat-Password','required | match(item=Password)');
        
        if ($validator->validate($_POST)) {
            $user = new User();
            $user->name = $_POST['Name'];
            $user->lastname = $_POST['Lastname'];
            $user->email = $_POST['Email'];
            $user->nickname = $_POST['Nickname'];
            $user->password = password_hash($_POST['Password'],PASSWORD_DEFAULT);
            $user->save();
            $result = true;
        } else{
            $errors = $validator->getMessages();
        }

        return $this->render('admin/insert-user', [
            'result'=> $result,
            'errors'=> $errors
        ]);
    }
}