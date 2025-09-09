<?php

/**
 * Template part for displaying section 2 of the home page
 *
 * @package Firma-gob-2025
 */
?>

<?php if (have_rows('Botones', 'option')) : ?>
<section class="section-2">

<?php while (have_rows('Botones', 'option')) : the_row(); ?>



    <a href="<?php echo the_sub_field('url_del_boton'); ?>">
        <button><?php echo the_sub_field('nombre_boton'); ?></button>
    </a>

    <?php endwhile; ?>
</section>
<?php endif; ?>