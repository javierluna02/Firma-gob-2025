<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        <?php  echo get_bloginfo('name');
          ?>
    </title>
    <!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo time(); ?>" />




    <script src="https://cdn.jsdelivr.net/gh/ogticrd/official-header/main.js" defer theme="dark"></script>


        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/navigation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-base.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/catalogo-de-servicios.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contacto.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/detalles-de-servicios.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/home/home.css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/soporte.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css/home/section-12.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Bundle with Popper   -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        // ocultarMenuInteresMobile();
        $('.top-header-mobile-interes').on('click', function() {
            this.classList.toggle('show');
            this.classList.toggle('collapsed');
            document.querySelector('.navbar-interes .accordion.accordion-flush').classList.toggle(
                'show');
            ocultarMenuInteresMobile();
        });
    });

    function ocultarMenuInteresMobile() {
        $('.navbar-interes .accordion-flush button.accordion-button:not(.top-header-mobile-interes)').each(function() {
            if ($(this).closest(".accordion-item").find(".accordion-collapse").hasClass("show")) {
                $(this).click();
            }
        });
    }

    function toggleMenu(event) {
        event.stopPropagation();
        if ($(".showOnlyMobile").is(":visible")) {
            document.querySelector('#mainMenu').classList.toggle('show');
        } else {
            document.getElementById("menu").classList.toggle("active");
        }
    }

    function closeMenu(event) {
        let menu = document.getElementById("menu");
        if (!menu.contains(event.target) && !document.querySelector(".menu-icon").contains(event.target)) {
            menu.classList.remove("active");
        }
    }
    </script>
</head>

<official-header></official-header>


<!DOCTYPE html>
<html lang="es">


<body>
    <nav class="navbar navbar-expand-lg" style="padding-left: 0px; background-color: #003579;">
        <div class="container-md">
            <a class="navbar-brand d-flex align-items-center " href="<?php echo home_url(); ?>">

                <?php 
                if ( function_exists('get_field') && function_exists('wp_get_attachment_image_src') && function_exists('get_post_meta') && function_exists('esc_url') && function_exists('esc_attr') ) :
                    $logo_id = get_field('header_logo', 'option');
                    if ( $logo_id ) {
                        // Obtener el array de la imagen (url, alt, etc.)
                        $logo = wp_get_attachment_image_src($logo_id, 'full');
                        $alt = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
                        if ( $logo && !empty($logo[0]) ) : ?>
                <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr($alt ?: 'Logo'); ?>"
                    style="height: 70px;">
                <?php endif;
                    }
                endif;
                ?>

                <div class="container">
                    <!-- <div class="logo-titulo">
                        <?php if ($title = get_field('name', 'option')): ?>
                        <?php echo $title; ?>
                        <?php endif; ?>
                    </div> -->

                    <div class="logo-subtitulo">
                        <?php if ($tagline = get_field('tagline', 'option')): ?>
                        <?php echo $tagline; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </a>

            <div class="search-bar ms-auto d-flex align-items-center my-1">
                <form role="search" class="search-form" method="get" action="<?php echo home_url('/'); ?>">
                    <input type="search" class="form-control" placeholder="¿Qué quieres buscar?" name="s"
                        value="<?php echo get_search_query(); ?>">
                    <button class="btn btn-outline-secondary submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>

                <div class="divisor-search-menu">

                </div>

                <div onclick="closeMenu(event)">
                    <div class="menu-icon" onclick="toggleMenu(event)">
                        <i class="svg-icon">
                            <svg stroke="white" fill="white" stroke-width="0" version="1.1"
                                viewBox="0 0 17 17" height="36px" width="36px" xmlns="http://www.w3.org/2000/svg">
                                <g></g>
                                <path
                                    d="M0 0h5v5h-5v-5zM6 5h5v-5h-5v5zM12 0v5h5v-5h-5zM0 11h5v-5h-5v5zM6 11h5v-5h-5v5zM12 11h5v-5h-5v5zM0 17h5v-5h-5v5zM6 17h5v-5h-5v5zM12 17h5v-5h-5v5z">
                                </path>
                            </svg>
                        </i>
                    </div>

                    <div class="menu-container-interes hideOnMobile">
                        <?php 
                            include_once 'menu-interes.php';
                            $menuInteres = getMenuInteres();
                            print $menuInteres;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu Section -->
    <span class="showOnlyMobile sensorState">.</span>
    <nav class="container-md navbar navbar-expand-lg bg-white w-100" style="padding-left: 0px;">
        <div class="container-fluid">
            <div class="container-fluid collapse navbar-collapse pd-l-none" id="mainMenu">
                <div class="navbar-interes showOnMobile accordion">
                    <?= $menuInteres;?>
                </div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'navbar-nav mb-2 mb-lg-0'
                )); ?>
            </div>
        </div>
    </nav>


</html>