<?php

/**
 * Template part for displaying section 11 of the home page
 *
 * @package Firma-gob-2025
 */
?>

<section class="section-11">
    <div class="section11-div1">
        <div class="section-11-div1" style="height: 400px; background: #8ce31b; clip-path: polygon(0 0, 50% 0, 0 100%);"></div>
    </div>

    <div class="div-2">
        <button class="btn btn-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
            </svg>
        </button>

        <article class="Cards">
            <div class="header">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/Rectangle 18.svg" alt="Imagen de testimonio">
                <div class="text">
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>vehicula purus sit ametvehicula purus sit amet, dictum orci. Proin sit amet turpis sed turpis tempor dictum at eget orci. Mauris fermentum mollis risus, vitae dignissim sapien pharetra non.pharetra non., dictum orci. Proin sit amet turpis sed turpis </p>
                </div>
            </div>
            <p>vehicula purus sit amet, dictum orci. Proin sit amet turpis sed turpis tempor dictum at eget orci. Mauris fermentum mollis risus, vitae dignissim sapien pharetra non.</p>
        </article>

        <button class="btn btn-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
            </svg>
        </button>
    </div>

    <div class="div-3">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/icons/Vector 13.svg" alt="Vector decorativo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/icons/Vector 12.svg" alt="Vector decorativo">
    </div>
</section>