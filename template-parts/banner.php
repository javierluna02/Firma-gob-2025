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

        <div class="div-2_div">
            <h1>
                <?php echo get_field('texto_principal_banner', 'option'); ?><span style="color: <?php echo get_field('color_del_resaltado', 'option'); ?>;">
                  <?php echo get_field('texto_resaltado_banner', 'option'); ?>
                </span>
            </h1>
       
        </div>
    </div>
</section>