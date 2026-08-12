document.addEventListener("DOMContentLoaded", () => {

    const cutTitle = document.getElementById("cut-title");
    const cutDescription = document.getElementById("cut-description");
    const cutFeatures = document.querySelector(".cut-features");

    const cutPoints = document.querySelectorAll(".cut-point");
    const cutCards = document.querySelectorAll(".cut-card");

    const cuts = {

        breast: {
            title: "Peito de Frango",

            description:
                "Um dos cortes mais versáteis, ideal para diferentes preparações e receitas.",

            features: [
                {
                    icon: "fa-dumbbell",
                    title: "Rico em proteínas",
                    text: "Excelente fonte de proteínas de alta qualidade."
                },
                {
                    icon: "fa-heart",
                    title: "Baixo teor de gordura",
                    text: "Ideal para uma alimentação equilibrada."
                },
                {
                    icon: "fa-utensils",
                    title: "Versátil",
                    text: "Perfeito para grelhar, assar, cozinhar e muito mais."
                }
            ]
        },

        wing: {
            title: "Asa de Frango",

            description:
                "Um corte saboroso e perfeito para preparações especiais.",

            features: [
                {
                    icon: "fa-fire",
                    title: "Sabor marcante",
                    text: "Ótima opção para preparações cheias de sabor."
                },
                {
                    icon: "fa-star",
                    title: "Crocante",
                    text: "Ideal para assar ou preparar na churrasqueira."
                },
                {
                    icon: "fa-utensils",
                    title: "Versátil",
                    text: "Combina com diversos acompanhamentos."
                }
            ]
        },

        thigh: {
            title: "Sobrecoxa de Frango",

            description:
                "Um corte saboroso e suculento, ideal para diferentes formas de preparo.",

            features: [
                {
                    icon: "fa-drumstick-bite",
                    title: "Saborosa",
                    text: "Um corte conhecido pela sua suculência."
                },
                {
                    icon: "fa-heart",
                    title: "Macia",
                    text: "Excelente para diferentes formas de preparo."
                },
                {
                    icon: "fa-utensils",
                    title: "Versátil",
                    text: "Pode ser assada, grelhada ou cozida."
                }
            ]
        },

        leg: {
            title: "Coxa de Frango",

            description:
                "Um corte suculento e saboroso que combina com diferentes receitas.",

            features: [
                {
                    icon: "fa-fire",
                    title: "Sabor intenso",
                    text: "Uma opção muito apreciada pelos consumidores."
                },
                {
                    icon: "fa-heart",
                    title: "Suculenta",
                    text: "Mantém textura e sabor durante o preparo."
                },
                {
                    icon: "fa-utensils",
                    title: "Versátil",
                    text: "Excelente para assar, cozinhar ou grelhar."
                }
            ]
        },

        carcass: {
            title: "Carcaça de Frango",

            description:
                "Uma opção que permite aproveitar ainda mais o produto.",

            features: [
                {
                    icon: "fa-recycle",
                    title: "Aproveitamento",
                    text: "Pode ser utilizada em diferentes preparações."
                },
                {
                    icon: "fa-bowl-food",
                    title: "Caldo saboroso",
                    text: "Excelente para caldos e fundos."
                },
                {
                    icon: "fa-utensils",
                    title: "Prática",
                    text: "Uma opção para aproveitar melhor o produto."
                }
            ]
        }

    };


    function selectCut(cutName) {

        const cut = cuts[cutName];

        if (!cut) {
            return;
        }

        // Atualiza título
        cutTitle.textContent = cut.title;

        // Atualiza descrição
        cutDescription.textContent = cut.description;


        // Atualiza características
        cutFeatures.innerHTML = "";

        cut.features.forEach(feature => {

            const featureElement = document.createElement("div");

            featureElement.classList.add("cut-feature");

            featureElement.innerHTML = `
                <div class="cut-feature-icon">
                    <i class="fa-solid ${feature.icon}"></i>
                </div>

                <div>
                    <strong>${feature.title}</strong>

                    <span>
                        ${feature.text}
                    </span>
                </div>
            `;

            cutFeatures.appendChild(featureElement);

        });


        // Atualiza card ativo
        cutCards.forEach(card => {

            card.classList.toggle(
                "active",
                card.dataset.cut === cutName
            );

        });

    }


    // Pontos do frango

    cutPoints.forEach(point => {

        point.addEventListener("mouseenter", () => {
            selectCut(point.dataset.cut);
        });

        point.addEventListener("click", () => {
            selectCut(point.dataset.cut);
        });

    });


    // Cards inferiores

    cutCards.forEach(card => {

        card.addEventListener("mouseenter", () => {
            selectCut(card.dataset.cut);
        });

        card.addEventListener("click", () => {
            selectCut(card.dataset.cut);
        });

    });


    // Inicializa com Peito
    selectCut("breast");

});