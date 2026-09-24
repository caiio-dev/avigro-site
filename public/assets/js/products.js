/* ========================================
   CARROSSEL DE PRODUTOS — AVIGRO

   - múltiplos carrosséis
   - movimento automático
   - loop infinito
   - botões anterior/próximo
======================================== */

document.addEventListener("DOMContentLoaded", function () {

    const carousels = document.querySelectorAll(
        ".products-carousel"
    );


    if (!carousels.length) {
        return;
    }


    /* ========================================
       VELOCIDADE AUTOMÁTICA
    ======================================== */

    const speed = 0.35;


    /* ========================================
       CONFIGURAR CADA CARROSSEL
    ======================================== */

    carousels.forEach(function (carousel) {

        const track = carousel.querySelector(
            ".products-track"
        );

        const nextButton = carousel.querySelector(
            ".products-carousel-next"
        );

        const prevButton = carousel.querySelector(
            ".products-carousel-prev"
        );


        if (!track) {
            return;
        }


        /* ========================================
           CARDS ORIGINAIS
        ======================================== */

        const originalCards = Array.from(
            track.querySelectorAll(
                ".product-card:not(.carousel-clone)"
            )
        );


        if (!originalCards.length) {
            return;
        }


        /* ========================================
           CRIAR CLONES
        ======================================== */

        originalCards.forEach(function (card) {

            const clone = card.cloneNode(true);

            clone.classList.add(
                "carousel-clone"
            );

            clone.setAttribute(
                "aria-hidden",
                "true"
            );

            track.appendChild(clone);

        });


        /* ========================================
           POSIÇÃO ATUAL
        ======================================== */

        let position = 0;


        /* ========================================
           ESTADO DA ANIMAÇÃO
        ======================================== */

        let animationFrame = null;

        let running = true;


        /* ========================================
           LARGURA DO CARD + GAP
        ======================================== */

        function getCardWidth() {

            const card = track.querySelector(
                ".product-card"
            );


            if (!card) {
                return 0;
            }


            const cardWidth =
                card.getBoundingClientRect().width;


            const styles =
                window.getComputedStyle(track);


            const gap =
                parseFloat(styles.columnGap) ||
                parseFloat(styles.gap) ||
                0;


            return cardWidth + gap;

        }


        /* ========================================
           TAMANHO DA LISTA ORIGINAL
        ======================================== */

        function getLoopWidth() {

            const cardWidth =
                getCardWidth();


            if (!cardWidth) {
                return 0;
            }


            return (
                cardWidth *
                originalCards.length
            );

        }


        /* ========================================
           NORMALIZAR POSIÇÃO
        ======================================== */

        function normalizePosition() {

            const loopWidth =
                getLoopWidth();


            if (!loopWidth) {
                return;
            }


            while (position >= loopWidth) {
                position -= loopWidth;
            }


            while (position < 0) {
                position += loopWidth;
            }

        }


        /* ========================================
           ATUALIZAR POSIÇÃO
        ======================================== */

        function updatePosition() {

            normalizePosition();

            track.scrollLeft = position;

        }


        /* ========================================
           ANIMAÇÃO AUTOMÁTICA
        ======================================== */

        function animate() {

            if (running) {

                position += speed;

                updatePosition();

            }


            animationFrame =
                requestAnimationFrame(
                    animate
                );

        }


        /* ========================================
           MOVIMENTO MANUAL
        ======================================== */

        function moveManual(direction) {

            const distance =
                getCardWidth();


            if (!distance) {
                return;
            }


            position +=
                distance * direction;


            updatePosition();

        }


        /* ========================================
           BOTÃO PRÓXIMO
        ======================================== */

        if (nextButton) {

            nextButton.addEventListener(
                "click",
                function (event) {

                    event.preventDefault();

                    moveManual(1);

                }
            );

        }


        /* ========================================
           BOTÃO ANTERIOR
        ======================================== */

        if (prevButton) {

            prevButton.addEventListener(
                "click",
                function (event) {

                    event.preventDefault();

                    moveManual(-1);

                }
            );

        }


        /* ========================================
           PAUSAR AO PASSAR O MOUSE

           Facilita a visualização dos produtos.
        ======================================== */

        carousel.addEventListener(
            "mouseenter",
            function () {

                running = false;

            }
        );


        carousel.addEventListener(
            "mouseleave",
            function () {

                running = true;

            }
        );


        /* ========================================
           TOUCH / CELULAR
        ======================================== */

        track.addEventListener(
            "touchstart",
            function () {

                running = false;

            },
            {
                passive: true
            }
        );


        track.addEventListener(
            "touchend",
            function () {

                position =
                    track.scrollLeft;

                running = true;

            },
            {
                passive: true
            }
        );


        /* ========================================
           REDIMENSIONAMENTO
        ======================================== */

        window.addEventListener(
            "resize",
            function () {

                position =
                    track.scrollLeft;

                normalizePosition();

                updatePosition();

            }
        );


        /* ========================================
           INICIALIZAR
        ======================================== */

        track.scrollLeft = 0;

        position = 0;

        animate();


        /* ========================================
           LIMPEZA
        ======================================== */

        window.addEventListener(
            "beforeunload",
            function () {

                if (animationFrame) {

                    cancelAnimationFrame(
                        animationFrame
                    );

                }

            }
        );

    });

});