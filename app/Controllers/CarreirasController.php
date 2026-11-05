<?php

class CarreirasController
{
    public function index(): void
    {
        $vagas = require __DIR__ . '/../Data/vagas.php';

        require_once __DIR__ . '/../Views/carreiras/index.php';
    }


    public function vaga(): void
    {
        $vagas = require __DIR__ . '/../Data/vagas.php';

        $id = $_GET['id'] ?? '';

        $vaga = null;

        foreach ($vagas as $item) {

            if ($item['id'] === $id) {

                $vaga = $item;

                break;
            }
        }


        if ($vaga === null) {
            http_response_code(404);
        }


        require_once __DIR__ . '/../Views/carreiras/vaga.php';
    }
}