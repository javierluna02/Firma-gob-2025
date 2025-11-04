<?php function getMenuInteres()
{ 
    ob_start(); // Iniciar el buffer de salida
?>
    <div class="menu-container" id="menu">  
        <span class="close-btn hideMobile" onclick="toggleMenu(event)">✖</span>
        <h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" class="icon-interes showMobile"><path fill="inherit" d="M0 0v8h8V0zm12 0v8h8V0zm12 0v8h8V0zM0 12v8h8v-8zm12 0v8h8v-8zm12 0v8h8v-8zM0 24v8h8v-8zm12 0v8h8v-8zm12 0v8h8v-8z"></path></svg> 
            <button class="accordion-button top-header-mobile-interes collapsed showMobile">Enlaces de Interés</button>
            <span class="hideMobile">Enlaces de Interés</button>
        </h3>
        <?php if (have_rows('linksGroups', 'option')): ?>
            <div class="accordion accordion-flush" id="accordionLinks">
                <?php
                $i = 0;
                while (have_rows('linksGroups', 'option')):
                    the_row();

                    if (get_sub_field('show') === 'true'):
                        $group_name = get_sub_field('name');
                        $group_links = get_sub_field('links');
                        $group_id = 'collapseGroup' . $i;
                        $is_first = ($i === 0); // solo si querés abrir solo el primero
                ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-<?php echo $i; ?>">
                                <button class="accordion-button m-0" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#<?php echo $group_id; ?>" aria-expanded="<?= $is_first ? 'true' : 'false'; ?>"
                                    aria-controls="<?php echo $group_id; ?>">
                                    <?php echo esc_html($group_name); ?> 
                                </button>
                            </h2>
                            <div id="<?php echo $group_id; ?>" class="accordion-collapse  <?= $is_first ? 'show' : 'collapse'; ?>"
                                aria-labelledby="heading-<?php echo $i; ?>" data-bs-parent="#accordionLinks">
                                <div class="accordion-body">
                                    <div
                                        class="row link-grid row-cols-3 row-cols-md-3 row-cols-lg-3 g-4 text-center">
                                        <?php if (!empty($group_links)): ?>
                                            <?php foreach ($group_links as $link): ?>
                                                <?php if ($link['show'] === 'true'): ?>
                                                    <div class="col">
                                                        <a href="<?php echo esc_url($link['href']); ?>" target="_blank"
                                                            class="text-decoration-none text-dark d-block">
                                                            <?php if (!empty($link['logo'])): ?>
                                                                <?php $img_url = wp_get_attachment_image_url($link['logo'], 'medium'); ?>
                                                                <img src="<?php echo esc_url($img_url); ?>"
                                                                    alt="<?php echo esc_attr($link['label']); ?>"
                                                                    class="rounded-circle bg-light p-2 mb-2"
                                                                    style="width: 60px; height: 60px; object-fit: contain;">
                                                            <?php else: ?>
                                                                <div class="rounded-circle bg-secondary mb-2 d-flex align-items-center justify-content-center"
                                                                    style="width: 60px; height: 60px;">
                                                                    <span class="text-white">?</span>
                                                                </div>
                                                            <?php endif; ?>
                                                            <div><?php echo esc_html($link['label']); ?></div>
                                                        </a>
                                                    </div>
                                        <?php endif;
                                            endforeach;
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php $i++;
                    endif;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
<?php
    return ob_get_clean();
}
