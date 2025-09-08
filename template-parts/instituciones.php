


<article class="Polygon">
        <img class="poly7" src="<?php echo get_template_directory_uri(); ?>/img/Polygon 7.svg" alt="">
        <img class="Poly8" src="<?php echo get_template_directory_uri(); ?>/img/Polygon 8.svg" alt="">
    </article>


   <?php
$rows = get_field('logos_instituciones', 'option'); // o sin 'option' si está en un post/página
if ($rows && is_array($rows)):

  $logos_por_slide = 5;
  $chunks = array_chunk($rows, $logos_por_slide);
?>
<section class="py-5 text-center" style="background-color:#0A2C74; color:#fff;">
  <div class="container">
    <h5 class="mb-2">¿ESTÁS INSPIRADO? ¡PONTE EN CONTACTO CON NOSOTROS!</h5>
    <h3 class="fw-bold mb-4">Instituciones que confían</h3>

    <div id="logosCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">
      <div class="carousel-inner">
        <?php foreach ($chunks as $index => $chunk): ?>
          <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
            <div class="d-flex justify-content-center gap-4 flex-wrap">
              <?php foreach ($chunk as $row):
                // Manejo flexible del campo "logo" (ACF puede devolver array o ID)
                $img_url = '';
                $img_id = 0;
                if (isset($row['logo']) && is_array($row['logo'])) {
                  $img_url = $row['logo']['url'] ?? '';
                  $img_id  = $row['logo']['ID'] ?? 0;
                } elseif (!empty($row['logo']) && is_numeric($row['logo'])) {
                  $img_id = (int)$row['logo'];
                  $src = wp_get_attachment_image_src($img_id, 'full');
                  $img_url = $src[0] ?? '';
                } elseif (!empty($row['logo'])) {
                  // por si guardaron la URL directamente
                  $img_url = $row['logo'];
                }

                $alt = $img_id ? get_post_meta($img_id, '_wp_attachment_image_alt', true) : '';
                if ($img_url): ?>
                  <img src="<?php echo esc_url($img_url); ?>"
                       alt="<?php echo esc_attr($alt ?: 'Logo'); ?>"
                       class="rounded-circle bg-white p-3"
                       style="width:100px; height:100px; object-fit:contain;">
              <?php endif; endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#logosCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#logosCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
</section>
<?php endif; ?>

    <article style="position: relative; top: -50px;" class="Polygon2">
        <img height="100px" width="50%" class="poly9" src="<?php echo get_template_directory_uri(); ?>/img/Polygon 9.svg" alt="">
        <img height="53.0px" width="50%" class="poly10" src="<?php echo get_template_directory_uri(); ?>/img/Polygon 10.svg" alt="">
    </article>
