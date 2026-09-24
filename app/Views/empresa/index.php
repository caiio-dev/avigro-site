<?php

$title = 'AVIGRO | Nossa História';

ob_start();

?>

<!-- ========================================
     HERO
======================================== -->

<section class="company-hero">

    <div class="container">

        <span class="company-label">
            NOSSA HISTÓRIA
        </span>

        <h1>
            Uma trajetória construída com
            trabalho, qualidade e evolução.
        </h1>

        <p>
            Conheça a história da AVIGRO e os valores
            que fazem parte da nossa trajetória.
        </p>

    </div>

</section>


<!-- ========================================
     NOSSA HISTÓRIA
======================================== -->

<section class="company-history">

    <div class="container company-history-container">

        <div class="company-history-content">

            <span class="company-label">
                NOSSA TRAJETÓRIA
            </span>

            <h2>
                Uma história construída
                todos os dias.
            </h2>

            <p>
                A trajetória da AVIGRO é marcada pelo trabalho,
                dedicação e compromisso com a qualidade.
            </p>

            <p>
                Ao longo dos anos, seguimos evoluindo nossos
                processos, estrutura e tecnologia, sempre buscando
                oferecer produtos de qualidade aos nossos clientes
                e consumidores.
            </p>

            <p>
                Cada etapa dessa história é construída por pessoas
                que fazem parte da nossa empresa e contribuem
                diariamente para o crescimento da AVIGRO.
            </p>

        </div>


        <div class="company-history-photo">

            <!--
                IMAGEM PROVISÓRIA

                Depois substituiremos pela foto oficial
                da história da AVIGRO.
            -->

            <div class="company-photo-placeholder">

                <i class="fa-solid fa-image"></i>

                <span>
                    Foto histórica da AVIGRO
                </span>

            </div>

        </div>

    </div>

</section>


<!-- ========================================
     DESTAQUE
======================================== -->

<section class="company-quote">

    <div class="container">

        <div class="company-quote-content">

            <i class="fa-solid fa-quote-left"></i>

            <h2>
                Evoluir faz parte
                da nossa história.
            </h2>

            <p>
                Experiência, tecnologia e pessoas trabalhando
                juntas para construir o futuro da AVIGRO.
            </p>

        </div>

    </div>

</section>


<!-- ========================================
     LINHA DO TEMPO
======================================== -->

<section class="company-timeline">

    <div class="container">

        <div class="company-timeline-header">

            <span class="company-label">
                NOSSA EVOLUÇÃO
            </span>

            <h2>
                Uma trajetória de crescimento
            </h2>

            <p>
                Alguns momentos que ajudam a contar
                a história e a evolução da AVIGRO.
            </p>

        </div>


        <div class="timeline">

            <!-- MARCO 1 -->

            <div class="timeline-item">

                <div class="timeline-marker"></div>

                <div class="timeline-content">

                    <span class="timeline-year">
                        INÍCIO
                    </span>

                    <h3>
                        O começo da nossa história
                    </h3>

                    <p>
                        Aqui vamos contar como nasceu a AVIGRO,
                        seus primeiros passos e as pessoas que
                        fizeram parte do início dessa trajetória.
                    </p>

                </div>

            </div>


            <!-- MARCO 2 -->

            <div class="timeline-item">

                <div class="timeline-marker"></div>

                <div class="timeline-content">

                    <span class="timeline-year">
                        CRESCIMENTO
                    </span>

                    <h3>
                        Novos caminhos
                    </h3>

                    <p>
                        Um espaço para apresentar momentos importantes
                        de crescimento, novos investimentos e mudanças
                        que marcaram a evolução da empresa.
                    </p>

                </div>

            </div>


            <!-- MARCO 3 -->

            <div class="timeline-item">

                <div class="timeline-marker"></div>

                <div class="timeline-content">

                    <span class="timeline-year">
                        EVOLUÇÃO
                    </span>

                    <h3>
                        Tecnologia e modernização
                    </h3>

                    <p>
                        Aqui poderemos mostrar a modernização da
                        estrutura, dos processos e os investimentos
                        realizados ao longo da trajetória.
                    </p>

                </div>

            </div>


            <!-- MARCO 4 -->

            <div class="timeline-item">

                <div class="timeline-marker"></div>

                <div class="timeline-content">

                    <span class="timeline-year">
                        HOJE
                    </span>

                    <h3>
                        Uma história que continua
                    </h3>

                    <p>
                        A AVIGRO continua sua trajetória buscando
                        evolução, qualidade e novas oportunidades
                        para crescer junto com seus clientes,
                        colaboradores e parceiros.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ========================================
     MISSÃO / VISÃO / VALORES
======================================== -->

<section class="company-values">

    <div class="container">

        <div class="company-values-header">

            <span class="company-label">
                NOSSOS PRINCÍPIOS
            </span>

            <h2>
                O que guia a AVIGRO
            </h2>

        </div>


        <div class="company-values-grid">

            <!-- MISSÃO -->

            <article class="company-value-card">

                <i class="fa-solid fa-bullseye"></i>

                <h3>
                    Missão
                </h3>

                <p>
                    Produzir alimentos com qualidade,
                    segurança e responsabilidade,
                    buscando atender às necessidades
                    dos nossos clientes e consumidores.
                </p>

            </article>


            <!-- VISÃO -->

            <article class="company-value-card">

                <i class="fa-solid fa-eye"></i>

                <h3>
                    Visão
                </h3>

                <p>
                    Evoluir continuamente, fortalecendo
                    a marca AVIGRO e ampliando nossa
                    presença com qualidade e confiança.
                </p>

            </article>


            <!-- VALORES -->

            <article class="company-value-card">

                <i class="fa-solid fa-heart"></i>

                <h3>
                    Valores
                </h3>

                <p>
                    Qualidade, responsabilidade,
                    respeito, compromisso, inovação
                    e valorização das pessoas.
                </p>

            </article>

        </div>

    </div>

</section>


<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';