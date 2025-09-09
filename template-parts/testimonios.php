<?php

/**
 * Template part for displaying section 11 of the home page
 *
 * @package Firma-gob-2025
 */
?>

<section style="position: relative; display: flex; justify-content: center;" class="section-11">
    <div class="section11-div1">
        <div class="section-11-div1"
            style="height: 400px; background: #8ce31b; clip-path: polygon(0 0, 50% 0, 0 100%);"></div>
    </div>
<?php if( have_rows('testimonios','option') ): ?>
<div id="testimoniosCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Indicadores rectangulares -->
    <div class="carousel-indicators">
        <?php $i=0; while( have_rows('testimonios','option') ): the_row(); ?>
            <button type="button" data-bs-target="#testimoniosCarousel" data-bs-slide-to="<?php echo $i; ?>"
                class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                aria-label="Slide <?php echo $i+1; ?>"></button>
        <?php $i++; endwhile; ?>
    </div>

    <!-- Items -->
    <div class="carousel-inner">
        <?php $i=0; reset_rows(); while( have_rows('testimonios','option') ): the_row(); 
            $titulo = get_sub_field('titulo');
            $texto_principal = get_sub_field('texto_principal');
            $texto_extra = get_sub_field('texto_extra');
            $imagen = get_sub_field('imagen'); // ACF image field
        ?>
        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
            <div class="div-2">
                <article class="Cards">
                    <div class="header">
                        <?php if($imagen): ?>
                            <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                        <?php endif; ?>
                        <div class="text">
                            <h3><?php echo esc_html($titulo); ?></h3>
                            <p><?php echo esc_html($texto_principal); ?></p>
                        </div>
                    </div>
                    <p><?php echo esc_html($texto_extra); ?></p>
                </article>
            </div>
        </div>
        <?php $i++; endwhile; ?>
    </div>
</div>
<?php endif; ?>


    <div style="padding:  0; position: absolute;left:  0px;  bottom: 135px;" class="div-3">
        <img style="padding: 0;" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 16.svg"
            alt="Vector decorativo">
        <img style="padding: 0; position: relative; top: -1px;"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 15.svg" alt="Vector decorativo">
    </div>

    <div style="padding:  0; position: absolute; right:  0px;   bottom: 135px;" class="div-3">
        <img style="padding: 0;" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 18.svg"
            alt="Vector decorativo">
        <img style="padding: 0; position: relative; top: -1px;"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 13.svg" alt="Vector decorativo">
    </div>

    <div style="padding:  0; position: absolute; left:  0px;;   bottom: -91px;" class="div-3">
        <img style="padding: 0;" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 14.svg"
            alt="Vector decorativo">
        <img style="padding: 0; position: relative; top: -1px;z-index: 1;"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 17.svg" alt="Vector decorativo">
    </div>

    <div style="padding:  0; position: absolute; right:  0px;;   bottom: -121px;" class="div-3">
        <img style="padding: 0;" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 12.svg"
            alt="Vector decorativo">
        <img style="padding: 0; position: relative; top: -1px; z-index: 1;"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Vector 19.svg" alt="Vector decorativo">
    </div>


</section>