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
            $params = [
                'data1' => $plats_menu,
 
            ]; 
            $this->setLayout('menu');
            return $this->render('plats-menu', $params);
        }
        $params = [
            'data1' => $plats_menu,

        ]; 
        $this->setLayout('menu');
        return $this->render('plats-menu', $params);
        }
        

    // public function AddmyCommand(Request $request)
    // {
    //     $plat = new OrderedplatModel();

    //     if($request->isPost())
    //     {
            
    //         $plat->loadData($request->getBody());

    //         if ($plat->save()){ //to integrate validate method
    //             Application::$app->session->sefFlash('success', 'Your Order has been added Succsufuly for Monday');
    //             Application::$app->response->redirect('lundi-plats');
    //         }

    //     }

    //     return $this->render('lundi-plats');    
    // }

}

