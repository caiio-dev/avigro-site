<?php

class ProdutosController
{
    public function index(): void
    {
        require_once __DIR__ . '/../Views/produtos/index.php';
    }

    public function produto(): void
    {
        require_once __DIR__ . '/../Views/produtos/produto.php';
    }
}