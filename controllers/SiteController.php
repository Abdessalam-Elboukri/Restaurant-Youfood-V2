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
    public function YourPlats()
    {
        if( $_SESSION['user_role'] == 'student'){
        return $this->render('vos-plats');
        }else{
            Application::$app->response->redirect('/not_found');  
        }
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