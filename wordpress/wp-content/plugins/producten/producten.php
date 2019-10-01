<?php

/*
Plugin Name: producten
Plugin URI: http://gdm.gent/
Description: My producten is the best plugin to store your own producten items.
Version: 1.0.0
Author: Teresa Kaesteker
Author URI: http://deweirdt.be/

*/

# …

function custom_post_type_producten() {
  $labels = array(
    'name'               => _x( 'producten', 'post type general name' ),
    'singular_name'      => _x( 'producten item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New producten item' ),
    'edit_item'          => __( 'Edit producten item' ),
    'new_item'           => __( 'New producten item' ),
    'all_items'          => __( 'All producten items' ),
    'view_item'          => __( 'View producten item' ),
    'search_items'       => __( 'Search producten items' ),
    'not_found'          => __( 'No producten item found' ),
    'not_found_in_trash' => __( 'No producten item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'producten'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our producten items specific data',
    'public'        => true,
    'menu_position' => 6,
	  'menu_icon'     => 'dashicons-images-alt',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'producten', $args );
} 

add_action( 'init', 'custom_post_type_producten' );

function taxonomies_producten() {
  $labels = array(
    'name'              => _x( 'producten Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'producten Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search producten Categories' ),
    'all_items'         => __( 'All producten Categories' ),
    'parent_item'       => __( 'Parent producten Category' ),
    'parent_item_colon' => __( 'Parent producten Category:' ),
    'edit_item'         => __( 'Edit producten Category' ), 
    'update_item'       => __( 'Update producten Category' ),
    'add_new_item'      => __( 'Add New producten Category' ),
    'new_item_name'     => __( 'New producten Category' ),
    'menu_name'         => __( 'producten Categories' )
  );

    $capabilities = array(
    'edit_post'          => 'edit_producten',
    'read_post'          => 'read_producten',
    'delete_post'        => 'delete_producten'
    );

  $args = array(
    'labels' => $labels,
    'capabilities' => $capabilities,
    'hierarchical' => false,
  );
  register_taxonomy( 'producten_category', 'producten', $args );
}
add_action( 'init', 'taxonomies_producten', 0 );
