<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\PlatsModel;

class MardiPlatsController extends Controller
{


    public function MenuList(Request $request ){
        $plats_entree = new PlatsModel();
        $plats_principale = new PlatsModel();
        $plats_dessert = new PlatsModel();
         
            $plats_entree->loadData($request->getBody());

            $plats_entree->selectType('entrer','mardi');
            $plats_principale->selectType('principale', 'mardi');
            $plats_dessert->selectType('dessert', 'mardi');

            $plats_entree->loadData($plats_entree->dataList);
            $plats_principale->loadData($plats_entree->dataList);
            $plats_dessert->loadData($plats_entree->dataList);
            $params = [
                'plats_entree' => $plats_entree,
                'plats_principale' => $plats_principale ,
                'plats_dessert' => $plats_dessert  
            ]; 
            $this->setLayout('menu');
            return $this->render('mardi-plats', $params);

        }
   
}

