<?php

$title = $vaga
    ? 'AVIGRO | ' . $vaga['titulo']
    : 'AVIGRO | Vaga não encontrada';

ob_start();

?>


<section class="career-detail">

    <div class="container">


        <a
            href="/Site_Avigro_MVC/public/index.php?route=trabalhe-conosco"
            class="career-back"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para oportunidades

        </a>


        <?php if ($vaga === null): ?>


            <div class="career-not-found">

                <i class="fa-solid fa-briefcase"></i>

                <h1>
                    Vaga não encontrada
                </h1>

                <p>
                    Esta oportunidade não está disponível
                    ou pode ter sido encerrada.
                </p>

            </div>


        <?php else: ?>


            <!-- ========================================
                 CABEÇALHO
            ======================================== -->

            <div class="career-detail-header">


                <span class="careers-label">

                    <?= htmlspecialchars(
                        $vaga['setor'],
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>

                </span>


                <h1>

                    <?= htmlspecialchars(
                        $vaga['titulo'],
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>

                </h1>


                <div class="career-detail-meta">


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


            </div>


            <!-- ========================================
                 CONTEÚDO
            ======================================== -->

            <div class="career-detail-grid">


                <div class="career-detail-content">


                    <section class="career-detail-section">

                        <span class="careers-label">
                            SOBRE A VAGA
                        </span>

                        <h2>
                            Descrição da oportunidade
                        </h2>


                        <p>

                            <?= nl2br(
                                htmlspecialchars(
                                    $vaga['descricao'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                )
                            ) ?>

                        </p>

                    </section>


                    <!-- REQUISITOS -->

                    <?php if (!empty($vaga['requisitos'])): ?>

                        <section class="career-detail-section">

                            <span class="careers-label">
                                REQUISITOS
                            </span>

                            <h2>
                                O que buscamos
                            </h2>


                            <ul class="career-list">

                                <?php foreach ($vaga['requisitos'] as $requisito): ?>

                                    <li>

                                        <i class="fa-solid fa-check"></i>

                                        <span>

                                            <?= htmlspecialchars(
                                                $requisito,
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ) ?>

                                        </span>

                                    </li>

                                <?php endforeach; ?>

                            </ul>

                        </section>

                    <?php endif; ?>


                    <!-- DIFERENCIAIS -->

                    <?php if (!empty($vaga['diferenciais'])): ?>

                        <section class="career-detail-section">

                            <span class="careers-label">
                                DIFERENCIAIS
                            </span>

                            <h2>
                                Será um diferencial
                            </h2>


                            <ul class="career-list">

                                <?php foreach ($vaga['diferenciais'] as $diferencial): ?>

                                    <li>

                                        <i class="fa-solid fa-plus"></i>

                                        <span>

                                            <?= htmlspecialchars(
                                                $diferencial,
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ) ?>

                                        </span>

                                    </li>

                                <?php endforeach; ?>

                            </ul>

                        </section>

                    <?php endif; ?>


                </div>


                <!-- ========================================
                     FORMULÁRIO
                ======================================== -->

                <aside class="career-application">


                    <span class="careers-label">
                        CANDIDATURA
                    </span>


                    <h2>
                        Candidate-se
                    </h2>


                    <p>
                        Preencha seus dados para demonstrar
                        interesse nesta oportunidade.
                    </p>


                    <form
                        id="careerApplicationForm"
                        class="career-form"
                        enctype="multipart/form-data"
                    >


                        <input
                            type="hidden"
                            name="vaga"
                            value="<?= htmlspecialchars(
                                $vaga['titulo'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>"
                        >


                        <!-- NOME -->

                        <div class="career-form-group">

                            <label for="nome">
                                Nome completo *
                            </label>

                            <input
                                type="text"
                                id="nome"
                                name="nome"
                                required
                            >

                        </div>


                        <!-- EMAIL -->

                        <div class="career-form-group">

                            <label for="email">
                                E-mail *
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                            >

                        </div>


                        <!-- TELEFONE -->

                        <div class="career-form-group">

                            <label for="telefone">
                                Telefone *
                            </label>

                            <input
                                type="tel"
                                id="telefone"
                                name="telefone"
                                required
                            >

                        </div>


                        <!-- CIDADE -->

                        <div class="career-form-group">

                            <label for="cidade">
                                Cidade *
                            </label>

                            <input
                                type="text"
                                id="cidade"
                                name="cidade"
                                required
                            >

                        </div>


                        <!-- CURRÍCULO -->

                        <div class="career-form-group">

                            <label for="curriculo">
                                Currículo
                            </label>

                            <input
                                type="file"
                                id="curriculo"
                                name="curriculo"
                                accept=".pdf,.doc,.docx"
                            >

                            <small>
                                PDF, DOC ou DOCX.
                            </small>

                        </div>


                        <!-- MENSAGEM -->

                        <div class="career-form-group">

                            <label for="mensagem">
                                Mensagem
                            </label>

                            <textarea
                                id="mensagem"
                                name="mensagem"
                                rows="5"
                            ></textarea>

                        </div>


                        <button
                            type="submit"
                            class="career-submit"
                        >

                            Enviar candidatura

                            <i class="fa-solid fa-paper-plane"></i>

                        </button>


                        <p class="career-form-notice">

                            O envio online será habilitado
                            na próxima etapa de desenvolvimento.

                        </p>


                    </form>


                </aside>


            </div>


        <?php endif; ?>


    </div>

</section>


<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';