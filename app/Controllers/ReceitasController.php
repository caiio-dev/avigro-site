<?php

class ReceitasController
{
    public function index(): void
    {
        $receitas = require __DIR__ . '/../Data/receitas.php';

        require_once __DIR__ . '/../Views/receitas/index.php';
    }

    public function receita(): void
    {
        $receitas = require __DIR__ . '/../Data/receitas.php';

        $id = $_GET['id'] ?? '';
        $receita = null;

        foreach ($receitas as $item) {
            if ($item['id'] === $id) {
                $receita = $item;
                break;
            }
        }

        if ($receita === null) {
            http_response_code(404);
        }

        require_once __DIR__ . '/../Views/receitas/receita.php';
    }
}