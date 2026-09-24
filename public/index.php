<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/EmpresaController.php';
require_once __DIR__ . '/../app/Controllers/CarreirasController.php';

/* ========================================
   ROUTER
======================================== */

$router = new Router();


/* ========================================
   CONTROLLERS
======================================== */

$homeController = new HomeController();

$empresaController = new EmpresaController();

$carreirasController = new CarreirasController();


/* ========================================
   ROTAS
======================================== */


/* HOME */

$router->get('/', function () use ($homeController) {

    $homeController->index();

});


/* EMPRESA */

$router->get('/empresa', function () use ($empresaController) {

    $empresaController->index();

});


/* TRABALHE CONOSCO */

$router->get('/trabalhe-conosco', function () use ($carreirasController) {

    $carreirasController->index();

});


/* PÁGINA INDIVIDUAL DA VAGA */

$router->get('/vaga', function () use ($carreirasController) {

    $carreirasController->vaga();

});


/* ========================================
   IDENTIFICA A ROTA
======================================== */

$route = $_GET['route'] ?? '/';


if ($route !== '/') {

    $route = '/' . trim($route, '/');

}


/* ========================================
   EXECUTA A ROTA
======================================== */

$router->dispatch(
    $route,
    $_SERVER['REQUEST_METHOD']
);