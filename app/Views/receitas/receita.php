<?php

$title = $receita
    ? 'AVIGRO | ' . $receita['titulo']
    : 'AVIGRO | Receita não encontrada';

ob_start();

?>

<section class="recipe-detail-page">

    <div class="container">

        <a
            href="/Site_Avigro_MVC/public/index.php?route=receitas"
            class="recipe-back">

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para receitas

        </a>


        <?php if ($receita === null): ?>


            <div class="recipe-not-found">

                <i class="fa-solid fa-utensils"></i>

                <h1>
                    Receita não encontrada
                </h1>

                <p>
                    A receita que você tentou acessar
                    não está disponível.
                </p>

            </div>


        <?php else: ?>


            <div class="recipe-detail-grid">


                <!-- IMAGEM -->

                <div class="recipe-detail-image">

                    <img
                        src="/Site_Avigro_MVC/public/assets/images/receitas/<?= rawurlencode($receita['imagem']) ?>"
                        alt="<?= htmlspecialchars($receita['titulo'], ENT_QUOTES, 'UTF-8') ?>">

                </div>


                <!-- INFORMAÇÕES -->

                <div class="recipe-detail-content">

                    <span class="recipes-page-label">
                        RECEITA AVIGRO
                    </span>


                    <h1>

                        <?= htmlspecialchars(
                            $receita['titulo'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>

                    </h1>


                    <p class="recipe-detail-description">

                        <?= htmlspecialchars(
                            $receita['descricao'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>

                    </p>


                    <div class="recipe-detail-meta">


                        <div>

                            <i class="fa-solid fa-clock"></i>

                            <span>
                                Tempo
                            </span>

                            <strong>

                                <?= htmlspecialchars(
                                    $receita['tempo'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </strong>

                        </div>


                        <div>

                            <i class="fa-solid fa-user-group"></i>

                            <span>
                                Rendimento
                            </span>

                            <strong>

                                <?= htmlspecialchars(
                                    $receita['rendimento'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </strong>

                        </div>


                        <div>

                            <i class="fa-solid fa-signal"></i>

                            <span>
                                Dificuldade
                            </span>

                            <strong>

                                <?= htmlspecialchars(
                                    $receita['dificuldade'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </strong>

                        </div>


                    </div>

                </div>

            </div>


            <!-- RECEITA -->

            <div class="recipe-preparation-grid">


                <!-- INGREDIENTES -->

                <section class="recipe-ingredients">

                    <span class="recipes-page-label">
                        INGREDIENTES
                    </span>

                    <h2>
                        O que você vai precisar
                    </h2>


                    <ul>

                        <?php foreach ($receita['ingredientes'] as $ingrediente): ?>

                            <li>

                                <?= htmlspecialchars(
                                    $ingrediente,
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                </section>


                <!-- MODO DE PREPARO -->

                <section class="recipe-method">

                    <span class="recipes-page-label">
                        MODO DE PREPARO
                    </span>

                    <h2>
                        Como preparar
                    </h2>


                    <?php foreach ($receita['preparo'] as $indice => $passo): ?>

                        <div class="recipe-step">


                            <span>

                                <?= str_pad(
                                    (string)($indice + 1),
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                ) ?>

                            </span>


                            <p>

                                <?= htmlspecialchars(
                                    $passo,
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </p>


                        </div>

                    <?php endforeach; ?>


                </section>

            </div>


        <?php endif; ?>

    </div>

</section>


<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';
