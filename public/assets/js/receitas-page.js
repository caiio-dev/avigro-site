document.addEventListener("DOMContentLoaded", function () {

    /* ========================================
       FILTROS
    ======================================== */

    const filtros = document.querySelectorAll(".recipe-filter");
    const receitas = document.querySelectorAll(".recipe-page-card");


    if (filtros.length && receitas.length) {

        filtros.forEach(function (botao) {

            botao.addEventListener("click", function () {

                const categoria = botao.dataset.filter;


                filtros.forEach(function (item) {

                    item.classList.remove("active");

                });


                botao.classList.add("active");


                receitas.forEach(function (receita) {

                    const mostrar =
                        categoria === "todos" ||
                        receita.dataset.category === categoria;


                    receita.classList.toggle(
                        "is-hidden",
                        !mostrar
                    );


                    /*
                     * Se o card voltar a aparecer após o filtro,
                     * garante que a animação continue aplicada.
                     */
                    if (mostrar) {

                        receita.classList.add("recipe-visible");

                    }

                });

            });

        });

    }


    /* ========================================
       ANIMAÇÃO DOS CARDS AO ROLAR
    ======================================== */

    const recipeCards = document.querySelectorAll(".recipe-page-card");


    if (!recipeCards.length) {
        return;
    }


    /*
     * Pequeno atraso entre os cards
     * para criar efeito em sequência.
     */
    recipeCards.forEach(function (card, index) {

        card.style.transitionDelay = `${index * 80}ms`;

    });


    /*
     * Fallback para navegadores antigos.
     */
    if (!("IntersectionObserver" in window)) {

        recipeCards.forEach(function (card) {

            card.classList.add("recipe-visible");

        });

        return;

    }


    const observer = new IntersectionObserver(

        function (entries, observer) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add("recipe-visible");

                    observer.unobserve(entry.target);

                }

            });

        },

        {
            threshold: 0.12
        }

    );


    recipeCards.forEach(function (card) {

        observer.observe(card);

    });

});