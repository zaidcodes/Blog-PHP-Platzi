<?php

namespace app\controllers;

use Sirius\Validation\Validator;
use app\models\User;
use app\controllers\admin\UserController;

class AuthController extends BaseController{

    public function getLogin(){
        return $this->render('login');
    }
    public function postLogin(){
        $errors = [];
        $validator = new Validator();
        $validator->add('Email','required');
        $validator->add('Email','email');
        $validator->add('Password','required');

        if($validator->validate($_POST)){
            $user = User::where('email',$_POST['Email'])->first();
            if($user){
                if(password_verify($_POST['Password'],$user->password)){
                    $_SESSION['userId'] = $user->id;
                    header('Location:' . BASE_URL . 'admin');
                    return null;
                }
            }
            $validator->addMessage('Match', 'Username and/or password does not match.');
        }
        $errors = $validator->getMessages();
        return $this->render('login',[
            'errors'=> $errors
        ]);
    }

    public function getLogout(){
        unset($_SESSION['userId']);
        header('Location: ' . BASE_URL . 'auth/login');
    }

}