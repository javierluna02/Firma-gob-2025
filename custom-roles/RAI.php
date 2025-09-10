<?php

function add_RAI_capabilities()
{
    $capabilities = array(
        'read' => true,
        'edit_transparencia' => true,
        'publish_transparencia' => true,
        'edit_others_transparencia' => true,
        'read_private_transparencia' => true,
        'delete_transparencia' => true,
        'read_transparencia' => true
    );

    // Add capabilities to administrator role
    $administrator = get_role('administrator');
    foreach ($capabilities as $cap => $grant) {
        $administrator->add_cap($cap, $grant);
    }

    // Add RAI role
    add_role('RAI', 'RAI', $capabilities);
}
add_action('init', 'add_RAI_capabilities');
