
<?php

class SocialController
{
    public function index(): void
    {
        $acoes = require __DIR__ . '/../Data/acoes-sociais.php';

        require __DIR__ . '/../Views/social/index.php';
    }

    public function acao(): void
    {
        $acoes = require __DIR__ . '/../Data/acoes-sociais.php';
        $id = $_GET['id'] ?? '';

        $acao = null;

        foreach ($acoes as $item) {
            if ($item['id'] === $id) {
                $acao = $item;
                break;
            }
        }

        if ($acao === null) {
            http_response_code(404);
        }

        require __DIR__ . '/../Views/social/acao.php';
    }
}
