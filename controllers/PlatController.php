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
                $plat->dataList = null;
            }

            $this->setLayout('main_resto');
            return  $this->render('update_plat',
            ['model' => $plat]);
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
            $id='Entree';
            $col='cat_plat';
            $plat = new PlatsModel();
            if($request->isGet()){
                
                if($plat->Get($col, $id,['nom_plat'])){
                    //  echo '<pre>';
                    // var_dump($plat);
                    // echo '<pre>';
                    // exit;
                    $this->setLayout('main_resto');
                    return $this->render('add_menu',
                    [
                        'plats' => $plat->dataList
                    ]);
            }
            }
    
        }
        


   
}

