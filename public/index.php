<?php

require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/EmpresaController.php';

$router = new Router();

$homeController = new HomeController();
$empresaController = new EmpresaController();


/* ========================================
   ROTAS
======================================== */

$router->get('/', function () use ($homeController) {
    $homeController->index();
});

$router->get('/empresa', function () use ($empresaController) {
    $empresaController->index();
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

$router->dispatch($route, $_SERVER['REQUEST_METHOD']);