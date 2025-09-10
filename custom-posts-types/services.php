<?php

function servicio_post_type()
{
    $labels = array(
        'name' => __('Servicios'),
        'singular_name' => __('servicios'),
        'add_new' => __('Nuevo servicio'),
        'add_new_item' => __('Añadir un nuevo servicio'),
        'edit_item' => __('Editar servicio'),
        'new_item' => __('Nuevo servicio'),
        'view_item' => __('Ver servicios'),
        'search_items' => __('Buscar sericios'),
        'not_found' =>  __('Servicio no encontrado'),
        'not_found_in_trash' => __('Servicio no encontrado en la papelera'),
    );

    $capabilities = array(
        'publish_posts' => 'publish_servicio',
        'edit_posts' => 'edit_servicio',
        'edit_others_posts' => 'edit_others_servicio',
        'read_private_posts' => 'read_private_servicio',
        'edit_post' => 'edit_servicio',
        'delete_post' => 'delete_servicio',
        'read_post' => 'read_servicio'
    );

    $args = array(
        'labels' => $labels,
        'capabilities' => $capabilities,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 16,
        'menu_icon' => 'dashicons-format-aside',
        'rewrite' => array('slug' => 'servicios'),
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'publicly_queryable' => true,
        'show_in_graphql' => true,
        'graphql_single_name' => 'service',
        'graphql_plural_name' => 'services',
    );
    register_post_type('servicio', $args);
}
add_action('init', 'servicio_post_type');
