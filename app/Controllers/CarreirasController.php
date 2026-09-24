<?php

class CarreirasController
{
    public function index(): void
    {
        require_once __DIR__ . '/../Views/carreiras/index.php';
    }

    public function vaga(): void
    {
        require_once __DIR__ . '/../Views/carreiras/vaga.php';
    }
}