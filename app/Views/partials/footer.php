<?php

$title = 'AVIGRO | Início';

ob_start();

?>

<section>

    <h1>AVIGRO</h1>

    <p>Novo portal institucional.</p>

</section>

<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';