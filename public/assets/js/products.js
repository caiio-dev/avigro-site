/* ========================================
   CARROSSEL DE PRODUTOS — AVIGRO
   MULTIPLOS CARROSSÉIS
   ESTEIRA CONTÍNUA + CONTROLE MANUAL
======================================== */

document.addEventListener("DOMContentLoaded", function () {


    /* ========================================
       ENCONTRAR TODOS OS CARROSSÉIS
    ======================================== */

    const carousels = document.querySelectorAll(
        ".products-carousel"
    );


    if (carousels.length === 0) {

        console.error(
            "Nenhum carrossel de produtos encontrado."
        );

        return;

    }


    console.log(
        "Carrosséis encontrados:",
        carousels.length
    );


    /* ========================================
       CONFIGURAÇÃO
    ======================================== */

    const speed = 0.35;


    /* ========================================
       CONFIGURAR CADA CARROSSEL
    ======================================== */

    carousels.forEach(function (carousel, index) {


        const track = carousel.querySelector(
            ".products-track"
        );


        const nextButton = carousel.querySelector(
            ".products-carousel-next"
        );


        const prevButton = carousel.querySelector(
            ".products-carousel-prev"
        );


        /* ========================================
           VERIFICAÇÃO
        ======================================== */

        if (!track) {

            console.error(
                "Track não encontrado no carrossel:",
                index + 1
            );

            return;

        }


        /* ========================================
           PRODUTOS ORIGINAIS
        ======================================== */

        const originalCards = Array.from(
            track.querySelectorAll(".product-card")
        );


        if (originalCards.length === 0) {

            console.error(
                "Nenhum produto encontrado no carrossel:",
                index + 1
            );

            return;

        }


        /* ========================================
           DUPLICAR PRODUTOS
        ======================================== */

        originalCards.forEach(function (card) {

            const clone = card.cloneNode(true);

            clone.classList.add(
                "carousel-clone"
            );

            track.appendChild(clone);

        });


        /* ========================================
           POSIÇÃO
        ======================================== */

        let position = 0;


        /* ========================================
           LARGURA DO CARD + GAP
        ======================================== */

        function getCardWidth() {

            const card =
                track.querySelector(".product-card");


            if (!card) {
                return 0;
            }


            const cardWidth =
                card.getBoundingClientRect().width;


            const gap =
                parseFloat(
                    window.getComputedStyle(track).gap
                ) || 0;


            return cardWidth + gap;

        }


        /* ========================================
           LARGURA DA SEQUÊNCIA ORIGINAL
        ======================================== */

        function getLoopWidth() {

            return (
                getCardWidth() *
                originalCards.length
            );

        }


        /* ========================================
           ATUALIZAR POSIÇÃO
        ======================================== */

        function updatePosition() {

            const loopWidth =
                getLoopWidth();


            if (!loopWidth) {
                return;
            }


            /*
             * Chegou ao final da primeira sequência
             */

            if (position >= loopWidth) {

                position -= loopWidth;

            }


            /*
             * Voltou antes do início
             */

            if (position < 0) {

                position += loopWidth;

            }


            track.scrollLeft = position;

        }


        /* ========================================
           ESTEIRA CONTÍNUA
        ======================================== */

        function animate() {

            position += speed;

            updatePosition();

            requestAnimationFrame(animate);

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


            /*
             * Move exatamente um produto.
             *
             * Não usamos scrollBy()
             * nem behavior: smooth.
             *
             * Isso evita que vários cliques
             * acumulem animações.
             */

            position +=
                distance * direction;


            updatePosition();

        }


        /* ========================================
           PRÓXIMO
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
           ANTERIOR
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
           REAJUSTAR APÓS REDIMENSIONAMENTO
        ======================================== */

        window.addEventListener(
            "resize",
            function () {

                updatePosition();

            }
        );


        /* ========================================
           INICIAR
        ======================================== */

        console.log(
            "Carrossel",
            index + 1,
            "iniciado."
        );


        animate();

    });

});