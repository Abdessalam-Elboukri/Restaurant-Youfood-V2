<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

class RestoController extends Controller{
     public function DashboardResto(){
        if ($_SESSION['user_role'] == 'resto'){
            $this->setLayout('main_resto');
         return $this->render('Dashboard');
        }else{
            Application::$app->response->redirect('/');
        }
         
     }

     
}


















