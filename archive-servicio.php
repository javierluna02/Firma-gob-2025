<?php
// Template Name: Catalogo-de-servicios
get_template_part('template-parts/header'); ?>

<section class="section1">

    <div class="capa">

        <img class="chico" src="<?= get_template_directory_uri(); ?>/img/banner-archive-servicio.png" alt="">
    </div>
</section>


<article class="article-section3">

    <section class="section2 ">
        <article class="article-2">
            <span>BUSCA DE MANERA PRECISA AQUELLO QUE NECESITAS CONOCER</span>
            <h1>Todos nuestros servicios</h1>
            <div class="div1-section-2">
                <button><img src="<?= get_template_directory_uri(); ?>/img/icons8-filtrar-100 1.svg" alt="">FILTRAR
                    SERVICIOS</button>
                <input placeholder="Búsqueda..." type="text">
                <div class="search"><img src="<?= get_template_directory_uri(); ?>/img/search-solid.svg" alt=""></div>
            </div>
        </article>
    </section>



    <Section class="section3">
        <div class="div-titulo">
            <h1>Servicios </h1>
        </div>



        <section class="section4">

            <article class="article-3">
                <a href="/pages/Detalles-de-servicios.html" style="text-decoration: none; color: inherit;">
                    <div style=" height: 128px; display:  flex; justify-content:start; padding-left: 0px; border-bottom: solid 0.13rem  #6A707E;">
                        <img src="<?= get_template_directory_uri(); ?>/img/logo-firma.png" alt="">
                    </div>

                    <div class="div3-section-3">
                        <span style="text-align: left;">
                            OGTIC
                        </span>
                        <h1>Portafirmas Firma GOB</h1>
                        <p>Consiste en proveer a los organismos gubernamentales de un portafirmas altamente efectivo
                            para
                            administrar de manera eficiente el flujo de documentos que requieren ser firmados
                            digitalmente.
                        </p>

                    </div>
                </a>
            </article>

            <article class="article-3-1">
                <img src="<?= get_template_directory_uri(); ?>/img/icons8-próximamente-100 1.svg" alt="">
                <div class="div-article-3-1">

                    <img src="<?= get_template_directory_uri(); ?>/img/icons8-nube-96 1.svg" alt="">
                </div>

                <h1>PRÓXIMAMENTE</h1>
                </div>
            </article>
        </section>


        <div class="select-pagination">
            <div class="div3-section-3-select ">
                <select name="1" id="">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                    <option value="1">6</option>
                </select>
            </div>
            <div>
                <ul class="pagination">
                    <li><a href="#">&lt;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="dots">...</li>
                    <li class="active"><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
            </div>

        </div>
        </div>
</article>
<?php get_template_part('template-parts/footer'); ?>