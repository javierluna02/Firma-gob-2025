<?php

/**
 * Template part for displaying section 1 of the home page
 *
 * @package Firma-gob-2025
 */
?>

<section class="home-section-1">
    <div class="div-1">
        <img src="<?php echo get_field('imagen_banner', 'option')['url']; ?>" alt="backImg">
    </div>
    <div class="div-2">
        <img class="img-div-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 1.svg" alt="Vector decorativo">
        <div class="div-2_div">
            <h1>
                <?php echo get_field('texto_principal_banner', 'option'); ?><span style="color: <?php echo get_field('color_del_resaltado', 'option'); ?>;">
                  <?php echo get_field('texto_resaltado_banner', 'option'); ?>
                </span>
            </h1>
            <div class="logo-section1">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/firma_Mesa de trabajo 1 copia 6 3.svg" alt="Img Firma">
            </div>
        </div>
    </div>
</section>