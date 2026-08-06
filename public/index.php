<?php

require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';

$router = new Router();

$homeController = new HomeController();

$router->get('/', function () use ($homeController) {
    $homeController->index();
});

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$basePath = '/Site_Avigro_MVC/public';

$uri = str_replace($basePath, '', $uri);

$uri = $uri ?: '/';

$router->dispatch($uri, $_SERVER['REQUEST_METHOD']);