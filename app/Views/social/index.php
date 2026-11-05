
<?php
$title = 'AVIGRO | Social';

ob_start();
?>

<section class="social-hero">
    <div class="container">
        <span class="social-label">SOCIAL AVIGRO</span>

        <h1>
            Cuidar das pessoas faz parte
            da nossa história.
        </h1>

        <p>
            Conheça as ações e iniciativas sociais
            realizadas pela AVIGRO.
        </p>
    </div>
</section>

<section class="social-intro">
    <div class="container social-intro-grid">

        <div class="social-intro-content">
            <span class="social-label">
                NOSSA ATUAÇÃO
            </span>

            <h2>
                Presença que vai além
                dos nossos produtos.
            </h2>

            <p>
                Este espaço reúne registros de ações
                sociais realizadas pela AVIGRO.
                Em breve, você poderá conhecer
                as iniciativas e seus resultados.
            </p>
        </div>

        <div class="social-intro-visual">
            <i class="fa-solid fa-hand-holding-heart"></i>
            <span>AVIGRO SOCIAL</span>
        </div>

    </div>
</section>

<section class="social-actions">
    <div class="container">

        <div class="social-section-header">
            <span class="social-label">
                NOSSAS AÇÕES
            </span>

            <h2>
                Conheça nossas iniciativas
            </h2>

            <p>
                Histórias e registros de ações
                realizadas pela AVIGRO.
            </p>
        </div>

        <?php if (empty($acoes)): ?>

            <div class="social-empty">
                <i class="fa-solid fa-heart"></i>

                <h3>
                    Em breve, nossas ações sociais
                </h3>

                <p>
                    Estamos preparando os registros
                    das iniciativas realizadas pela AVIGRO.
                </p>
            </div>

        <?php else: ?>

            <div class="social-grid">

                <?php foreach ($acoes as $acao): ?>

                    <article class="social-card">

                        <div class="social-card-image">

                            <?php if (!empty($acao['imagem'])): ?>

                                <img
                                    src="/Site_Avigro_MVC/public/assets/images/social/<?= rawurlencode($acao['imagem']) ?>"
                                    alt="<?= htmlspecialchars($acao['titulo'], ENT_QUOTES, 'UTF-8') ?>"
                                    loading="lazy"
                                >

                            <?php else: ?>

                                <i class="fa-solid fa-hand-holding-heart"></i>

                            <?php endif; ?>

                        </div>

                        <div class="social-card-content">

                            <span class="social-card-date">
                                <?= htmlspecialchars($acao['data'], ENT_QUOTES, 'UTF-8') ?>
                            </span>

                            <h3>
                                <?= htmlspecialchars($acao['titulo'], ENT_QUOTES, 'UTF-8') ?>
                            </h3>

                            <p>
                                <?= htmlspecialchars($acao['resumo'], ENT_QUOTES, 'UTF-8') ?>
                            </p>

                            <a
                                href="/Site_Avigro_MVC/public/index.php?route=acao-social&amp;id=<?= urlencode($acao['id']) ?>"
                                class="social-button"
                            >
                                Saiba mais
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>
                    </article>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>
</section>

<?php
$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';
