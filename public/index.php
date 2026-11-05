<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


require_once __DIR__ . '/../app/Core/Router.php';

require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/EmpresaController.php';
require_once __DIR__ . '/../app/Controllers/CarreirasController.php';
require_once __DIR__ . '/../app/Controllers/ProdutosController.php';
require_once __DIR__ . '/../app/Controllers/ReceitasController.php';
require_once __DIR__ . '/../app/Controllers/SocialController.php';

$router = new Router();


$homeController = new HomeController();
$empresaController = new EmpresaController();
$carreirasController = new CarreirasController();
$produtosController = new ProdutosController();
$receitasController = new ReceitasController();
$socialController = new SocialController();

/* ========================================
   HOME
======================================== */

$router->get('/', function () use ($homeController) {
    $homeController->index();
});


/* ========================================
   EMPRESA
======================================== */

$router->get('/empresa', function () use ($empresaController) {
    $empresaController->index();
});


/* ========================================
   TRABALHE CONOSCO
======================================== */

$router->get('/trabalhe-conosco', function () use ($carreirasController) {
    $carreirasController->index();
});


$router->get('/vaga', function () use ($carreirasController) {
    $carreirasController->vaga();
});


/* ========================================
   PRODUTOS
======================================== */

$router->get('/produtos', function () use ($produtosController) {
    $produtosController->index();
});


$router->get('/produto', function () use ($produtosController) {
    $produtosController->produto();
});


/* ========================================
   RECEITAS
======================================== */

$router->get('/receitas', function () use ($receitasController) {
    $receitasController->index();
});


$router->get('/receita', function () use ($receitasController) {
    $receitasController->receita();
});


/* ========================================
   IDENTIFICA A ROTA
======================================== */

$route = $_GET['route'] ?? '/';

if ($route !== '/') {
    $route = '/' . trim($route, '/');
}


/* ========================================
   EXECUTA
======================================== */


$router->get('/social', function () use ($socialController) {
    $socialController->index();
});

$router->get('/acao-social', function () use ($socialController) {
    $socialController->acao();
});


$router->dispatch(
    $route,
    $_SERVER['REQUEST_METHOD']
);