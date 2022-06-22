<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\OrdersModel;

class OrdersController extends Controller
{

    public function OrderPlat(Request $request)
    {
        $order = new OrdersModel();

        if($request->isPost())
        {
            $order->loadData($request->getBody());

            if ($order->save()){
                Application::$app->response->redirect('/plats-menu');
            }   
        } 
        
        $this->setLayout('menu');
        return $this->render('plats-menu');
    }
    
     
}

