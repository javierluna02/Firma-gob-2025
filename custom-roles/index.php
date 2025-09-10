<?php

function remove_default_roles()
{
    global $wp_roles;
    // Remove custom roles so they can be re-added with the updated capabilities
    $wp_roles->remove_role('RAI');
    $wp_roles->remove_role('web-master');
    $wp_roles->remove_role('administrator');

    // Reset roles to their default values
    reset_user_roles();

    // Remove default roles
    $wp_roles->remove_role('subscriber'); // Remove any custom roles
    $wp_roles->remove_role('editor'); // Remove any custom roles
    $wp_roles->remove_role('contributor'); // Remove any custom roles
    $wp_roles->remove_role('author'); // Remove any custom roles
}
add_action('init', 'remove_default_roles');

function reset_user_roles()
{
    if (!function_exists('populate_roles')) {
        require_once(ABSPATH . 'wp-admin/includes/schema.php');
    }
    populate_roles();
}
