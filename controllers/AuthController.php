<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;
use app\models\ModelLogin;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = new ModelLogin();

        if($request->isPost()) {
            $user -> loadData($request -> getBody());
            if($user -> validate() && $user -> login()) {
                if( $_SESSION['user_role'] == 'student'){
                    Application::$app ->response-> redirect('/');
                }elseif($_SESSION['user_role'] == 'resto'){
                    Application::$app ->response-> redirect('/Restaurant-Dashboard');
                }elseif($_SESSION['user_role'] == 'admin'){
                    Application::$app ->response-> redirect('/Restaurant-Dashboard');
                }else{
                    Application::$app ->response-> redirect('/not_found');
                }
                
            }
        }

        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $user
        ]);
    }

    public function logout()
    {
        unset($_SESSION['user_fname']);
        unset($_SESSION['user_lname']);
        unset($_SESSION['user_picture']);
        unset($_SESSION['user_role']);
        session_destroy();
        var_dump($_SESSION['user_fname']);
        Application::$app->response->redirect('/');
    }


}