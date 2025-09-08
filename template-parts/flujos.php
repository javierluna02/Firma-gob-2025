<?php

/**
 * Template part for displaying flujos section
 *
 * @package Firma-gob-2025
 */
?>

<section class="section-5" id="beneficios">
    <div class="div-1">
        <h3>ENFOCADOS EN HACER CRECER TU INSTITUCIÓN A NIVEL DIGITAL</h3>
        <h2>Algunos de los beneficios</h2>
    </div>
    <div class="div-2">
        <div class="div-2_div1">

        <?php if (have_rows('beneficios', 'option')) : ?>
            <?php while (have_rows('beneficios', 'option')) : the_row(); ?>
            <article class="Cards">
                <div class="header">
                    <img src="<?php  echo the_sub_field('icono_beneficio'); ?>" alt="Flujos de Firma" style="width: 40px; height: 40px;">
                </div>
                <p><b><?php the_sub_field('beneficio'); ?></b> <?php the_sub_field('detalle_del_beneficio'); ?></p>
            </article>

            <?php endwhile; ?>
        <?php endif; ?>
         
        </div>
        <div class="div-2_div2">
            <img src="<?php echo get_field('imagen_beneficios', 'option'); ?>" alt="Beneficios ilustración">
        </div>
    </div>
</section>