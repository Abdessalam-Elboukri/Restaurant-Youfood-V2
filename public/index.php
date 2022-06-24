<?php

use app\controllers\AuthController;
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\MenuController;
use app\controllers\OrdersController;
use app\controllers\RestoController;
use app\controllers\PlatController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
    ];

$app = new Application(dirname(__DIR__), $config);

/******************************User Pages**********************************/

$app->router->get('/', [SiteController::class, 'home']);

$app->router->get('/vos-plats', [SiteController::class, 'YourPlats']);
$app->router->post('/vos-plats', [OrdersController::class, 'getCommands']);

$app->router->get('/plats-menu', [OrdersController::class, 'OrderPlat']);
$app->router->post('/plats-menu', [OrdersController::class, 'OrderPlat']);

/******************************Restaurant Pages**********************************/

    $app->router->get('/search-menu', [MenuController::class, 'MenuList']);
    $app->router->post('/search-menu', [MenuController::class, 'MenuList']);

    $app->router->get('/Restaurant-Dashboard', [OrdersController::class, 'countPlat']);
    $app->router->post('/Restaurant-Dashboard', [OrdersController::class, 'countPlat']);




    // *******************************AddPlat*************************************
        $app->router->get('/Restaurant-add_plats', [PlatController::class, 'SellectAllPlat']);
        $app->router->post('/Restaurant-add_plats', [PlatController::class, 'addPlat']);

        // *******************************delete*************************************
            $app->router->get('/Restaurant-add_plats/delete', [PlatController::class, 'deletePlat']);

        // *******************************update*************************************
            $app->router->get('/update_plat', [PlatController::class, 'updatePlat']);
            $app->router->post('/update_plat', [PlatController::class, 'updatePlat']);




    // *******************************Addmenu*************************************
    $app->router->get('/Restaurant_menus', [MenuController::class, 'menus']);
    $app->router->get('/Restaurant-add_menus', [PlatController::class, 'selectPlat']);
    $app->router->post('/Restaurant-add_menus', [MenuController::class, 'addMenu']);

    // // *******************************delete*************************************
        $app->router->get('/Restaurant-add_menus/delete', [MenuController::class, 'deletePlat']);

    // // *******************************update*************************************
    //     $app->router->get('/update_plat', [PlatController::class, 'updatePlat']);
    //     $app->router->post('/update_plat', [PlatController::class, 'updatePlat']);


/******************************Login Pages**********************************/

    $app->router->get('/manager-login', [AuthController::class, 'manager-login']);
    $app->router->post('/manager-login', [AuthController::class, 'manager-login']);


    $app->router->get('/login', [AuthController::class, 'login']);
    $app->router->post('/login', [AuthController::class, 'login']);


    $app->router->get('/logout', [AuthController::class, 'logout']);



$app->run();