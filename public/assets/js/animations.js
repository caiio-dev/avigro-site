document.addEventListener("DOMContentLoaded", function () {

    /* ========================================
       FUNÇÃO PARA ADICIONAR ANIMAÇÃO
    ======================================== */

    function addAnimation(selector, animation, stagger = false) {

        const elements = document.querySelectorAll(selector);

        elements.forEach(function (element, index) {

            /*
             * Se o elemento já recebeu alguma
             * animação manualmente, não duplicamos.
             */

            const alreadyAnimated =
                element.classList.contains("reveal") ||
                element.classList.contains("reveal-left") ||
                element.classList.contains("reveal-right") ||
                element.classList.contains("reveal-scale") ||
                element.classList.contains("reveal-up");


            if (!alreadyAnimated) {

                element.classList.add(animation);

            }


            /*
             * Delay progressivo para cards.
             */

            if (stagger) {

                const delay =
                    (index % 4) + 1;

                element.classList.add(
                    "reveal-delay-" + delay
                );

            }

        });

    }


    /* ========================================
       HOME
    ======================================== */


    /* QUEM SOMOS */

    addAnimation(
        ".about-image",
        "reveal-left"
    );

    addAnimation(
        ".about-content",
        "reveal-right"
    );


    /* ESTATÍSTICAS */

    addAnimation(
        ".stats-header",
        "reveal"
    );

    addAnimation(
        ".stat-item",
        "reveal-scale",
        true
    );

    addAnimation(
        ".stats-card",
        "reveal-scale",
        true
    );


    /* DIFERENCIAIS */

    addAnimation(
        ".differentials-header",
        "reveal"
    );

    addAnimation(
        ".differential-card",
        "reveal-scale",
        true
    );


    /* MAPA / CORTES */

    addAnimation(
        ".chicken-map-header",
        "reveal"
    );

    addAnimation(
        ".chicken-map-content",
        "reveal"
    );

    addAnimation(
        ".chicken-map-image",
        "reveal-left"
    );

    addAnimation(
        ".chicken-map-info",
        "reveal-right"
    );


    /* ========================================
       RECEITAS
    ======================================== */

    addAnimation(
        ".recipes-header",
        "reveal"
    );

    addAnimation(
        ".recipe-card",
        "reveal-scale",
        true
    );

    addAnimation(
        ".recipes-more",
        "reveal"
    );


    /* ========================================
       PRODUTOS DA HOME

       Não animamos cada product-card porque
       o carrossel clona e movimenta os cards.
    ======================================== */

    addAnimation(
        ".products-header",
        "reveal"
    );

    addAnimation(
        ".products-category-header",
        "reveal"
    );

    addAnimation(
        ".products-category",
        "reveal-scale"
    );


    /* ========================================
       PÁGINA EMPRESA
    ======================================== */

    addAnimation(
        ".company-hero .container",
        "reveal"
    );

    addAnimation(
        ".company-history-content",
        "reveal-left"
    );

    addAnimation(
        ".company-history-photo",
        "reveal-right"
    );

    addAnimation(
        ".company-history-image",
        "reveal-right"
    );

    addAnimation(
        ".company-quote-content",
        "reveal"
    );

    addAnimation(
        ".company-timeline-header",
        "reveal"
    );


    /*
     * Linha do tempo alternada
     */

    const timelineItems =
        document.querySelectorAll(".timeline-item");

    timelineItems.forEach(function (item, index) {

        if (
            item.classList.contains("reveal") ||
            item.classList.contains("reveal-left") ||
            item.classList.contains("reveal-right")
        ) {
            return;
        }

        if (index % 2 === 0) {

            item.classList.add("reveal-left");

        } else {

            item.classList.add("reveal-right");

        }

    });


    addAnimation(
        ".company-values-header",
        "reveal"
    );

    addAnimation(
        ".company-value-card",
        "reveal-scale",
        true
    );


    /* ========================================
       TRABALHE CONOSCO
    ======================================== */

    addAnimation(
        ".careers-hero .container",
        "reveal"
    );

    addAnimation(
        ".careers-intro-content",
        "reveal-left"
    );

    addAnimation(
        ".careers-intro-icon",
        "reveal-right"
    );

    addAnimation(
        ".careers-jobs-header",
        "reveal"
    );

    addAnimation(
        ".job-card",
        "reveal-scale",
        true
    );

    addAnimation(
        ".careers-note",
        "reveal"
    );


    /* PÁGINA INDIVIDUAL DA VAGA */

    addAnimation(
        ".job-page-header",
        "reveal"
    );

    addAnimation(
        ".job-description",
        "reveal-left"
    );

    addAnimation(
        ".job-apply",
        "reveal-right"
    );


    /* ========================================
       PÁGINA DE PRODUTOS
    ======================================== */

    addAnimation(
        ".products-page-hero .container",
        "reveal"
    );

    addAnimation(
        ".products-catalog-header",
        "reveal"
    );

    addAnimation(
        ".products-filters",
        "reveal"
    );

    addAnimation(
        ".product-page-card",
        "reveal-scale",
        true
    );


    /* PRODUTO INDIVIDUAL */

    addAnimation(
        ".product-detail-image",
        "reveal-left"
    );

    addAnimation(
        ".product-detail-content",
        "reveal-right"
    );


    /* ========================================
       FOOTER
    ======================================== */

    addAnimation(
        ".footer-brand",
        "reveal-up"
    );

    addAnimation(
        ".footer-column",
        "reveal-up",
        true
    );


    /* ========================================
       OBSERVER

       Detecta quando o elemento entra
       na tela.
    ======================================== */

    const animatedElements =
        document.querySelectorAll(
            ".reveal, " +
            ".reveal-left, " +
            ".reveal-right, " +
            ".reveal-scale, " +
            ".reveal-up"
        );


    /*
     * Se o navegador não suporta
     * IntersectionObserver, mostramos tudo.
     */

    if (!("IntersectionObserver" in window)) {

        animatedElements.forEach(function (element) {

            element.classList.add("active");

        });

        return;
    }


    const observer =
        new IntersectionObserver(

            function (entries, observer) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add(
                            "active"
                        );

                        /*
                         * Anima apenas uma vez.
                         */

                        observer.unobserve(
                            entry.target
                        );

                    }

                });

            },

            {
                threshold: 0.12,

                rootMargin:
                    "0px 0px -30px 0px"
            }

        );


    animatedElements.forEach(function (element) {

        observer.observe(element);

    });

});