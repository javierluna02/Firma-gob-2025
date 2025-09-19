<?php
// Template Name: Contacto

get_template_part('template-parts/header');
?>
<style>
    /* ----------- SECCIÓN CONTACTO ----------- */
    * {
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .contacto-section-3 {
        display: grid;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }

    .contacto-section1 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(11rem, 1fr));
        gap: 1.5rem;
        padding: 6rem 2rem;
    }

    .contacto-div1 {
        border-radius: 50px;
        background: #003579;
        color: white;
        display: grid;
        place-items: center;
        padding: 0.5rem 1rem;
    }

    .contacto-section2 {
        display: grid;
        justify-items: center;
        text-align: center;
        gap: 0.5rem;
    }

    .contacto-section2 span {
        color: #003579a1;
        font-size: 1.2rem;
    }

    .contacto-section2 h1 {
        color: #003579;
        font-size: 2.2rem;
        font-weight: 600;
    }

    .contacto-div2 {
        display: grid;
        grid-auto-flow: column;
        justify-content: center;
        align-items: center;
        gap: 0.8rem;
        margin-top: 1.2rem;
    }

    .contacto-div2 span {
        font-weight: 600;
        color: #003579;
    }

    .contenedor {
        max-width: 100%;
        width: 100rem;
        display: grid;
        justify-content: center;
        border: 1px solid #707070;
        border-radius: 1rem;
        margin: 1rem;
        background-color: white;
        transform: scale(0.95);
    }

    h3 {
        color: #0066CC;
        font-size: 1rem;
    }

    .campos {
        margin: 1rem;
        color: #0035796B;
        text-align: start;
    }

    .section2 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 4rem;
        padding: 3rem;
    }

    .cont1-input input,
    .cont2-input input,
    .cont3-input input {
        width: 100%;
        max-width: 100%;
        border: 2px solid #EBEBEB;
        font-family: "Poppins", sans-serif;
        ;
    }

    .cont3-input {
        display: grid;
        gap: 0.5rem;
        padding: 3rem;
    }

    .cont3-input h3 {
        text-align: start;
    }

    .div-text,
    .div-text2 {
        display: grid;
        padding: 1.2rem;
        justify-items: center;
    }

    .div-text {
        color: #8fafd9;
    }

    .div-text2 {
        color: #1a579a;
    }

    .div-text3 span {
        color: #0080ff;
    }

    .check {
        display: grid;
        grid-auto-flow: column;
        gap: 0.5rem;
    }

    .check span {
        color: #003579;
    }

    .checkbox {
        width: 2rem;
        height: 2rem;
    }

    .deseas-recibir {
        font-size: 1.2rem;
    }

    .footer-modal {
        display: grid;
        justify-content: end;
        padding: 1.2rem;
    }

    .footer-modal button {
        background: #013579;
        color: white;
        min-width: 10rem;
        height: 2.5rem;
        border: none;
        border-radius: 1.5rem;
        cursor: pointer;
    }

    input {
        height: 2.2rem;
        outline: none;
        padding: 0.3rem 0.5rem;
        border-radius: 0.3rem;
    }

    input::placeholder {
        color: #707070;
        font-size: 1rem;
        font-family: "Poppins", sans-serif;
    }

    /* ========================================
   MEDIA QUERIES RESPONSIVE PARA CONTACTO
   ======================================== */

    /* Tablet (768px - 1199px) */
    @media (max-width: 1199px) {
        .contacto-section1 {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            padding: 4rem 1.5rem;
            gap: 1rem;
        }

        .contacto-section2 h1 {
            font-size: clamp(1.8rem, 4vw, 2.2rem);
        }

        .contacto-section2 span {
            font-size: clamp(1rem, 2.5vw, 1.2rem);
        }

        .contenedor {
            width: 95%;
            transform: scale(1);
            margin: 1rem auto;
        }

        .section2 {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }

        .cont1-input input,
        .cont2-input input,
        .cont3-input input {
            max-width: 100%;
            height: 2.5rem;
        }

        .footer-modal button {
            min-width: 8rem;
            height: 2.5rem;
        }
    }

    /* Mobile (320px - 767px) */
    @media (max-width: 767px) {
        .contacto-section1 {
            grid-template-columns: 1fr;
            padding: 2rem 1rem;
            gap: 0.8rem;
        }

        .contacto-div1 {
            padding: 0.8rem 1.2rem;
            font-size: 0.9rem;
        }

        .contacto-section2 {
            padding: 0 1rem;
        }

        .contacto-section2 h1 {
            font-size: clamp(1.5rem, 6vw, 2rem);
            line-height: 1.3;
        }

        .contacto-section2 span {
            font-size: clamp(0.9rem, 3.5vw, 1.1rem);
        }

        .contenedor {
            width: 100%;
            margin: 0.5rem;
            border-radius: 0.8rem;
        }

        .section2 {
            grid-template-columns: 1fr;
            gap: 1rem;
            padding: 1rem;
        }

        .cont1-input,
        .cont2-input {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .cont1-input input,
        .cont2-input input,
        .cont3-input input {
            width: 100%;
            height: 2.8rem;
            font-size: 0.9rem;
        }

        .cont3-input {
            padding: 1rem;
        }

        .cont3-input input {
            min-height: 6rem;
        }

        .div-text,
        .div-text2 {
            padding: 1rem;
            text-align: center;
        }

        .check {
            grid-auto-flow: row;
            gap: 0.8rem;
            justify-items: start;
        }

        .checkbox {
            width: 1.5rem;
            height: 1.5rem;
        }

        .deseas-recibir {
            font-size: 1rem;
        }

        .footer-modal {
            justify-content: center;
            padding: 1rem;
        }

        .footer-modal button {
            width: 100%;
            max-width: 15rem;
            height: 3rem;
            font-size: 1rem;
        }

        h3 {
            font-size: 0.9rem;
        }

        .campos {
            margin: 0.8rem;
            font-size: 0.85rem;
        }

        input::placeholder {
            font-size: 0.9rem;
        }
    }

    /* Mobile pequeño (320px - 480px) */
    @media (max-width: 480px) {
        .contacto-section1 {
            padding: 1.5rem 0.8rem;
        }

        .contacto-div1 {
            padding: 0.6rem 1rem;
            font-size: 0.8rem;
            border-radius: 25px;
        }

        .contacto-section2 h1 {
            font-size: clamp(1.3rem, 7vw, 1.8rem);
        }

        .contacto-section2 span {
            font-size: clamp(0.8rem, 4vw, 1rem);
        }

        .contenedor {
            margin: 0.3rem;
            border-radius: 0.6rem;
        }

        .section2 {
            padding: 0.8rem;
            gap: 0.8rem;
        }

        .cont1-input input,
        .cont2-input input,
        .cont3-input input {
            height: 2.5rem;
            font-size: 0.85rem;
        }

        .cont3-input input {
            min-height: 5rem;
        }

        .div-text,
        .div-text2 {
            padding: 0.8rem;
        }

        .footer-modal {
            padding: 0.8rem;
        }

        .footer-modal button {
            height: 2.8rem;
            font-size: 0.9rem;
        }

        .REDES {
            display: flex;
            flex-direction: column;
            padding: 30px;
            max-width: 100%;
        }

        h3 {
            font-size: 0.85rem;
        }

        .gestor {
            flex-direction: column;
        }

        .campos {
            margin: 0.6rem;
            font-size: 0.8rem;
        }

        input::placeholder {
            font-size: 0.85rem;
        }
    }

    /* Orientación landscape en mobile */
    @media (max-width: 767px) and (orientation: landscape) {
        .contacto-section1 {
            padding: 1.5rem 1rem;
        }

        .contacto-section2 {
            padding: 1rem;
        }

        .contenedor {
            margin: 0.5rem auto;
            max-width: 90%;
        }

    }
</style>

<body class="" style="display: flex; flex-direction: column; justify-content: center;">


    <section class="contacto-section1">
        <div class="contacto-div1">MENSAJE</div>
        <div class="contacto-div1">CONTACTO</div>
        <div class="contacto-div1">REDES SOCIALES</div>
        <div class="contacto-div1">UBICACIÓN</div>
        <div class="contacto-div1">AMBIENTE PRUEBA</div>
    </section>


    <section class="contacto-section2">
        <span>¿PODEMOS HACER ALGO POR TI?</span>
        <h1>¿Estás inspirado? ¡Ponte en contacto con nosotros!</h1>
    </section>

    </section>

    <section style="display: flex; justify-content: center;">
        <article id="" class="contenedor">
            <div class="campos">
                <span>*Todos los campos marcados son obligatorios</span>
            </div>

            <section class="section2">
                <article class="cont1-input">
                    <div class="div-input1">
                        <h3>Nombre:</h3>
                        <input placeholder="Nombre Completo" type="text">
                    </div>
                    <div class="div-input2">
                        <h3>Institución</h3>
                        <input placeholder="Institución" type="text">
                    </div>
                </article>

                <article class="cont2-input">
                    <div class="div-input1">
                        <h3>Dirección de correo electrónico:</h3>
                        <input placeholder="Correo Electrónico" type="text">
                    </div>
                    <div class="div-input2">
                        <h3>Número de teléfono:</h3>
                        <input placeholder="Número de teléfono" type="text">
                    </div>

                </article>

            </section>
            <section style="" class="cont3-input">
                <h3>Mensaje:</h3>
                <input placeholder="Asunto" type="text">
            </section>

            <div class="div-text">
                <span>Formatos permitidos: PDF, DOCX</span>
            </div>
            <div class="div-text2">
                <span>Tus datos personales se utilizarán para procesar la solicitud y apoyar tu experiencia en este
                    sitio
                    web como indica nuestra Política de Privacidad </span>
            </div>
            <div style="padding: 20px;" class="div-text3">
                <span class="deseas-recibir">¿Deseas recibir información sobre las promociones de Firma GOB?</span>
                <div class="check">
                    <input class="checkbox" type="checkbox">
                    <span>Marca esta casilla para dar tu consentimiento al tratamiento de datos personales con fines de
                        marketing/ventas directas como indica nuestra Política de Privacidad</span>
                </div>
            </div>

            <div class="footer-modal">
                <button type="submit">Enviar</button>
            </div>
        </article>
    </section>

    <section class="REDES"
        style="width: 100%; align-items: center; gap: 20px; padding: 20px;  display: flex; justify-content: center; background: #003579; height: 493px;">

        <div style=" width: 100%; display: flex; gap: 20px; height:252px ; background: #FFFFFF; border-radius: 20px; ">

            <div style="color: blue;  display: flex; justify-content: center; align-items: center; padding: 20px; flex-direction: column; gap: 20px;">
                <div style="display: flex; color: #003579;  justify-content: center; align-items: center;">
                    <img src="/img/icons8-mensaje-de-telefono-50 1.png" alt="">
                    Teléfono: (809) 286-1009 ext.2276 /
                    (809) 286-1009 ext.2225 / (809) 286-1009 ext.2239
                </div>

                <div>
                    Correo electrónico: servicios@ogtic.gob.do /
                    info@ogtic.gob.do
                </div>
            </div>
        </div>

        <div
            style="display: flex; align-items: center; justify-content: center; padding: 0.2rem; flex-direction: column; width: 100%; height:252px ; border-radius: 20px; background: #FFFFFF;">
            <div>¿Deseas recibir información sobre las promociones de Firma GOB?</div>
            <div style=" flex-wrap: wrap; display: flex; align-items: center; justify-content: center; text-align: center; ">
                <img src="/img/Rectangle 119.png" alt="">
                <img src="/img/Rectangle 118.png" alt="">
                <img src="/img/Rectangle 117.png" alt="">
                <img src="/img/Rectangle 116.png" alt="">
            </div>
        </div>
    </section>

    <section style="display: flex ; justify-content: center; flex-direction: column; padding-top: 20px;">
        <div style=" text-align:center; display: flex; justify-content: center; flex-direction: column;">
            <span style="color: #003579;">ESTAMOS MÁS CERCA DE TI</span>
            <h1 style="font-size: 36px; padding-bottom: 30px; color: #003579; line-height: 100%; ">
                Conoce nuestra ubicación
            </h1>
        </div>
        <div style="padding: 20px 20px 20px 20px ; justify-content: start;  display: flex; flex-direction: column;">
            <img src="<?= get_template_directory_uri(); ?>/img/Slice 3 (1) 1.png" alt="">
            <div
                style="width: 50%; border-radius:  0px 10px 0px 10px ; position: relative; bottom: 30px; background: #003579; color: white ; padding: 10px; ">
                Edificio Vista, Av. Rómulo Betancourt 311, Santo Domingo
            </div>
        </div>

    </section>

    <section style="display: flex ;  flex-direction: column; justify-content: center; align-items: center;">
        <span>LA FIRMA ADAPTADA A CUALQUIER NECESIDAD</span>
        <h1>Fácil Integración</h1>
        <div class="gestor" style=" display: flex; justify-content: center;  align-items: center; gap: 20px;">
            <div style="padding:0px;">
            <img style="padding: 20px;" src="<?= get_template_directory_uri(); ?>/img/Rectangle 112.png" alt="">
            </div>
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <span style="width: 310px;">Con tu gestor documental o cualquier otra herramienta eBusiness</span>
                <button style="width: 289px; height: 47px; border-radius: 23px; border: none; color: white ;  background: #7CC713; ">SOLICITAR PRUEBA</button>
            </div>
        </div>
    </section>

</body>

<?php
get_template_part('template-parts/footer');

?>