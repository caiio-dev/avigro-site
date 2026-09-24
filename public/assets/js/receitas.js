document.addEventListener("DOMContentLoaded", function () {

    const cards = document.querySelectorAll(".recipe-card");

    cards.forEach(function (card) {

        const video = card.querySelector(".recipe-video");

        if (!video) {
            return;
        }

        // desktop: inicia ao passar o mouse
        card.addEventListener("mouseenter", async function () {

            try {
                video.muted = false;
                await video.play();
            } catch (error) {
                console.log("Não foi possível iniciar o vídeo com áudio:", error);
            }

        });

        // ao tirar o mouse, pausa e volta ao início
        card.addEventListener("mouseleave", function () {

            video.pause();
            video.currentTime = 0;

        });

        // mobile/tablet: toca ao clicar
        card.addEventListener("click", async function (event) {

            // evita interferir no botão "Ver receita"
            if (event.target.closest(".recipe-button")) {
                return;
            }

            if (video.paused) {

                try {
                    video.muted = false;
                    await video.play();
                } catch (error) {
                    console.log("Não foi possível iniciar o vídeo:", error);
                }

            } else {

                video.pause();

            }

        });

    });

});