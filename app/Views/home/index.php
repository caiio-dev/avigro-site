<?php

$title = 'AVIGRO | Início';

ob_start();

?>

<?php require_once __DIR__ . '/sections/hero.php'; ?>

<?php require_once __DIR__ . '/sections/about.php'; ?>

<?php require_once __DIR__ . '/sections/stats.php'; ?>

<?php require_once __DIR__ . '/sections/differentials.php'; ?>

<?php require_once __DIR__ . '/sections/chicken-map.php'; ?>

<?php require_once __DIR__ . '/sections/receitas.php'; ?>

<?php require_once __DIR__ . '/sections/products.php'; ?>




<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';