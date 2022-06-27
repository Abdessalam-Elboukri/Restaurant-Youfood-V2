<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\MenuModel;
use app\models\OrderedplatModel;
use app\models\PlatsModel;
use PDO;
use PDOException;



class MenuController extends Controller
{
    public function MenuList(Request $request )
    {
        
     $data=[];
     
        $plats_menu = new MenuModel();

         if($request->isPost()){
            
            $plats_menu->loadData($request->getBody());
            $plats_menu->getMyCommands('commands', $_POST['menu_date'],$_SESSION['user_id']) ;
            $plats_menu->loadData($plats_menu->dataList);
            
            if(!empty($plats_menu->dataList)){
                $_SESSION['msg'] = $_POST['menu_date'];
                $this->setLayout('menu');
                return $this->render('menu-search');
                
            }

            $plats_menu->Get('disponible_at',$_POST['menu_date']); 
            $plats_menu->loadData($plats_menu->dataList);
            // $data = $plats_menu->dataList
            $_SESSION['data'] = $plats_menu->dataList;
            Application::$app->response->redirect('/plats-menu');
        }

        elseif ($_SESSION['user_role'] == 'student'){
        $this->setLayout('menu');
            return $this->render('menu-search');
        }else{
            Application::$app->response->redirect('/Restaurant-Dashboard');
        }
        }

        public function addMenu(Request $request)
        {
            $menu = new MenuModel();

            if($request->isPost()){
                $menu->loadData($request->getBody());
                
                try
                {   $menu->save();
                    Application::$app->response->redirect('/Restaurant_menus');
                }
                catch(PDOException $e)
                {
                    $_SESSION['errorMenu']= 'La date que vous avez selectionez est déjà rempli';
                    
                    Application::$app->response->redirect('/Restaurant-add_menus');
                    
                }
            }
    
        }

        public function deletePlat(Request $request)
        {
            $id = $_GET['id'] ;
            $col= 'id_menu';
            $menu = new MenuModel();
                if($request->isGet())
                {
                    if($menu->deleteMenu($id, $col))
                    {
                    Application::$app->response->redirect('/Restaurant_menus');  
                    }
                }
        }


        public function menus(Request $request)
        {
            if( ($request->isGet()) && ($_SESSION['user_role'] == 'resto')){
               
            
            $menu = new MenuModel();
           

                $menu->loadData($request->getBody());
                if($menu->selectAll()){
                    $this->setLayout('main_resto');
                    return $this->render('menu', 
                    [
                        'menus' => $menu->dataList
                    ]);
                }
            }
            else{
            Application::$app->response->redirect('/');  
        }
        }
        
        
        
        

}

