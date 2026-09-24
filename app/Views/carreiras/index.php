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
            Conheça as oportunidades disponíveis e descubra
            como fazer parte do time AVIGRO.
        </p>

    </div>

</section>


<!-- ========================================
     INTRODUÇÃO
======================================== -->

<section class="careers-intro">

    <div class="container careers-intro-container">

        <div class="careers-intro-content">

            <span class="careers-label">
                OPORTUNIDADES
            </span>

            <h2>
                Pessoas fazem a diferença.
            </h2>

            <p>
                A AVIGRO acredita que o crescimento da empresa
                acontece junto com o desenvolvimento das pessoas.
            </p>

            <p>
                Nesta página você poderá acompanhar as vagas
                disponíveis e encontrar oportunidades para fazer
                parte da nossa equipe.
            </p>

        </div>

        <div class="careers-intro-icon">
            <i class="fa-solid fa-users"></i>
        </div>

    </div>

</section>


<!-- ========================================
     VAGAS ABERTAS
======================================== -->

<section class="careers-jobs">

    <div class="container">

        <div class="careers-jobs-header">

            <span class="careers-label">
                VAGAS ABERTAS
            </span>

            <h2>
                Encontre uma oportunidade
            </h2>

            <p>
                Confira algumas oportunidades disponíveis.
            </p>

        </div>


        <div class="jobs-grid">

            <!-- VAGA 1 -->

            <article class="job-card">

                <div class="job-card-top">

                    <span class="job-department">
                        PRODUÇÃO
                    </span>

                    <span class="job-status">
                        Aberta
                    </span>

                </div>

                <h3>
                    Auxiliar de Produção
                </h3>

                <div class="job-info">

                    <span>
                        <i class="fa-solid fa-location-dot"></i>
                        Conceição da Feira - BA
                    </span>

                    <span>
                        <i class="fa-solid fa-building"></i>
                        Presencial
                    </span>

                </div>

                <p>
                    Oportunidade para fazer parte da equipe
                    de produção da AVIGRO.
                </p>

                <a
                    href="/Site_Avigro_MVC/public/index.php?route=vaga"
                    class="job-button"
                >
                    Ver vaga
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>


            <!-- VAGA 2 -->

            <article class="job-card">

                <div class="job-card-top">

                    <span class="job-department">
                        ADMINISTRATIVO
                    </span>

                    <span class="job-status">
                        Aberta
                    </span>

                </div>

                <h3>
                    Assistente Administrativo
                </h3>

                <div class="job-info">

                    <span>
                        <i class="fa-solid fa-location-dot"></i>
                        Conceição da Feira - BA
                    </span>

                    <span>
                        <i class="fa-solid fa-building"></i>
                        Presencial
                    </span>

                </div>

                <p>
                    Oportunidade para atuação em atividades
                    administrativas da empresa.
                </p>

                <a
                    href="/Site_Avigro_MVC/public/index.php?route=vaga"
                    class="job-button"
                >
                    Ver vaga
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>


            <!-- VAGA 3 -->

            <article class="job-card">

                <div class="job-card-top">

                    <span class="job-department">
                        TECNOLOGIA
                    </span>

                    <span class="job-status">
                        Aberta
                    </span>

                </div>

                <h3>
                    Oportunidade em TI
                </h3>

                <div class="job-info">

                    <span>
                        <i class="fa-solid fa-location-dot"></i>
                        Conceição da Feira - BA
                    </span>

                    <span>
                        <i class="fa-solid fa-building"></i>
                        Presencial
                    </span>

                </div>

                <p>
                    Faça parte da área de tecnologia
                    e ajude a construir novas soluções.
                </p>

                <a
                    href="/Site_Avigro_MVC/public/index.php?route=vaga"
                    class="job-button"
                >
                    Ver vaga
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>

        </div>


        <div class="careers-note">

            <i class="fa-solid fa-circle-info"></i>

            <p>
                As vagas exibidas nesta página são demonstrativas.
                Depois elas serão cadastradas pela área administrativa.
            </p>

        </div>

    </div>

</section>


<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';