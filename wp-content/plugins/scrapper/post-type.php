<?php 

function custom_post_type() {

    $labels = array(
        'name'                => _x( 'Scrapper', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Scrapper', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Scrapper', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Scrapper', 'twentythirteen' ),
        'all_items'           => __( 'All Scrapper', 'twentythirteen' ),
        'view_item'           => __( 'View Scrapper', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Scrapper', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Scrapper', 'twentythirteen' ),
        'update_item'         => __( 'Update Scrapper', 'twentythirteen' ),
        'search_items'        => __( 'Search Scrapper', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

     
    $args = array(
        'label'               => __( 'scrapper', 'twentythirteen' ),
        'description'         => __( 'scparring image title or anchor tag ', 'twentythirteen' ),
        'labels'              => $labels,
        
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        
        'taxonomies'          => array( 'genres' ),
        
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
  
    register_post_type( 'scrapper', $args );
 
}
 
 
add_action( 'init', 'custom_post_type', 0 );