<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\MenuModel;
use app\models\OrderedplatModel;

class MenuController extends Controller
{
    public function MenuList(Request $request ){
        
        $plats_menu = new MenuModel();
         if($request->isPost()){
            $plats_menu->loadData($request->getBody());
            $plats_menu->GetMenu('disponible_at',$_POST['date_menu']); 
            $plats_menu->loadData($plats_menu->dataList);
            $_SESSION['data'] = $plats_menu->dataList;
            Application::$app->response->redirect('/plats-menu');

            $this->setLayout('auth');
            return $this->render('menu-search');  
        }
        $this->setLayout('auth');
        return $this->render('menu-search');
        }
        

}

