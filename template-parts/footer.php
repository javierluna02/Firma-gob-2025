

<div style=" display:flex; align-items: end; gap: 5px;  justify-content:end; flex-direction: column; " >


    <div  style=" background-color: #0066CC ; border-radius:50%; width: 77px; height: 77px; display: flex; justify-content: center; align-items: center;   ">
                 <img  style="   " src="<?= get_template_directory_uri(); ?>/img/icons8-mensaje-100 2.png" alt="">

    </div>

     <div  style=" background-color: #0066CC ; border-radius:50%; width: 77px; height: 77px; display: flex; justify-content: center; align-items: center;   ">
                 <img  style="   " src="<?= get_template_directory_uri(); ?>/img/Vector 20.png" alt="">

    </div>
</div>


<section class="container-fluid  border-top border-bottom border-secondary px-2 py-5 mt-5"
    style="color: white; width: 100%; background-color: #012E6C;">

    <!-- Layout para dispositivos grandes -->
    <div class="row align-items-center d-none d-lg-flex">
        <!-- Logos -->
        <div class="col-lg-4 d-flex justify-content-center align-items-center border-lg-end border-secondary gap-4 mb-4 mb-lg-0" style="border-right: 0.15rem solid #D8D8D8;">
            <?php
            $first_logo_id = get_field('first_logo_footer', 'option');
            $first_logo_url = wp_get_attachment_image_url($first_logo_id, 'full');
            $second_logo_id = get_field('second_logo_footer', 'option');
            $second_logo_url = wp_get_attachment_image_url($second_logo_id, 'full');
            $third_logo_id = get_field('third_logo_footer', 'option');
            $third_logo_url = wp_get_attachment_image_url($third_logo_id, 'full');
            ?>

            <div >
                <div class=" d-flex align-items-center justify-content-center ">
                    <img src="<?php echo $first_logo_url; ?>" alt="Logo 1" class="img-fluid"
                        style="width: 500px; height: 200px; object-fit: contain;">
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <img src="<?php echo $second_logo_url; ?>" alt="Logo 1" class="img-fluid"
                        style="width: 200px; height: 100px; object-fit: contain;">
                    <img src="<?php echo $third_logo_url; ?>" alt="Logo 2" class="img-fluid"
                        style="width: 200px; height: 100px; object-fit: contain;">
                </div>
            </div>
        </div>

    

    <!-- Información -->
    <div class="col-lg-8" style="padding-left: 90px;">
        <div class="row justify-content-lg-between g-4">
            <div class="col-lg-3">
                <h4 class="my-3">CONÓCENOS</h4>
                <p style="font-size: 0.9rem;"><?php the_field('name ', 'option'); ?></p>
            </div>
            <div class="col-lg-3">
                <h4 class="my-3">CONTÁCTANOS</h4>
                <p style="font-size: 0.9rem;">
                    <?php the_field('tel', 'option'); ?><br>
                    <?php the_field('fax', 'option'); ?><br>
                    <?php the_field('email', 'option'); ?>
                </p>
            </div>
            <div class="col-lg-3">
                <h4 class="my-3">BÚSCANOS</h4>
                <p style="font-size: 0.9rem;">
                    <?php the_field('address', 'option'); ?><br>
                </p>
            </div>
            <div class="col-lg-3">
                <h4 class="my-3">INFÓRMATE</h4>
                <a href="#" class="text-decoration-none d-block mb-2" style="color: white;">Términos de Uso</a>
                <a href="#" class="text-decoration-none d-block mb-2" style="color: white;">Políticas de
                    Privacidad</a>
                <a href="#" class="text-decoration-none d-block mb-2" style="color: white;">Preguntas
                    Frecuentes</a>
            </div>
        </div>
    </div>
    </div>

    <!-- Layout para pantallas pequeñas -->
    <div class="row d-flex d-lg-none text-center">
        <!-- Columna 1 -->
        <div class="col-6 mb-5">
            <div class="mb-5">
                <?php
                $first_logo_id = get_field('first_logo_footer', 'option');
                $first_logo_url = wp_get_attachment_image_url($first_logo_id, 'full');
                ?>
                <img src="<?php echo $first_logo_url; ?>" alt="Logo 1" class="img-fluid"
                    style="width: 100%; max-width: 180px; height: 80px; object-fit: contain;">
            </div>
            <div class="mb-5">
                <h4 class="my-2">CONÓCENOS</h4>
                <p style="font-size: 0.85rem;"><?php the_field('name ', 'option'); ?></p>
            </div>
            <div class="mb-5">
                <h4 class="my-2">BÚSCANOS</h4>
                <p style="font-size: 0.85rem;"><?php the_field('address', 'option'); ?></p>
            </div>
        </div>

        <!-- Columna 2 -->
        <div class="col-6 mb-5">
            <div class="mb-5">
                <?php
                $second_logo_id = get_field('second_logo_footer', 'option');
                $second_logo_url = wp_get_attachment_image_url($second_logo_id, 'full');
                ?>
                <img src="<?php echo $second_logo_url; ?>" alt="Logo 2" class="img-fluid"
                    style="width: 100%; max-width: 180px; height: 80px; object-fit: contain;">
            </div>
            <div class="mb-5">
                <h4 class="my-2">CONTÁCTANOS</h4>
                <p style="font-size: 0.85rem;">
                    <?php the_field('tel', 'option'); ?><br>
                    <?php the_field('fax', 'option'); ?><br>
                    <?php the_field('email', 'option'); ?>
                </p>
            </div>
            <div class="mb-5" style="font-size: 0.85rem; color:white ;">
                <h4 class="my-2">INFÓRMATE</h4>
                <a href="#" class="text-decoration-none d-block mb-2" style="color: white;">Términos de Uso</a>
                <a href="#" class="text-decoration-none d-block mb-2" style="color: white;">Políticas de
                    Privacidad</a>
                <a href="#" class="text-decoration-none d-block mb-2" style="color: white;">Preguntas Frecuentes</a>
            </div>
        </div>
    </div>
</section>



<footer>
    <!-- Certificaciones -->
    <div class="px-3 px-md-5 pt-3 pt-md-4 pb-2" style="color: #003869; " id="certificaciones">
        <span class="fw-bold fs-5">Certificaciones Obtenidas</span>
        <div class="mt-2 mt-md-3 d-flex flex-wrap gap-2">
            <?php if (have_rows('stamps', 'option')): ?>

                <?php while (have_rows('stamps', 'option')):
                    the_row(); ?>
                    <div class="sellos">
                        <a href="<?php echo the_sub_field('href'); ?>" target="_blank" title="<?php the_sub_field('name'); ?>"
                            class="stamp-link">

                            <div class="iframe-wrapper">
                                <iframe src="<?php the_sub_field('src'); ?>" height="100" width="100" frameborder="0"
                                    scrolling="no" style="pointer-events: none;"></iframe>
                            </div>

                        </a>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>




    <div class="accordion accordion-flush" id="certificaciones-movil">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Certificaciones Obtenidas
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#certificaciones-movil">
                <div class="accordion-body">
                    <div class="mt-2 mt-md-3 d-flex flex-wrap gap-2">
                        <?php if (have_rows('stamps', 'option')): ?>

                            <?php while (have_rows('stamps', 'option')):
                                the_row(); ?>
                                <div class="sellos">
                                    <a href="<?php echo the_sub_field('href'); ?>" target="_blank"
                                        title="<?php the_sub_field('name'); ?>" class="stamp-link">

                                        <div class="iframe-wrapper">
                                            <iframe src="<?php the_sub_field('src'); ?>" height="100" width="100"
                                                frameborder="0" scrolling="no" style="pointer-events: none;"></iframe>
                                        </div>

                                    </a>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <!-- Derechos / Redes Sociales -->
    <div class="py-3" style="background-color: #003869; color: white;">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center flex-wrap">
            <p class="mb-2 mb-md-0 text-center text-md-start">© 2025 Todos los Derechos Reservados. Desarrollado por
            </p>
            <div class="d-flex align-items-center fw-bold flex-wrap justify-content-center">
                <p class="mb-0 me-3">SÍGUENOS</p>

                <?php if (get_field('facebook', 'option')): ?>
                    <a href="<?php the_field('facebook', 'option'); ?>" class="text-white text-decoration-none me-2 fs-5"><i
                            class="bi bi-facebook"></i></a>
                <?php endif; ?>

                <?php if (get_field('youtube', 'option')): ?>
                    <a href="<?php the_field('youtube', 'option'); ?>" class="text-white text-decoration-none me-2 fs-5"><i
                            class="bi bi-youtube"></i></a>
                <?php endif; ?>

                <?php if (get_field('twitter', 'option')): ?>
                    <a href="<?php the_field('twitter', 'option'); ?>" class="text-white text-decoration-none me-2 fs-5"><i
                            class="bi bi-twitter-x"></i></a>
                <?php endif; ?>

                <?php if (get_field('instagram', 'option')): ?>
                    <a href="<?php the_field('instagram', 'option'); ?>"
                        class="text-white text-decoration-none me-2 fs-5"><i class="bi bi-instagram"></i></a>
                <?php endif; ?>

                <?php if (get_field('linkedin', 'option')): ?>
                    <a href="<?php the_field('linkedin', 'option'); ?>" class="text-white text-decoration-none me-2 fs-5"><i
                            class="bi bi-linkedin"></i></a>
                <?php endif; ?>
                <?php if (get_field('flickr', 'option')): ?>
                    <a href="<?php the_field('flickr', 'option'); ?>" class="text-white text-decoration-none">logo
                        Flickr</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>