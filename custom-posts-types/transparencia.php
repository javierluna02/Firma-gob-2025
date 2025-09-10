<?php

function transparencia_post_type()
{
    $labels = array(
        'name' => __('Pagina Transparencia'),
        'singular_name' => __('Pagina Transparencia'),
        'add_new' => __('Nueva Pagina Transparencia'),
        'add_new_item' => __('Añadir un nueva Pagina Transparencia'),
        'edit_item' => __('Editar Pagina Transparencia'),
        'new_item' => __('Nueva Pagina Transparencia'),
        'view_item' => __('Ver Pagina Transparencia'),
        'search_items' => __('Buscar Pagina Transparencia'),
        'not_found' =>  __('Pagina Transparencia no encontrado'),
        'not_found_in_trash' => __('Pagina Transparencia no encontrada en la papelera'),
    );

    $capabilities = array(
        'publish_posts' => 'publish_transparencia',
        'edit_posts' => 'edit_transparencia',
        'edit_others_posts' => 'edit_others_transparencia',
        'read_private_posts' => 'read_private_transparencia',
        'edit_post' => 'edit_transparencia',
        'delete_post' => 'delete_transparencia',
        'read_post' => 'read_transparencia'
    );

    $args = array(
        'labels' => $labels,
        'capabilities' => $capabilities,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => true,
        'menu_position' => 16,
        'menu_icon' => 'dashicons-download',
        'supports' => array(
            'title',
            'thumbnail',
            'editor',
        ),

        'show_in_graphql' => true,
        'graphql_single_name' => 'transparencia',
        'graphql_plural_name' => 'transparencia',
    );
    register_post_type('transparencia', $args);
}
add_action('init', 'transparencia_post_type');
