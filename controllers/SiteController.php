<?php 

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {
        return $this->render('home');
    }
    public function PlatsSemaine()
    {
        return $this->render('plats-de-semaine');
    }
    public function YourPlats()
    {
        return $this->render('vos-plats');
    }
    public function OrderPlat()
    {
        return $this->render('plats-menu');
    }
    

    
    // public function handleContact(Request $request)
    // {
    //     $body = $request->getBody();
    //     echo "<pre>";
    //     var_dump($body);
    //     echo "</pre>";
    //     exit;
    //     return 'Handling submitted data';
    // }
}