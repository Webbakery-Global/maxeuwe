<?php

// Register Custom Post Type
function appartement()
{

    $labels = array(
        'name' => _x('Appartementen', 'Post Type General Name', 'maxeuwe'),
        'singular_name' => _x('Appartement', 'Post Type Singular Name', 'maxeuwe'),
        'menu_name' => __('Appartement', 'maxeuwe'),
        'name_admin_bar' => __('Appartement', 'maxeuwe'),
        'archives' => __('Item Archives', 'maxeuwe'),
        'attributes' => __('Item Attributes', 'maxeuwe'),
        'parent_item_colon' => __('Parent Item:', 'maxeuwe'),
        'all_items' => __('Alle appartementen', 'maxeuwe'),
        'add_new_item' => __('Voeg nieuwe appartement toe', 'maxeuwe'),
        'add_new' => __('Voeg nieuwe appartement toe', 'maxeuwe'),
        'new_item' => __('Voeg nieuwe appartement toe', 'maxeuwe'),
        'edit_item' => __('Wijzig appartement', 'maxeuwe'),
        'update_item' => __('Update appartement', 'maxeuwe'),
        'view_item' => __('Bekijk appartement', 'maxeuwe'),
        'view_items' => __('Bekijk appartement', 'maxeuwe'),
        'search_items' => __('Zoek appartement', 'maxeuwe'),
        'not_found' => __('Not found', 'maxeuwe'),
        'not_found_in_trash' => __('Not found in Trash', 'maxeuwe'),
        'featured_image' => __('Appartement afbeelding', 'maxeuwe'),
        'set_featured_image' => __('Kies appartement afbeelding', 'maxeuwe'),
        'remove_featured_image' => __('Vewijder appartement afbeelding', 'maxeuwe'),
        'use_featured_image' => __('Gebruik als appartement afbeelding', 'maxeuwe'),
        'insert_into_item' => __('Insert into item', 'maxeuwe'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'maxeuwe'),
        'items_list' => __('Items list', 'maxeuwe'),
        'items_list_navigation' => __('Items list navigation', 'maxeuwe'),
        'filter_items_list' => __('Filter items list', 'maxeuwe'),
    );
    $args = array(
        'label' => __('Appartement', 'maxeuwe'),
        'description' => __('Appartement items', 'maxeuwe'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
//        'taxonomies' => array('appartement-category'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-building',
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('appartement', $args);

}

add_action('init', 'appartement', 0);
//
//if ( ! function_exists( 'appartement_category' ) ) {
//
//// Register Custom Taxonomy
//    function appartement_category() {
//
//        $labels = array(
//            'name'                       => _x( 'Appartement categorieën', 'Taxonomy General Name', 'rjb' ),
//            'singular_name'              => _x( 'Appartement category', 'Taxonomy Singular Name', 'rjb' ),
//            'menu_name'                  => __( 'Appartement category', 'rjb' ),
//            'all_items'                  => __( 'Appartement categorieën', 'rjb' ),
//            'parent_item'                => __( 'Parent Item', 'rjb' ),
//            'parent_item_colon'          => __( 'Parent Item:', 'rjb' ),
//            'new_item_name'              => __( 'Voeg nieuwe appartement category toe', 'rjb' ),
//            'add_new_item'               => __( 'Voeg nieuwe appartement category toe', 'rjb' ),
//            'edit_item'                  => __( 'Wijzig appartement category', 'rjb' ),
//            'update_item'                => __( 'Update appartement category', 'rjb' ),
//            'view_item'                  => __( 'Bekijk appartement category', 'rjb' ),
//            'separate_items_with_commas' => __( 'Separate items with commas', 'rjb' ),
//            'add_or_remove_items'        => __( 'Add or remove items', 'rjb' ),
//            'choose_from_most_used'      => __( 'Choose from the most used', 'rjb' ),
//            'popular_items'              => __( 'Popular Items', 'rjb' ),
//            'search_items'               => __( 'Search Items', 'rjb' ),
//            'not_found'                  => __( 'Not Found', 'rjb' ),
//            'no_terms'                   => __( 'No items', 'rjb' ),
//            'items_list'                 => __( 'Items list', 'rjb' ),
//            'items_list_navigation'      => __( 'Items list navigation', 'rjb' ),
//        );
////        $rewrite = array(
////            'slug'              => 'appartement/category',
////            'with_front'        => true,
////            'hierarchical'       => true
////        );
//        $args = array(
//            'labels'                     => $labels,
//            'hierarchical'               => true,
//            'public'                     => true,
//            'show_ui'                    => true,
//            'show_admin_column'          => true,
//            'show_in_nav_menus'          => true,
//            'show_tagcloud'              => true,
////            'rewrite'                   => $rewrite,
//        );
//        register_taxonomy( 'appartement-category', array( 'appartement' ), $args );
//
//    }
//    add_action( 'init', 'appartement_category', 0 );
//
//}