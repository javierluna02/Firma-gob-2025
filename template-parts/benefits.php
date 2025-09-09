<div style=" text-align:center; margin: 50px; " class="section-5">
    <h3 style="color: #5eaeff;">LA FIRMA DIGITAL ADAPTADA A CUALQUIER NECESIDAD</h3>
    <h2 style="color: #003579;">¿Por qué Firma GOB?</h2>
</div>

<section style="display: flex; " class="container-grid">
    <div class="card-grid">

        <?php if (have_rows('necesidades', 'option')): ?>

            <?php while (have_rows('necesidades', 'option')):
                the_row(); ?>
                <div class="card">
                    <div class="d-flex align-items-center p-2">
                        <img src="<?php echo get_sub_field('imagen_necesidad'); ?>"
                            alt="<?php echo get_sub_field('imagen_de_la_necesidad') ?>" />
                        <h3><?php echo get_sub_field('titulo_necesidad'); ?></h3>
                    </div>

                    <p><?php echo get_sub_field('detalle_necesidad'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


        <?php if (get_field('imagen_de_la_seccion', 'option')): ?>
            <div style="margin-right: 100px; width: 50px;" class="image-deco">
                <img src="<?php echo esc_url(get_field('imagen_de_la_seccion', 'option')['url']); ?>"
                    alt="<?php echo esc_attr(get_field('imagen_de_la_seccion', 'option')['alt']); ?>">

            </div>
        <?php endif; ?>
</section>