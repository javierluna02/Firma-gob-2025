<?php

/**
 * Template part for displaying section 2 of the home page
 *
 * @package Firma-gob-2025
 */
?>

<section class="section-2">
    <button data-section="acerca-de">ACERCA DE</button>
    <a href="<?php echo esc_url(home_url('/servicios/beneficios/')); ?>">
        <button>BENEFICIOS</button>
    </a>
    <a href="<?php echo esc_url(home_url('/servicios/instituciones/')); ?>">
        <button>INSTITUCIONES</button>
    </a>
    <button data-section="integracion">INTEGRACIÓN</button>
    <button data-section="disponibilidad">DISPONIBILIDAD</button>
</section>