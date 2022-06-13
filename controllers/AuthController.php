<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{


    public function managerLogin()
    {
        $this->setLayout('auth');
        return $this->render('manager-login');
    }



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
}