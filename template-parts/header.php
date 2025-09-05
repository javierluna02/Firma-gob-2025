<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Estilos principales -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/navigation.css">
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/modal.css"> -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-base.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/catalogo-de-servicios.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contacto.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/detalles-de-servicios.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/home/home.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/soporte.css">

        <!-- Estilos de home -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/home/section-12.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

</head>

<body>
 <header>
        <section class="primera-seccion-header">
            <img src="<?= get_template_directory_uri(); ?>/img/do.png" alt="">
            <p class="peta">Este es una web oficial del Gobierno de la República Dominicana</p>
        </section>

        <article class="segunda-seccion-header">
            <div class="logo">
                <img src="<?= get_template_directory_uri(); ?>/img/firma_Mesa de trabajo 1 copia 6 3.svg" alt="firma-gob">
                <img src="<?= get_template_directory_uri(); ?>/img/Sin título-1-03 1.svg" alt="Ogtic">
            </div>

            <section class="tercera-seccion-header">
                <div class="buscador">
                    <input  placeholder="¿Qué quieres buscar?" type="text" >
                    <div class="i"><img src="<?= get_template_directory_uri(); ?>/img/search-solid.svg" alt=""></div>
                </div>
                <div class="menu">
                    <img src="<?= get_template_directory_uri(); ?>/img/Icon open-grid-three-up.svg" alt="">
                </div>
                <div class="div-button-header">
                    <button class="button-header"><img src="<?= get_template_directory_uri(); ?>/img/Grupo 3790.svg" alt="">CONTACTO</button>
                </div>
            </section>
        </article>
        <article class="cuarta-seccion-header ">
            <select name="Nosotros" id="">
                <option value="acerca de ">Acerca de </option>
                <option value="beneficios">beneficios</option>
                <option value="institucion">institucion</option>
                <option value="disponibilidad"> disponibilidad</option>
            </select>
            <div>
                <a href="">soporte</a>
            </div>
        </article>
    </header>