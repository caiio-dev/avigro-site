<?php

$title = $produto
    ? 'AVIGRO | ' . $produto['nome']
    : 'AVIGRO | Produto não encontrado';

ob_start();

?>


<section class="product-detail">

    <div class="container">


        <!-- ========================================
             VOLTAR
        ======================================== -->

        <a
            href="/Site_Avigro_MVC/public/index.php?route=produtos"
            class="product-back"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Voltar para produtos

        </a>


        <?php if ($produto === null): ?>


            <!-- ========================================
                 PRODUTO NÃO ENCONTRADO
            ======================================== -->

            <div class="product-not-found">

                <i class="fa-solid fa-box-open"></i>

                <h1>
                    Produto não encontrado
                </h1>

                <p>
                    O produto solicitado não está disponível
                    ou não foi encontrado.
                </p>

            </div>


        <?php else: ?>


            <div class="product-detail-grid">


                <!-- ========================================
                     IMAGEM
                ======================================== -->

                <div class="product-detail-image">

                    <img
                        src="/Site_Avigro_MVC/public/assets/images/<?= rawurlencode($produto['imagem']) ?>"
                        alt="<?= htmlspecialchars(
                            $produto['nome'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>"
                    >

                </div>


                <!-- ========================================
                     CONTEÚDO
                ======================================== -->

                <div class="product-detail-content">


                    <span class="products-page-label">

                        <?= htmlspecialchars(
                            strtoupper($produto['categoria']),
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>

                    </span>


                    <h1>

                        <?= htmlspecialchars(
                            $produto['nome'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>

                    </h1>


                    <p class="product-detail-description">

                        <?= htmlspecialchars(
                            $produto['descricao'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>

                    </p>


                    <!-- ========================================
                         ESPECIFICAÇÕES
                    ======================================== -->

                    <div class="product-specifications">


                        <!-- PESO -->

                        <div class="product-spec-item">

                            <div>

                                <i class="fa-solid fa-weight-hanging"></i>

                            </div>


                            <div>

                                <span>
                                    Peso / apresentação
                                </span>

                                <strong>

                                    <?= htmlspecialchars(
                                        $produto['peso'],
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ) ?>

                                </strong>

                            </div>

                        </div>


                        <!-- CONSERVAÇÃO -->

                        <div class="product-spec-item">

                            <div>

                                <i class="fa-solid fa-snowflake"></i>

                            </div>


                            <div>

                                <span>
                                    Conservação
                                </span>

                                <strong>

                                    <?= htmlspecialchars(
                                        $produto['conservacao'],
                                        ENT_QUOTES,
                                        'UTF-8'
                                    ) ?>

                                </strong>

                            </div>

                        </div>


                    </div>


                    <!-- ========================================
                         INFORMAÇÕES
                    ======================================== -->

                    <div class="product-more-info">

                        <h2>
                            Informações do produto
                        </h2>

                        <p>

                            <?= htmlspecialchars(
                                $produto['informacoes'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>

                        </p>

                    </div>


                    <!-- ========================================
                         AVISO
                    ======================================== -->

                    <div class="product-update-notice">

                        <i class="fa-solid fa-circle-info"></i>

                        <p>
                            Algumas informações técnicas
                            estão sendo atualizadas.
                        </p>

                    </div>


                </div>


            </div>


        <?php endif; ?>


    </div>

</section>


<?php

$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';