<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;
use app\models\ModelLogin;
use app\models\ModelLogout;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = new ModelLogin();

        if($request->isPost()) {
            $user -> loadData($request -> getBody());
            if($user -> validate() && $user -> login()) {
                Application::$app ->response-> redirect('/');
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

    public function register(Request $request)
    {
        $user = new User();
        if($request->isPost())
        {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()){
                Application::$app->session->sefFlash('success', 'Thanks for registreing');
                Application::$app->response->redirect('/');
            }

            return $this->render('register', [
                'model' => $user
            ]);
        }
        $this->setLayout('auth');

        return $this->render('register', [
            'model' => $user
        ]);    
    }
}