<?php

// Template Name: destalle de servicio
get_template_part('template-parts/header');
?>

<section class="home-section-1">
    <div class="div-1">
        <img class="chico" src="<?= get_template_directory_uri(); ?>/img/Group_109[1].png" alt="">
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


<div style="display:flex; justify-content: space-around; align-items: center; height: 100px;" class="">
    <button style=" display: flex;  height: 47px; width:196px ; color:#0066CC; font-size:20px; border-radius:50px; justify-content: center; align-items:center; border: 1px solid #0066CC  ; background: transparent; " class=""><img src="/img/3c706ae16f6df13449764633b36a3f780e49c408.png" alt="">Servicios</button>
    <button style="  background-color: #5EAEFF21; color: #5EAEFF; border: 1px solid  #5EAEFF; width:85px; height: 33px; border-radius:50px; " class="">Etiqueta</button>
</div>

<div style="display: flex; padding:20px;
 flex-direction: column; gap:20px; align-items: center; justify-content: center;">
    <h2>
        Portafirmas Firma Gob
    </h2>
    <p>BUSCA DE MANERA PRECISA AQUELLO QUE NECESITAS CONOCER</p>

    <div>
        <span><img src="" alt="">SEGURO</span>
        <span><img src="" alt="">OPTIMO</span>
        <span><img src="" alt="">EFICAZ</span>
    </div>
    <p style="width: 80%;">Consiste en proveer a los organismos gubernamentales de un portafirmas altamente efectivo para administrar de manera eficiente el flujo de documentos que requieren ser firmados digitalmente. Esta solución tecnológica permite a las instituciones públicas agilizar y automatizar el proceso de firma, reduciendo la dependencia del papel y optimizando la gestión documental.</p>
</div>

<section style=" display:flex; ">
    <div style=" display: flex ; border: 1px solid #0000; flex-direction:column;  width: 50%; ">
        <div style="width:196px;   font-weight: 600; color: white; display:flex; align-items:center; justify-content: center; height: 47px; background-color: #7CC713; border-radius: 23px ;   ">
            Beneficios
        </div>

        <div style="display: flex; justify-content: center;">
            <img src="" alt="">
            <p>Flujos de Firma: Creación de flujos de firmas en cascada, simultáneos y vistos buenos. </p>
        </div>

        <div style="display: flex; justify-content: center;">
            <img src="" alt="">
            <p>Firma desde cualquier lugar: Plataforma adaptable a dispositivos móviles, permitiendo firmar desde donde se encuentre. </p>
        </div>

        <div style="display: flex; justify-content: center;">
            <img src="" alt="">
            <p>Seguridad e Integridad: Los documentos firmados no pueden ser modificados, por lo que se garantiza la autenticidad de este. </p>
        </div>



    </div>


    <div style=" padding:30px; width:50%;">

        <div style=" padding: 20px; width: 520px; border:1px solid #000;
         height: 340px ; display: flex;
         flex-direction: column; justify-content: center; ">
            <div style="display: flex; align-items: center; justify-content: center; ">
                <img style=" width:20px; border:  1px solid #000000" src="" alt="">
                <div>
                    <h4>
                        Información adicional
                    </h4>
                    <ol>
                        <li>Para tramitar este servicio, es necesario que el solicitante haya enviado la carta de solicitud firmada, sellada e inicialada por la máxima autoridad.</li>
                    </ol>
                </div>

            </div>

            <ul>
                Toda documentación adjuntada en el sistema será almacenada en los servidores de la OGTIC (Data Center)
            </ul>

            <a href="">conocer mas</a>
        </div>

    </div>



</section>

<?php
get_template_part('template-parts/footer');

?>