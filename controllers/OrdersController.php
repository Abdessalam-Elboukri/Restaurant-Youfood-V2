<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\OrdersModel;
use app\models\PlatsModel;

class OrdersController extends Controller
{

    public function OrderPlat(Request $request)
    {
        $order = new OrdersModel();
        if ($request->isPost()) {
            $order->loadData($request->getBody());
            if ($order->save()) {
                Application::$app->response->redirect('/vos-plats');
            }
        }
        $this->setLayout('menu');
        return $this->render('plats-menu');
    }

    public function getCommands(Request $request)
    {
        $command = new OrdersModel();
        if ($request->isPost()) {
            $command->loadData($request->getBody());
            $command->getMyCommands('commands', $_POST['date_c'], $_SESSION['user_id']);
            $command->loadData($command->dataList);
            var_dump($command->dataList);
            $_SESSION['command'] = $command->dataList;
            $params = [
                'data1' => $command->dataList
            ];
            return $this->render('vos-plats', $params);
        }
    }

    public function countPlat(Request $request)
    {
        $entree = [];
        $plat_principal = [];
        $dessert = [];
        $quantity=[];
        $commande = new OrdersModel();
        
        if ($request->isPost()) {
            $date = $_POST["date"];
            if ($commande->countGroup('entre', 'menu_date', $date)) {
                $entree = $commande->dataList;
            }
            if ($commande->countGroup('plat', 'menu_date', $date)) {
                $plat_principal = $commande->dataList;
            }
            if ($commande->countGroup('dessert', 'menu_date', $date)) {
                $dessert = $commande->dataList;
            }
            if ($commande->count('dessert', 'menu_date', $date)) {
                            $quantity = $commande->dataList;
            }
            if (isset($entree) && isset($plat_principal) && isset($dessert)  && isset($quantity)) {
                $this->setLayout('main_resto');
                return $this->render(
                    'Dashboard',
                    [
                        'entrees' => $entree, 'plats' => $plat_principal, 'desserts' => $dessert, 'quantites' => $quantity
                    ]
                );
            }
        }

        if($request->isGet())
        {
            $this->setLayout('main_resto');
            return $this->render('Dashboard');
        }
    }


}
