
<?php
$title = $acao
    ? 'AVIGRO | ' . $acao['titulo']
    : 'AVIGRO | Ação não encontrada';

ob_start();
?>

<section class="social-detail">
    <div class="container">

        <a
            href="/Site_Avigro_MVC/public/index.php?route=social"
            class="social-back"
        >
            <i class="fa-solid fa-arrow-left"></i>
            Voltar para Social
        </a>

        <?php if ($acao === null): ?>

            <div class="social-empty">
                <h1>Ação não encontrada</h1>

                <p>
                    Não encontramos a ação social solicitada.
                </p>
            </div>

        <?php else: ?>

            <header class="social-detail-header">

                <span class="social-label">
                    AÇÃO SOCIAL
                </span>

                <h1>
                    <?= htmlspecialchars($acao['titulo'], ENT_QUOTES, 'UTF-8') ?>
                </h1>

                <p>
                    <?= htmlspecialchars($acao['data'], ENT_QUOTES, 'UTF-8') ?>
                </p>

            </header>

            <?php if (!empty($acao['imagem'])): ?>

                <div class="social-detail-cover">
                    <img
                        src="/Site_Avigro_MVC/public/assets/images/social/<?= rawurlencode($acao['imagem']) ?>"
                        alt="<?= htmlspecialchars($acao['titulo'], ENT_QUOTES, 'UTF-8') ?>"
                    >
                </div>

            <?php endif; ?>

            <div class="social-detail-text">

                <?php
                $descricao = $acao['descricao'] ?? '';
                $paragrafos = preg_split('/\R{2,}/', trim($descricao));
                ?>

                <?php foreach ($paragrafos as $paragrafo): ?>
                    <?php if (trim($paragrafo) !== ''): ?>
                        <p>
                            <?= nl2br(htmlspecialchars($paragrafo, ENT_QUOTES, 'UTF-8')) ?>
                        </p>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>

            <?php if (!empty($acao['galeria'])): ?>

                <div class="social-gallery">

                    <h2>Galeria de fotos</h2>

                    <div class="social-gallery-grid">

                        <?php foreach ($acao['galeria'] as $foto): ?>

                            <img
                                src="/Site_Avigro_MVC/public/assets/images/social/<?= rawurlencode($foto) ?>"
                                alt="Registro da ação social"
                                loading="lazy"
                            >

                        <?php endforeach; ?>

                    </div>

                </div>

            <?php endif; ?>

        <?php endif; ?>

    </div>
</section>

<?php
$content = ob_get_clean();

require_once __DIR__ . '/../layouts/main.php';
