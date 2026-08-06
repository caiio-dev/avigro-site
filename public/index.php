<?php

require_once __DIR__ . '/../app/Core/Router.php';

$router = new Router();

$router->get('/', function () {
    echo "AVIGRO - MVC funcionando!";
});

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$basePath = '/Site_Avigro_MVC/public';

$uri = str_replace($basePath, '', $uri);

$uri = $uri ?: '/';

$router->dispatch($uri, $_SERVER['REQUEST_METHOD']);