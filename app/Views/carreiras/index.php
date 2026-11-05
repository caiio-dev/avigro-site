<?php

$title = 'AVIGRO | Trabalhe Conosco';

ob_start();

?>


<!-- ========================================
     HERO
======================================== -->

<section class="careers-hero">

    <div class="container">

        <span class="careers-label">
            TRABALHE CONOSCO
        </span>

        <h1>
            Faça parte da nossa história.
        </h1>

        <p>
            Conheça nossas oportunidades e venha
            construir novos caminhos com a AVIGRO.
        </p>

    </div>

</section>


<!-- ========================================
     INTRODUÇÃO
======================================== -->

<section class="careers-intro">

    <div class="container careers-intro-grid">


        <div class="careers-intro-content">

            <span class="careers-label">
                CARREIRAS
            </span>

            <h2>
                Pessoas fazem a diferença.
            </h2>

            <p>
                Na AVIGRO, acreditamos que bons resultados
                são construídos por pessoas comprometidas,
                responsáveis e dispostas a crescer juntas.
            </p>

            <p>
                Confira abaixo as oportunidades disponíveis
                e encontre a vaga que combina com você.
            </p>

        </div>


        <div class="careers-intro-icon">

            <i class="fa-solid fa-people-group"></i>

            <span>
                AVIGRO
            </span>

        </div>


    </div>

</section>


<!-- ========================================
     VAGAS
======================================== -->

<section class="careers-jobs">

    <div class="container">


        <div class="careers-section-header">

            <span class="careers-label">
                OPORTUNIDADES
            </span>

            <h2>
                Vagas disponíveis
            </h2>

            <p>
                Confira as oportunidades abertas
                atualmente na AVIGRO.
            </p>

        </div>


        <?php if (empty($vagas)): ?>


            <!-- ========================================
                 SEM VAGAS
            ======================================== -->

            <div class="careers-empty">

                <div class="careers-empty-icon">

                    <i class="fa-solid fa-briefcase"></i>

                </div>

                <h3>
                    Nenhuma vaga disponível no momento
                </h3>

                <p>
                    Novas oportunidades serão publicadas
                    nesta página assim que estiverem disponíveis.
                </p>

                <span class="careers-empty-message">

                    Acompanhe nosso site para conferir
                    futuras oportunidades.

                </span>

            </div>


        <?php else: ?>


            <!-- ========================================
                 GRID DE VAGAS
            ======================================== -->

            <div class="careers-grid">


                <?php foreach ($vagas as $vaga): ?>


                    <article class="career-card">


                        <div class="career-card-top">


                            <div class="career-card-icon">

                                <i class="fa-solid fa-briefcase"></i>

                            </div>


                            <span class="career-card-sector">

                                <?= htmlspecialchars(
                                    $vaga['setor'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </span>


                        </div>


                        <h3>

                            <?= htmlspecialchars(
                                $vaga['titulo'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>

                        </h3>


                        <p>

                            <?= htmlspecialchars(
                                $vaga['resumo'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>

                        </p>


                        <div class="career-card-info">


                            <span>

                                <i class="fa-solid fa-location-dot"></i>

                                <?= htmlspecialchars(
                                    $vaga['local'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </span>


                            <span>

                                <i class="fa-solid fa-building"></i>

                                <?= htmlspecialchars(
                                    $vaga['tipo'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </span>


                            <span>

                                <i class="fa-solid fa-file-contract"></i>

                                <?= htmlspecialchars(
                                    $vaga['contrato'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </span>


                        </div>


                        <a
                            href="/Site_Avigro_MVC/public/index.php?route=vaga&amp;id=<?= urlencode($vaga['id']) ?>"
                            class="career-button"
                        >

                            Ver oportunidade

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>


                    </article>


                <?php endforeach; ?>


            </div>


        <?php endif; ?>


    </div>

</section>


<!-- ========================================
     BANCO DE TALENTOS
======================================== -->

<section class="careers-talent">

    <div class="container">

        <div class="careers-talent-box">


            <div>

                <span class="careers-label">
                    BANCO DE TALENTOS
                </span>

                <h2>
                    Não encontrou uma oportunidade?
                </h2>

                <p>
                    Em breve disponibilizaremos também
                    nosso banco de talentos para futuras oportunidades.
                </p>

            </div>


            <div class="careers-talent-icon">

                <i class="fa-solid fa-address-card"></i>

            </div>


        </div>

    </div>

</section>


<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';