<?php

function add_webmaster_capabilities()
{
    $capabilities = array(
        'read' => true,
        'edit_servicio' => true,
        'publish_servicio' => true,
        'edit_others_servicio' => true,
        'read_private_servicio' => true,
        'edit_servicio' => true,
        'delete_servicio' => true,
        'read_servicio' => true,
        // 
        'delete_others_pages' => true,
        'delete_others_posts' => true,
        'delete_pages' => true,
        'delete_posts' => true,
        'delete_private_pages' => true,
        'delete_private_posts' => true,
        'delete_published_pages' => true,
        'delete_published_posts' => true,
        'delete' => true,
        'edit_others_pages' => true,
        'edit_others_posts' => true,
        'edit_pages' => true,
        'edit_posts' => true,
        'edit_private_pages' => true,
        'edit_private_posts' => true,
        'edit_published_pages' => true,
        'edit_published_posts' => true,
        'create' => true,
        'edit' => true,
        'manage_categories' => true,
        'manage_links' => true,
        'moderate_comments' => true,
        'publish_pages' => true,
        'publish_posts' => true,
        'read' => true,
        'read_private_pages' => true,
        'read_private_posts' => true,
        'upload_files' => true,
    );

    // Add capabilities to administrator role
    $administrator = get_role('administrator');
    foreach ($capabilities as $cap => $grant) {
        $administrator->add_cap($cap, $grant);
    }

    // Add RAI role
    add_role('web-master', 'Web Master', $capabilities);
}
add_action('init', 'add_webmaster_capabilities');
