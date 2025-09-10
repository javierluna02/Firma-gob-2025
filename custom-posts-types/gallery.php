<?php

function galeria_post_type()
{
    $labels = array(
        'name' => __('Galerías'),
        'singular_name' => __('álbum'),
        'add_new' => __('Nuevo álbum'),
        'add_new_item' => __('Añadir un nuevo álbum'),
        'edit_item' => __('Editar álbum'),
        'new_item' => __('Nuevo álbum'),
        'view_item' => __('Ver álbum'),
        'search_items' => __('Buscar álbum'),
        'not_found' =>  __('Álbum no encontrado'),
        'not_found_in_trash' => __('Álbum no encontrado en la papelera'),
    );

    $args = array(
        'labels' => $labels,
        'has_archive' => false,
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-format-gallery',
        'rewrite' => array('slug' => 'galerias'),
        'supports' => array(
            'title',
            'editor',
        ),
        'publicly_queryable' => true,
        'show_in_graphql' => true,
        'graphql_single_name' => 'gallery',
        'graphql_plural_name' => 'galleries',
    );
    register_post_type('galeria', $args);
}
add_action('init', 'galeria_post_type');
