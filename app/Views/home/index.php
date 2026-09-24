<?php

$title = 'AVIGRO | Início';

ob_start();

?>


<!-- ========================================
     HERO
======================================== -->

<?php require_once __DIR__ . '/sections/hero.php'; ?>


<!-- ========================================
     QUEM SOMOS
======================================== -->

<?php require_once __DIR__ . '/sections/about.php'; ?>


<!-- ========================================
     NÚMEROS / ESTATÍSTICAS
======================================== -->

<?php require_once __DIR__ . '/sections/stats.php'; ?>


<!-- ========================================
     DIFERENCIAIS
======================================== -->

<?php require_once __DIR__ . '/sections/differentials.php'; ?>


<!-- ========================================
     CORTES DO FRANGO
======================================== -->

<?php require_once __DIR__ . '/sections/chicken-map.php'; ?>


<!-- ========================================
     RECEITAS
======================================== -->

<?php require_once __DIR__ . '/sections/receitas.php'; ?>


<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';