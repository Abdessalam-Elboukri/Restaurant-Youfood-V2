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
            $this->setLayout('main_resto');
            return $this->render('add_plats');
        }
      
    }


    public function SellectAllPlat(Request $request)
    {
        $plat = new PlatsModel();
            if($plat->selectAll()){
                $plat->loadData($request->getBody());
                $plat->loadData($plat->dataList);
                // var_dump($plat); exit;
                $params=[
                    'plats' => $plat->dataList
                ];

                $this->setLayout('main_resto');
                return $this->render('add_plat', $params);
            }
            
    }

}

