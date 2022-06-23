<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\MenuModel;
use app\models\OrderedplatModel;
use app\models\PlatsModel;

// class PlatController extends Controller
// {
    
// }

class MenuController extends Controller
{
    public function MenuList(Request $request ){
        
        $plats_menu = new MenuModel();

         if($request->isPost()){

            $plats_menu->loadData($request->getBody());
            $plats_menu->getMyCommands('commands', $_POST['menu_date'],$_SESSION['user_id']) ;
            $plats_menu->loadData($plats_menu->dataList);

            if(isset($plats_menu->dataList)){
                $_SESSION['msg']='this menu already Reserved';
                Application::$app->response->redirect('/plats-menu');
            }else{
                $plats_menu->GetMenu('disponible_at',$_POST['menu_date']); 
                $plats_menu->loadData($plats_menu->dataList);
                $_SESSION['data'] = $plats_menu->dataList;
                // var_dump($plats_menu->dataList);exit;
                Application::$app->response->redirect('/plats-menu');
            }
            $this->setLayout('auth');
            return $this->render('menu-search'); 
        }
        $this->setLayout('auth');
            return $this->render('menu-search');
             
        }
        

}

