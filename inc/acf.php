<?php
// Options pages
if (function_exists('acf_add_options_page')) {
// Add parent.

    acf_add_options_page(array(
        'page_title' => 'Thema opties',
        'menu_title' => 'Thema opties',
        'menu_slug' => 'thema-settings',
        'capability' => 'manage_options',
        'redirect' => false

    ));


    acf_add_options_sub_page(array(
        'page_title' 	=> 'Privacy & Disclaimer',
        'menu_title'	=> 'Privacy & disclaimer',
        'parent_slug'	=> 'thema-settings',
    ));


}


// Save ACF Fields
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path)
{
    // update path
    $path = get_stylesheet_directory() . '/acf';

    // return
    return $path;

}


add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/acf';

    // return
    return $paths;

}