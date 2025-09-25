<?php 

// Template Name : catalogo de servicios 
  
?>



<section class="home-section-1">
    <div class="div-1">
      <img class="chico" src="<?= get_template_directory_uri(); ?>/img/Group_108_(2)[1].png" alt="">
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