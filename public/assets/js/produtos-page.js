document.addEventListener("DOMContentLoaded", function () {

    const filters =
        document.querySelectorAll(".product-filter");

    const products =
        document.querySelectorAll(".product-page-card");


    if (!filters.length || !products.length) {
        return;
    }


    filters.forEach(function (button) {

        button.addEventListener("click", function () {

            const selectedCategory =
                button.dataset.filter;


            /* ========================================
               BOTÃO ATIVO
            ======================================== */

            filters.forEach(function (filter) {

                filter.classList.remove("active");

            });


            button.classList.add("active");


            /* ========================================
               FILTRAR PRODUTOS
            ======================================== */

            products.forEach(function (product) {

                const productCategory =
                    product.dataset.category;


                const shouldShow =
                    selectedCategory === "todos" ||
                    selectedCategory === productCategory;


                if (shouldShow) {

                    product.classList.remove(
                        "is-hidden"
                    );

                } else {

                    product.classList.add(
                        "is-hidden"
                    );

                }

            });

        });

    });

});