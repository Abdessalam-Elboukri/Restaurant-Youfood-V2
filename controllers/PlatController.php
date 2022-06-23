<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\PlatsModel;

// class PlatController extends Controller
// {
    
// }

class PlatController extends Controller
{


    public function addPlat(Request $request)
    {
        $plat = new PlatsModel();

        if($request->isPost())
        {
            $plat->loadData($request->getBody());
            if($plat->save()){
                Application::$app->response->redirect('/Restaurant-add_plats');
            }
        }
      
    }


    public function SellectAllPlat(Request $request)
    {
        $plat = new PlatsModel();
            if($plat->selectAll()){
                $params=[
                    'plats' => $plat->dataList
                ];

                $this->setLayout('main_resto');
                return $this->render('add_plat', $params);
            }
            
    }

    public function deletePlat(Request $request)
    {
        $id = $_GET['id'] ;
        $col= 'id_plat';
        $plat = new PlatsModel();
            if($request->isGet())
            {
                if($plat->delete($id, $col))
                {
                Application::$app->response->redirect('/Restaurant-add_plats');  
                }
            }
    }


    public function updatePlat(Request $request)
    {
        $id = $_GET['id'] ;
        $col= 'id_plat';
        $plat = new PlatsModel();
        if($request->isGet()){
            if($plat->select($id, $col)){        
                $plat->loadData($plat->dataList);
                if($plat->dataList)
                {
                    $plat->dataList = null;
                    $this->setLayout('main_resto');
                    return  $this->render('update_plat',
                    ['model' => $plat]);
                }
            Application::$app->response->redirect('/Restaurant-add_plats');
            
            }

            Application::$app->response->redirect('/Restaurant-add_plats');

            
        }

        if($request->isPost()){
           
            $plat->loadData($request->getBody());
           
            if($plat->validate() && $plat->updatePlat($id, $col)){
               
                Application::$app->session->sefFlash('success', 'Thanks for updating Student');
                Application::$app->response->redirect('/Restaurant-add_plats');
            }

            
            
            
            $this->setLayout('main_resto');
            return  $this->render('update_plat',
            ['model' => $plat]);

           
        }


           
    }

    public function selectPlat(Request $request)
        {
            $entree=[];
            $plat_principal = [];
            $dessert =[];
            
            $plat = new PlatsModel();

            if($request->isGet())
            {
                if($plat->Get('cat_plat', 'entree',['nom_plat'])){
                    $entree = $plat->dataList;
                }
                if($plat->Get('cat_plat', 'plat principal',['nom_plat'])){
                    $plat_principal = $plat->dataList;
                }
                if($plat->Get('cat_plat', 'dessert',['nom_plat'])){
                    $dessert = $plat->dataList;
                }
                if(isset($entree) && isset($plat_principal) && isset($dessert))
                {
                    $this->setLayout('main_resto');
                            return $this->render('add_menu',
                            [
                                'entrees' => $entree , 'plats' => $plat_principal, 'desserts' => $dessert  
                            ]); 
                }
            }
    
        }
        


   
}

