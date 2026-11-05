<?php

class ProdutosController
{
    public function index(): void
    {
        $produtos = require __DIR__ . '/../Data/produtos.php';

        require_once __DIR__ . '/../Views/produtos/index.php';
    }


    public function produto(): void
    {
        $produtos = require __DIR__ . '/../Data/produtos.php';

        $id = $_GET['id'] ?? '';

        $produto = null;


        foreach ($produtos as $item) {

            if ($item['id'] === $id) {

                $produto = $item;

                break;
            }
        }


        if ($produto === null) {
            http_response_code(404);
        }


        require_once __DIR__ . '/../Views/produtos/produto.php';
    }
}