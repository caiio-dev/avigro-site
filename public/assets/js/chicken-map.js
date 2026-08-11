document.addEventListener("DOMContentLoaded", () => {

    const cutTitle = document.getElementById("cut-title");
    const cutDescription = document.getElementById("cut-description");

    const cutPoints = document.querySelectorAll(".cut-point");
    const cutCards = document.querySelectorAll(".cut-card");

    const cuts = {

        breast: {
            title: "Peito de Frango",
            description:
                "Um dos cortes mais versáteis, ideal para diferentes preparações e receitas."
        },

        wing: {
            title: "Asa de Frango",
            description:
                "Um corte muito apreciado e que pode ser utilizado em diferentes preparações."
        },

        thigh: {
            title: "Sobrecoxa",
            description:
                "Um corte saboroso e versátil, ideal para diferentes formas de preparo."
        },

        leg: {
            title: "Coxa de Frango",
            description:
                "Um corte tradicional e saboroso, perfeito para diversas receitas."
        },

        carcass: {
            title: "Carcaça",
            description:
                "Parte do frango utilizada em diferentes preparações e processos culinários."
        }

    };

    function selectCut(cutName) {

        const cut = cuts[cutName];

        if (!cut) {
            return;
        }

        cutTitle.textContent = cut.title;
        cutDescription.textContent = cut.description;

        cutCards.forEach(card => {
            card.classList.toggle(
                "active",
                card.dataset.cut === cutName
            );
        });
    }

    cutPoints.forEach(point => {

        point.addEventListener("mouseenter", () => {
            selectCut(point.dataset.cut);
        });

        point.addEventListener("click", () => {
            selectCut(point.dataset.cut);
        });

    });

    cutCards.forEach(card => {

        card.addEventListener("mouseenter", () => {
            selectCut(card.dataset.cut);
        });

        card.addEventListener("click", () => {
            selectCut(card.dataset.cut);
        });

    });

});