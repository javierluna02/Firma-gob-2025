<?php
// Template Name: Soporte

get_template_part('template-parts/header');
?>

<style>
  * {
    padding: 0;
    margin: 0;
    font-family: "Poppins", sans-serif;
  }

  .soporte-capa {
    width: 100%;
    height: 250px;
    display: flex;
    background-color: rgba(0, 53, 121, 0.78);
    gap: 10%;
    align-items: center;
    justify-content: space-between;
  }

  .soporte-section-1 {
    width: 100%;
    height: 250px;
    background-image: url("../img/Rectangle 75.svg");
    background-size: cover;
    object-fit: cover;
    display: flex;
    justify-content: space-between;
    align-items: end;
    color: white;
  }

  .soporte-div2 {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .soporte-div2 h1 {
    font-size: 36px;
    margin-left: 300px;
  }

  .div3-img {
    width: 272px;
  }

  .div-soporte-img1 {
    display: flex;
    justify-content: end;
    align-items: start;
  }

  .div2-soporte-2 {
    height: 85px;
    display: flex;
    gap: 5px;
    justify-content: center;
    align-items: center;
  }

  .soporte-section-2 {
    width: 100%;
    height: 430px;
    background: #003579;
  }

  .div3-soporte {
    display: flex;
    align-items: center;
    margin-top: 10px;
  }

  .div-donde {
    width: 476px;
    height: 61px;
    color: white;
    background-color: #0066cc;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 23px;
  }

  .line1 {
    display: flex;
    justify-content: end;
  }

  .line2 {
    display: flex;
    justify-content: start;
    position: relative;
    top: -20px;
  }

  .aside-soporte {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0px 0px 0px 10px;
  }

  .article-soporte-1 {
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 50px;
    color: white;
    font-weight: 700;
    font-size: 20px;
  }

  .article-soporte-2 {
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 50px;
    color: white;
    font-weight: 700;
    font-size: 20px;
  }

  .soporte-section-3-div1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    padding: 20px;
    position: relative;
    top: 40px;
  }

  .soporte-section-3 {
    height: 200px;
    display: flex;
    flex-direction: column;
    margin-top: 20px;
  }

  .soporte-section-3-div1 h1 {
    color: #003579;
    font-size: 36px;
  }

  .soporte-section-3-div1 span {
    color: #003579a1;
  }

  .accordion {
    border-radius: 10px;
    overflow: hidden;
    padding: 0px 100px 0px 100px;
    height: 400px;
    gap: 20px;
    display: flex;
    flex-direction: column;

  }

  .accordion-item {
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
  }

  .accordion-item button {
    background-color: white;
    color: black;
    border: 1px solid #bdd1ec;
  }

  .accordion-header {
    width: 100%;
    padding: 15px;
    border-radius: 10px;
    background: #0055a4;
    color: #fff;
    font-weight: bold;
    text-align: left;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: none;
    cursor: pointer;
    font-size: 16px;
  }

  .accordion-header .arrow {
    transition: transform 0.3s ease;
  }

  .accordion-header.active .arrow {
    transform: rotate(90deg);
  }

  .accordion-content {
    background: #f9f9f9;
    padding: 0 15px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
  }

  .accordion-content.open {
    padding: 15px;
    max-height: 300px;
    /* ajusta según el contenido */
  }

  .guia-plataforma {
    position: relative;
  
    /* azul de fondo */
    color: white;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: "poppins", sans-serif;
  }

  .guia-plataforma .contenido {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 60px;
    width: 100%;
    max-width: 1100px;
  }

  .guia-plataforma .video {
    flex: 1;
  }

  .guia-plataforma .texto {
    flex: 1;
    gap: 20px;
  }

  .guia-plataforma h2 span {
    background: #ffc107;
    color: #003579;
    padding: 3px 8px;
    border-radius: 4px;
    margin-bottom: 50px;
  }

  .soporte-section-4 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }

  .soporte-section-4 h1 {
    color: #003579;
    font-size: 36px;
  }

  .soporte-section-4 p {
    color: #003579a1;
  }

  .soporte-section-final {
    border-radius: 10px;
    overflow: hidden;
    padding: 0px 100px 0px 100px;
    height: 100px;
    gap: 20px;
    display: flex;
    flex-direction: column;
  }

  /* ========================================
   MEDIA QUERIES RESPONSIVE PARA SOPORTE
   ======================================== */

  /* Tablet (768px - 1199px) */
  @media (max-width: 1199px) {
    .soporte-capa {
      height: auto;
      min-height: 200px;
      padding: 20px;
      gap: 5%;
    }

    .soporte-section-1 {
      height: auto;
      min-height: 200px;
      padding: 0;
    }

    .div2 h1 {
      font-size: clamp(2rem, 4vw, 2.5rem);
      margin-left: 50px;
    }

    .div3-img {
      width: 200px;
      display: none;
    }

    .div-donde {
      width: 100%;
      max-width: 400px;
      height: 50px;
      font-size: 0.9rem;
    }

    .aside-soporte {
      padding: 100px;
      gap: 15px;
    }

    .article-soporte-1,
    .article-soporte-2 {
      font-size: 1rem;
      gap: 30px;
    }

    .soporte-section-3-div1 h1 {
      font-size: clamp(2rem, 4vw, 2.5rem);
    }

    .accordion {
      padding: 0 50px;
      height: auto;
    }

    .guia-plataforma {
      padding: 30px;
    }

    .guia-plataforma .contenido {
      gap: 40px;
    }

    .soporte-section-4 h1 {
      font-size: clamp(2rem, 4vw, 2.5rem);
    }

    .soporte-section-final {
      padding: 0 50px;
      height: auto;
    }
  }

  /* Mobile (320px - 767px) */
  @media (max-width: 767px) {
    .soporte-capa {
      flex-direction: column;
      height: auto;
      padding: 15px;
      gap: 20px;
    }

    .soporte-section-1 {
      flex-direction: column;
      height: auto;
      padding: 15px;
      text-align: center;
    }

    .div2 {
      gap: 15px;
      align-items: center;
    }

    .div2 h1 {
      font-size: clamp(1.5rem, 6vw, 2rem);
      margin-left: 0;
      text-align: center;
    }

    .div3-img {
      width: 150px;
    }

    .div-soporte-img1 {
      justify-content: center;
    }

    .div2-soporte-2 {
      height: auto;
      flex-direction: column;
      text-align: center;
      padding: 15px;
      gap: 10px;
    }

    .soporte-section-2 {
      height: auto;
      padding: 20px 15px;
    }

    .div3-soporte {
      flex-direction: column;
      gap: 15px;
    }

    .div-donde {
      width: 100%;
      height: 45px;
      font-size: 0.85rem;
    }

    .line1,
    .line2 {
      justify-content: center;
    }

    .aside-soporte {
      flex-direction: column;
      padding: 0 20px;
      gap: 20px;
    }

    .article-soporte-1,
    .article-soporte-2 {
      height: auto;
      text-align: center;
      font-size: 0.9rem;
      gap: 20px;
    }

    .soporte-section-3 {
      height: auto;
      margin-top: 10px;
    }

    .soporte-section-3-div1 {
      flex-direction: column;
      gap: 15px;
      top: 20px;
      padding: 15px;
    }

    .soporte-section-3-div1 h1 {
      font-size: clamp(1.5rem, 6vw, 2rem);
      text-align: center;
    }

    .soporte-section-3-div1 span {
      text-align: center;
    }

    .accordion {
      padding: 0 20px;
      height: auto;
      gap: 15px;
    }

    .accordion-header {
      padding: 12px;
      font-size: 0.9rem;
    }

    .accordion-content.open {
      padding: 12px;
      max-height: 200px;
    }

    .guia-plataforma {
      padding: 20px;
      text-align: center;
    }

    .guia-plataforma .contenido {
      flex-direction: column;
      gap: 30px;
    }

    .guia-plataforma .video {
      width: 100%;
    }

    .guia-plataforma .texto {
      width: 100%;
    }

    .guia-plataforma h2 span {
      margin-bottom: 20px;
    }

    .soporte-section-4 {
      padding: 15px;
      text-align: center;
    }

    .soporte-section-4 h1 {
      font-size: clamp(1.5rem, 6vw, 2rem);
    }

    .soporte-section-final {
      padding: 0 20px;
      height: auto;
      gap: 15px;
    }
  }

  /* Mobile pequeño (320px - 480px) */
  @media (max-width: 480px) {
    .soporte-capa {
      flex-direction: row;
    }

    .soporte-section-1 {
      padding: 0;
    }

    .div2 h1 {
      font-size: clamp(1.3rem, 7vw, 1.8rem);
    }

    .div3-img {
      width: 120px;
    }

    .div2-soporte-2 {
      padding: 10px;
    }

    .soporte-section-2 {
      padding: 15px 10px;
    }

    .div-donde {
      height: 40px;
      font-size: 0.8rem;
    }

    .aside-soporte {
      padding: 0 15px;
    }

    .article-soporte-1,
    .article-soporte-2 {
      font-size: 0.85rem;
    }

    .soporte-section-3-div1 {
      padding: 10px;
    }

    .soporte-section-3-div1 h1 {
      font-size: clamp(1.3rem, 7vw, 1.8rem);
    }

    .accordion {
      width: 100%;
    }

    .aside-soporte .chica-img {
      width: 0%;
    }

    .accordion-header {
      /* padding: 10px; */
      font-size: 0.85rem;
    }

    .guia-plataforma {
      padding: 15px;
    }

    .soporte-section-4 {
      padding: 10px;
    }

    .soporte-section-4 h1 {
      font-size: clamp(1.3rem, 7vw, 1.8rem);
    }

    .soporte-section-final {
      padding: 0 15px;
    }

    .aside-soporte-2 {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding-left: -20px;
    }

  }

  /* Orientación landscape en mobile */
  @media (max-width: 767px) and (orientation: landscape) {
    .soporte-capa {
      flex-direction: row;
      padding: 10px 20px;
    }

    .soporte-section-1 {
      flex-direction: row;
      padding: 10px 20px;
    }

    .div2 h1 {
      font-size: clamp(1.5rem, 4vw, 2rem);
    }

    .aside-soporte {
      flex-direction: row;
      padding: 0 30px;
    }
  }
</style>

<body>
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



  </div>
  <div class="div2-soporte-2">
    <img class="chico" src="<?= get_template_directory_uri(); ?>/img/Group 22.svg" alt="">
    <span style="font-weight: 800; color:#003579 ;">Comprometidos :</span>
    <p style="color: #003579;"> Procuramos brindarte una experiencia de calidad</p>
  </div>


  <section style="padding:30px;" class="soporte-section-2">
    <div class="line1">
      <img src="<?= get_template_directory_uri(); ?>/img/Line 14.svg" alt="">
    </div>


    <aside  class="aside-soporte">

      <article class="article-soporte-1">
        <div class="div3-soporte">
          <div class="div-donde">¿Dónde puedo incluir Firma Gob?</div>
        </div>
        <div style="gap: 5px; display: flex; align-items: center; width:90%;"><img src="<?= get_template_directory_uri(); ?>/img/Rectangle 89.svg" alt="">

          Certificaciones dirigidas a instituciones gubernamentales
        </div>
        <div style="display: flex; align-items: center; gap: 5px;"><img src="<?= get_template_directory_uri(); ?>/img/Rectangle 90.svg" alt="">

          Contratos</div>
        <div style="display: flex; align-items: center;"><img src="<?= get_template_directory_uri(); ?>/img/Rectangle 95.svg" alt="">
          Carta Laboral
        </div>
      </article>

      <article class="article-soporte-2">
        <div style="display: flex; align-items: center; gap: 5px;"><img src="<?= get_template_directory_uri(); ?>/img/Rectangle 93.svg" alt="">

          Solicitudes de
          Vacaciones</div>
        <div style="display: flex; align-items: center; gap: 5px;"><img src="<?= get_template_directory_uri(); ?>/img/Rectangle 94.svg" alt="">
          Cualquier otro
          documento que sea Digital</div>
      </article>

      <article class="chica-img">
        <img src="<?= get_template_directory_uri(); ?>/img/chica.png" alt="">

      </article>

    </aside>
    <div class="line2">
      <!-- <img src="<?= get_template_directory_uri(); ?>/img/Line 14.svg" alt=""> -->

    </div>
  </section>


  <section class="soporte-section-3">

    <div class="soporte-section-3-div1">
      <img src="<?= get_template_directory_uri(); ?>/img/Group 11.png" alt="">

      <div>
        <span>A FAVOR DE BRINDARTE UN SERVICIO DE CALIDAD Y CRECIMIENTO </span>
        <h1>Preguntas frecuentes</h1>
      </div>
      <img src="<?= get_template_directory_uri(); ?>/img/Group 11.png" alt="">
    </div>

  </section>



  <div class="accordion">
    <div class="accordion-item">
      <button class="accordion-header">
        <span>¿Si tengo varias peticiones en la bandeja de entrada puedo firmarlas todas a la vez?</span>
        <span class="arrow"><img src="<?= get_template_directory_uri(); ?>/img/Icon ionic-ios-arrow-forward.svg" alt="">
        </span>
      </button>
      <div class="accordion-content">
        <p style="color: #231F20;">
          Sí, puedes seleccionarlas todas desde tu bandeja de entrada y firmarlas al mismo tiempo
          sin necesidad de hacerlo una por una.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <button class="accordion-header">
        <span>¿Puedo firmar con Firma GOB desde el móvil?</span>
        <span class="arrow"><img src="<?= get_template_directory_uri(); ?>/img/Icon ionic-ios-arrow-forward.svg" alt="">
        </span>
      </button>
      <div class="accordion-content">
        <p style="color: #231F20;">
          FIRMA GOB dispone de una interfaz adaptada 100% a dispositivos móviles, permitiendo la ejecución
          de las tareas íntegramente en el móvil. Además, dispone de aplicaciones nativas gratuitas
          publicadas en la Apple Store y Play Store.
        </p>
      </div>

    </div>
    <div class="accordion-item">
      <button class="accordion-header">
        <span>¿Puedo firmar con Firma GOB desde el móvil?</span>
        <span class="arrow"><img src="<?= get_template_directory_uri(); ?>/img/Icon ionic-ios-arrow-forward.svg" alt=""></span>
      </button>
      <div class="accordion-content">
        <p style=" color: #231F20;">
          FIRMA GOB dispone de una interfaz adaptada 100% a dispositivos móviles, permitiendo la ejecución
          de las tareas íntegramente en el móvil. Además, dispone de aplicaciones nativas gratuitas
          publicadas en la Apple Store y Play Store.
        </p>
      </div>

    </div>
  </div>


  <script>
    document.querySelectorAll(".accordion-header").forEach(button => {
      button.addEventListener("click", () => {
        const content = button.nextElementSibling;
        const isActive = button.classList.contains("active");

        // Cerrar todos
        document.querySelectorAll(".accordion-header").forEach(btn => {
          btn.classList.remove("active");
          btn.nextElementSibling.classList.remove("open");
        });

        // Si no estaba activo, abrir este
        if (!isActive) {
          button.classList.add("active");
          content.classList.add("open");
        }
      });
    });
  </script>

<section 
  style= " display:flex; align-items:center; justify-content:center; background-size:cover;  height: 100vh; background-image: url('<?php echo esc_url( get_template_directory_uri() . '/img/Group_111[2].png' ); ?>');" 
  class="guia-plataforma">

    <div class="contenido">
      <div class="video">
        <iframe style="border-radius: 20px;" width="100%" height="315"
          src="https://www.youtube.com/embed/TU_VIDEO"
          title="YouTube video"
          frameborder="0"
          allowfullscreen>
        </iframe>
      </div>
      <div><img src="<?= get_template_directory_uri(); ?>/img/Vector 27.svg" alt="">

    </div>
      <div class="texto">
        <h2>GUÍA DE COMO UTILIZAR LA <span>PLATAFORMA</span></h2>
        <p>
          A partir de ahora, las instituciones tienen la oportunidad de facilitar la gestión de documentos pendientes por firmar, dotándolos de un flujo de firmas y/o visto bueno, permitiendo la visualización, firma digital, validación y custodia de <br><br> todo tipo de documentos en formato electrónico.Esto es posible gracias al Hardware Security Module (HSM), donde creamos grupos individuales por cada una de las instituciones. ​
        </p>
      </div>
    </div>
  </section>


  <section class="soporte-section-4">
    <p>LA TRANSPARENCIA GENERA LEGITIMIDAD</p>
    <h1>Políticas</h1>


  </section>


  <div class="soporte-section-final">
    <div class="accordion-item">
      <button style="background-color:white; color: black; border: 1px solid #BDD1EC;" class="accordion-header">
        <span>¿Puedo firmar con Firma GOB desde el móvil?</span>
        <span class="arrow"><img src="/img/Icon ionic-ios-arrow-forward.svg" alt=""></span>
      </button>
      <div class="accordion-content">
        <p>
          FIRMA GOB dispone de una interfaz adaptada 100% a dispositivos móviles, permitiendo la ejecución
          de las tareas íntegramente en el móvil. Además, dispone de aplicaciones nativas gratuitas
          publicadas en la Apple Store y Play Store.
        </p>
      </div>
    </div>
  </div>


</body>
<?php
// Template Name: Contacto

get_template_part('template-parts/footer');
?>