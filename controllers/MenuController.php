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
        
     $data=[];
     
        $plats_menu = new MenuModel();

         if($request->isPost()){
            
            $plats_menu->loadData($request->getBody());
            $plats_menu->getMyCommands('commands', $_POST['menu_date'],$_SESSION['user_id']) ;
            $plats_menu->loadData($plats_menu->dataList);
            
            if(!empty($plats_menu->dataList)){
                $_SESSION['msg']='this menu already Reserved';
                $this->setLayout('menu');
                return $this->render('menu-search');
            }

            $plats_menu->GetMenu('disponible_at',$_POST['menu_date']); 
            $_SESSION['data'] = $plats_menu->dataList;
            Application::$app->response->redirect('/plats-menu');
        }
        if ($_SESSION['user_role'] == 'student'){
        $this->setLayout('menu');
            return $this->render('menu-search');
        }else{
            Application::$app->response->redirect('/not_found');
        }
        }
        

}

