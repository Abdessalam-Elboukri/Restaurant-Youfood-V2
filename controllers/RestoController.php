<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

class RestoController extends Controller{
     public function DashboardResto(){
         $this->setLayout('main_resto');
         return $this->render('Dashboard');
     }

     
}


















