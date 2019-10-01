<?php

/*
Plugin Name: behandelingen
Plugin URI: http://gdm.gent/
Description: My behandelingen is the best plugin to store your own behandelingen items.
Version: 1.0.0
Author: Teresa Kaesteker
Author URI: http://deweirdt.be/

*/

# …

function custom_post_type_behandelingen() {
  $labels = array(
    'name'               => _x( 'behandelingen', 'post type general name' ),
    'singular_name'      => _x( 'behandelingen item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New behandelingen item' ),
    'edit_item'          => __( 'Edit behandelingen item' ),
    'new_item'           => __( 'New behandelingen item' ),
    'all_items'          => __( 'All behandelingen items' ),
    'view_item'          => __( 'View behandelingen item' ),
    'search_items'       => __( 'Search behandelingen items' ),
    'not_found'          => __( 'No behandelingen item found' ),
    'not_found_in_trash' => __( 'No behandelingen item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'behandelingen'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our behandelingen items specific data',
    'public'        => true,
    'menu_position' => 5,
	'menu_icon'     => 'dashicons-admin-multisite',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'behandelingen', $args );
} 

add_action( 'init', 'custom_post_type_behandelingen' );

function taxonomies_behandelingen() {
  $labels = array(
    'name'              => _x( 'behandelingen Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'behandelingen Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search behandelingen Categories' ),
    'all_items'         => __( 'All behandelingen Categories' ),
    'parent_item'       => __( 'Parent behandelingen Category' ),
    'parent_item_colon' => __( 'Parent behandelingen Category:' ),
    'edit_item'         => __( 'Edit behandelingen Category' ), 
    'update_item'       => __( 'Update behandelingen Category' ),
    'add_new_item'      => __( 'Add New behandelingen Category' ),
    'new_item_name'     => __( 'New behandelingen Category' ),
    'menu_name'         => __( 'behandelingen Categories' )
  );

    $capabilities = array(
    'edit_post'          => 'edit_behandelingen',
    'read_post'          => 'read_behandelingen',
    'delete_post'        => 'delete_behandelingen'
    );

  $args = array(
    'labels' => $labels,
    'capabilities' => $capabilities,
    'hierarchical' => false,
  );
  register_taxonomy( 'behandelingen_category', 'behandelingen', $args );
}
add_action( 'init', 'taxonomies_behandelingen', 0 );

