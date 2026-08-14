document.addEventListener("DOMContentLoaded", function () {

    const navbar = document.querySelector(".navbar");

    if (!navbar) {
        return;
    }

    function atualizarNavbar() {

        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }

    }

    window.addEventListener("scroll", atualizarNavbar);

    atualizarNavbar();

});