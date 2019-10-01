<?php
  # …

  add_theme_support( 'custom-logo' );


  function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_menu_locations' );

  function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );


  

  function register_sidebar_locations() {
      /* Register the 'primary' sidebar. */
      register_sidebar(
          array(
              'id'            => 'primary-sidebar',
              'name'          => __( 'Primary Sidebar' ),
              'description'   => __( 'sidebar on the right.' ),
              'before_widget' => '<div id="%1$s" class="widget %2$s">',
              'after_widget'  => '</div>',
              'before_title'  => '<h3 class="widget-title">',
              'after_title'   => '</h3>',
          )
      );
      /* Repeat register_sidebar() code for additional sidebars. */

        register_sidebar(
            array(
                'id'            => 'footer-sidebar',
                'name'          => __( 'Footer Sidebar' ),
                'description'   => __( 'sidebar onderaan website.' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
  }
  add_action( 'widgets_init', 'register_sidebar_locations' );

  add_theme_support( 'post-thumbnails' ); 
  add_theme_support( 'custom-logo' );
