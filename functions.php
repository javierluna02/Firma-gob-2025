<?php


// /*
//  *  Author: OGTIC - Plataformas y servicios 2023
//  *  Custom functions, support, custom post types and more.
//  */

// custom post types
require_once get_template_directory() . '/custom-posts-types/services.php';
require_once get_template_directory() . '/custom-posts-types/gallery.php';
require_once get_template_directory() . '/custom-posts-types/transparencia.php';


// // roles (The order is important)
// include "custom-roles/index.php";
// include "custom-roles/RAI.php";
// include "custom-roles/web-master.php";

function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(array(
    'primary' => __('Primary Menu', 'THEMENAME'),
));

if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    // File does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}








// // custom taxonomies
// include "custom-taxonomies/service-categories.php";

function register_html5_menu()
{
    register_nav_menus(array(
        'header-menu' => __('Menú Principal', 'ogtic'),
        'transparencia' => __('Menu transparencia', 'ogtic'),
        'movil-transperencia' => __('Movil Transparencia', 'ogtic')

    ));
}
add_action('init', 'register_html5_menu');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Configuración de Identidad Institucional',
        'menu_title' => 'OGTICADMIN',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'activate_plugins',
        'redirect' => false,
        'show_in_graphql' => true,
        'graphql_single_name' => 'ogticAdminSetting',
        'graphql_plural_name' => 'ogticAdminSettings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Configuración de servicios',
        'menu_title' => 'Servicios',
        'parent_slug' => 'theme-general-settings',
        'show_in_graphql' => true,
        'graphql_single_name' => 'serviceSetting',
        'graphql_plural_name' => 'serviceSettings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Página de inicio',
        'menu_title' => 'Página de inicio',
        'parent_slug' => 'theme-general-settings',
        'show_in_graphql' => true,
        'graphql_single_name' => 'homeSetting',
        'graphql_plural_name' => 'homeSettings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Configuración de enlaces de interés',
        'menu_title' => 'Enlaces de Interés',
        'parent_slug' => 'theme-general-settings',
        'show_in_graphql' => true,
        'graphql_single_name' => 'footerSetting',
        'graphql_plural_name' => 'footerSettings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Configuración del Footer',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
        'show_in_graphql' => true,
        'graphql_single_name' => 'interestLink',
        'graphql_plural_name' => 'interestLinks',
    ));
}

/**
 * Removes some menus by page.
 */
if (!function_exists('deregister_post_type')) {
    function wpdocs_remove_menus()
    {
        remove_menu_page('edit-comments.php'); //Comments
    }
}
add_action('admin_menu', 'wpdocs_remove_menus');

// Add thumbnail support
add_theme_support("post-thumbnails");

/**
 * Allow SVG uploads for administrator users.
 *
 * @param array $upload_mimes Allowed mime types.
 *
 * @return mixed
 */
add_filter(
    'upload_mimes',
    function ($upload_mimes) {
        // By default, only administrator users are allowed to add SVGs.
        // To enable more user types edit or comment the lines below but beware of
        // the security risks if you allow any user to upload SVG files.
        if (!current_user_can('administrator')) {
            return $upload_mimes;
        }

        $upload_mimes['svg'] = 'image/svg+xml';
        $upload_mimes['svgz'] = 'image/svg+xml';

        return $upload_mimes;
    }
);

/**
 * Add SVG files mime check.
 *
 * @param array        $wp_check_filetype_and_ext Values for the extension, mime type, and corrected filename.
 * @param string       $file Full path to the file.
 * @param string       $filename The name of the file (may differ from $file due to $file being in a tmp directory).
 * @param string[]     $mimes Array of mime types keyed by their file extension regex.
 * @param string|false $real_mime The actual mime type or false if the type cannot be determined.
 */
add_filter(
    'wp_check_filetype_and_ext',
    function ($wp_check_filetype_and_ext, $file, $filename, $mimes, $real_mime) {

        if (!$wp_check_filetype_and_ext['type']) {

            $check_filetype = wp_check_filetype($filename, $mimes);
            $ext = $check_filetype['ext'];
            $type = $check_filetype['type'];
            $proper_filename = $filename;

            if ($type && 0 === strpos($type, 'image/') && 'svg' !== $ext) {
                $ext = false;
                $type = false;
            }

            $wp_check_filetype_and_ext = compact('ext', 'type', 'proper_filename');
        }

        return $wp_check_filetype_and_ext;
    },
    10,
    5
);


?>