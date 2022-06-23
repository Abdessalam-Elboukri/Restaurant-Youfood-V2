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
                Application::$app->response->redirect('/vos-plats');
                exit;
            }  
        } 
        if($request->isGet() && !empty($_SESSION['data']))
        {
            $this->setLayout('menu');
            return $this->render('plats-menu');   
        }
        Application::$app->response->redirect('/search-menu');
    }
    
    public function getCommands(Request $request){
        $command = new OrdersModel();
        if($request ->isPost())
        {
            $command->loadData($request->getBody());
            $command ->getMyCommands('commands', $_POST['date_c'],$_SESSION['user_id'] );
            $command->loadData($command->dataList);
            var_dump($command->dataList);
            $_SESSION['command'] = $command->dataList ;
            $params = [
                'data1' => $command->dataList
            ]; 
            return $this->render('vos-plats', $params);
        }
    }
}