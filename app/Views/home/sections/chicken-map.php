<section class="chicken-map" id="cortes">

    <div class="container">

        <!-- Cabeçalho -->
        <div class="chicken-map-header">

            <span class="section-label">
                NOSSO FRANGO
            </span>

            <h2>
                Conheça os cortes
                <br>
                do nosso frango.
            </h2>

            <p>
                Passe o mouse sobre os cortes para conhecer
                cada parte do nosso frango.
            </p>

        </div>


        <!-- Área principal -->
        <div class="chicken-map-content">


            <!-- Frango -->
            <div class="chicken-illustration">

                <div class="chicken-image-wrapper">

                    <img
                        src="/Site_Avigro_MVC/public/assets/images/frango.png"
                        alt="Frango AVIGRO"
                        class="chicken-image">

                </div>


                <!-- Peito -->

                <button
                    type="button"
                    class="cut-point cut-breast"
                    data-cut="breast"
                    aria-label="Peito de frango">
                    <span>Peito</span>
                </button>


                <!-- ASA ESQUERDA -->

                <button
                    class="cut-point cut-wing cut-wing-left"
                    data-cut="wing"
                    aria-label="Asa esquerda">
                    <span>Asa</span>
                </button>

                <!-- ASA DIREITA -->

                <button
                    class="cut-point cut-wing cut-wing-right"
                    data-cut="wing"
                    aria-label="Asa direita">
                    <span>Asa</span>
                </button>


                <!-- SOBRECOXA ESQUERDA -->

                <button
                    class="cut-point cut-thigh cut-thigh-left"
                    data-cut="thigh"
                    aria-label="Sobrecoxa esquerda">
                    <span>Sobrecoxa</span>
                </button>

                <!-- SOBRECOXA DIREITA -->

                <button
                    class="cut-point cut-thigh cut-thigh-right"
                    data-cut="thigh"
                    aria-label="Sobrecoxa direita">
                    <span>Sobrecoxa</span>
                </button>


                <!-- COXA ESQUERDA -->

                <button
                    class="cut-point cut-leg cut-leg-left"
                    data-cut="leg"
                    aria-label="Coxa esquerda">
                    <span>Coxa</span>
                </button>

                <!-- COXA DIREITA -->

                <button
                    class="cut-point cut-leg cut-leg-right"
                    data-cut="leg"
                    aria-label="Coxa direita">
                    <span>Coxa</span>
                </button>

            </div>


            <!-- Painel de informações -->

            <div class="cut-information">

                <span class="cut-information-label">
                    CORTE EM DESTAQUE
                </span>


                <h3 id="cut-title">
                    Peito de Frango
                </h3>


                <p id="cut-description">
                    Um dos cortes mais versáteis,
                    ideal para diferentes preparações
                    e receitas.
                </p>


                <!-- Características -->

                <div class="cut-features">


                    <div class="cut-feature">

                        <div class="cut-feature-icon">
                            <i class="fa-solid fa-dumbbell"></i>
                        </div>

                        <div>

                            <strong>
                                Qualidade
                            </strong>

                            <span>
                                Produto selecionado
                                com cuidado.
                            </span>

                        </div>

                    </div>


                    <div class="cut-feature">

                        <div class="cut-feature-icon">
                            <i class="fa-solid fa-utensils"></i>
                        </div>

                        <div>

                            <strong>
                                Versátil
                            </strong>

                            <span>
                                Ideal para diferentes
                                preparações.
                            </span>

                        </div>

                    </div>


                </div>


                <a
                    href="#produtos"
                    class="btn btn-primary">
                    Ver produtos
                </a>

            </div>

        </div>


        <!-- Principais cortes -->

        <div class="main-cuts">


            <div class="main-cuts-title">

                <span>
                    PRINCIPAIS CORTES
                </span>

            </div>


            <!-- Peito -->

            <button
                type="button"
                class="cut-card active"
                data-cut="breast">

                <div class="cut-card-image">

                    <img
                        src="/Site_Avigro_MVC/public/assets/images/cortes/peito.png"
                        alt="Peito de frango">

                </div>

                <strong>
                    Peito
                </strong>

            </button>


            <!-- Asa -->

            <button
                type="button"
                class="cut-card"
                data-cut="wing">

                <div class="cut-card-image">

                    <img
                        src="/Site_Avigro_MVC/public/assets/images/cortes/asa.png"
                        alt="Asa de frango">

                </div>

                <strong>
                    Asa
                </strong>

            </button>


            <!-- Sobrecoxa -->

            <button
                type="button"
                class="cut-card"
                data-cut="thigh">

                <div class="cut-card-image">

                    <img
                        src="/Site_Avigro_MVC/public/assets/images/cortes/sobrecoxa.png"
                        alt="Sobrecoxa de frango">

                </div>

                <strong>
                    Sobrecoxa
                </strong>

            </button>


            <!-- Coxa -->

            <button
                type="button"
                class="cut-card"
                data-cut="leg">

                <div class="cut-card-image">

                    <img
                        src="/Site_Avigro_MVC/public/assets/images/cortes/coxa.png"
                        alt="Coxa de frango">

                </div>

                <strong>
                    Coxa
                </strong>

            </button>


            <!-- Frango Congelado -->

            <button
                type="button"
                class="cut-card"
                data-cut="carcass">

                <div class="cut-card-image">

                    <img
                        src="/Site_Avigro_MVC/public/assets/images/cortes/frango.png"
                        alt="Carcaça de frango">

                </div>

                <strong>
                    Frango Congelado
                </strong>

            </button>


        </div>

    </div>

</section>