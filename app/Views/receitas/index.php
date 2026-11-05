<?php

$title = 'AVIGRO | Receitas';

ob_start();

?>

<section class="recipes-page-hero">

    <div class="container">

        <span class="recipes-page-label">
            RECEITAS AVIGRO
        </span>

        <h1>
            Sabores para todos
            os momentos.
        </h1>

        <p>
            Inspire-se com receitas práticas e saborosas
            preparadas com produtos AVIGRO.
        </p>

    </div>

</section>


<section class="recipes-catalog">

    <div class="container">

        <div class="recipes-catalog-header">

            <span class="recipes-page-label">
                INSPIRE-SE
            </span>

            <h2>
                Encontre sua próxima receita
            </h2>

            <p>
                Ideias para deixar seus momentos
                ainda mais saborosos.
            </p>

        </div>


        <!-- FILTROS -->

        <div class="recipes-filters">

            <button
                type="button"
                class="recipe-filter active"
                data-filter="todos">
                Todas
            </button>

            <button
                type="button"
                class="recipe-filter"
                data-filter="assados">
                Assados
            </button>

            <button
                type="button"
                class="recipe-filter"
                data-filter="fritos">
                Fritos
            </button>

            <button
                type="button"
                class="recipe-filter"
                data-filter="especiais">
                Especiais
            </button>

            <button
                type="button"
                class="recipe-filter"
                data-filter="churrasco">
                Churrasco
            </button>

        </div>


        <!-- CARDS -->

        <div class="recipes-page-grid">

            <?php foreach ($receitas as $receita): ?>

                <article
                    class="recipe-page-card"
                    data-category="<?= htmlspecialchars($receita['categoria'], ENT_QUOTES, 'UTF-8') ?>">

                    <div class="recipe-page-image">

                        <!-- POR ENQUANTO SEM IMAGEM -->

                        <img
                            src="/Site_Avigro_MVC/public/assets/images/receitas/<?= rawurlencode($receita['imagem']) ?>"
                            alt="<?= htmlspecialchars($receita['titulo'], ENT_QUOTES, 'UTF-8') ?>">

                    </div>


                    <div class="recipe-page-content">

                        <span class="recipe-page-category">

                            <?= htmlspecialchars(
                                $receita['categoria_nome'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>

                        </span>


                        <h3>

                            <?= htmlspecialchars(
                                $receita['titulo'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>

                        </h3>


                        <p>

                            <?= htmlspecialchars(
                                $receita['descricao'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>

                        </p>


                        <a
                            href="/Site_Avigro_MVC/public/index.php?route=receita&amp;id=<?= urlencode($receita['id']) ?>"
                            class="recipe-page-button">

                            Ver receita

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';
