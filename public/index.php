<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


/* ========================================
   ARQUIVOS PRINCIPAIS
======================================== */

require_once __DIR__ . '/../app/Core/Router.php';

require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/EmpresaController.php';
require_once __DIR__ . '/../app/Controllers/CarreirasController.php';
require_once __DIR__ . '/../app/Controllers/ProdutosController.php';


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

$produtosController = new ProdutosController();


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


/* VAGA INDIVIDUAL */

$router->get('/vaga', function () use ($carreirasController) {

    $carreirasController->vaga();

});


/* PRODUTOS */

$router->get('/produtos', function () use ($produtosController) {

    $produtosController->index();

});


/* PRODUTO INDIVIDUAL */

$router->get('/produto', function () use ($produtosController) {

    $produtosController->produto();

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