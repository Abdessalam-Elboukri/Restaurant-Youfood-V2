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


$app->router->get('/', [new SiteController(), 'home']);

$app->router->get('/vos-plats', [new SiteController(), 'YourPlats']);
$app->router->post('/vos-plats', [OrdersController::class, 'getCommands']);

$app->router->get('/plats-menu', [OrdersController::class, 'OrderPlat']);
$app->router->post('/plats-menu', [OrdersController::class, 'OrderPlat']);

/******************************Restaurant Pages**********************************/

$app->router->get('/search-menu', [MenuController::class, 'MenuList']);
$app->router->post('/search-menu', [MenuController::class, 'MenuList']);

$app->router->get('/Restaurant-Dashboard', [RestoController::class, 'DashboardResto']);
$app->router->get('/Restaurant-add_plats', [PlatController::class, 'SellectAllPlat']);
$app->router->get('/Restaurant-add_plats/delete', [PlatController::class, 'deletePlat']);
$app->router->post('/Restaurant-add_plats', [PlatController::class, 'addPlat']);


$app->router->get('/manager-login', [AuthController::class, 'manager-login']);
$app->router->post('/manager-login', [AuthController::class, 'manager-login']);


$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

// $app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/logout', [AuthController::class, 'logout']);



$app->run();