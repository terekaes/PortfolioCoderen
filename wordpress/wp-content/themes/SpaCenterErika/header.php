<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <title>Spa center Erika</title>
    <?php wp_head(); ?> <!-- voor het afsluiten vn je header -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css?3">
    </head>
    
    


<!--
Theme Name: Artevelde
Theme URI: http://arteveldehogeschool.be/
Description: Dit is de omschrijving van je theme
Version: 1.0
Author: Teresa Kaesteker
-->

    <header id="Header">
          
    
    <?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'menu_class' => 'navigationHeader', 'menu_id' => 'navigationHeader') ); ?> 

   

    <div id="banner">
        <div class="logoheader">
            <?php
            if ( has_custom_logo() ) {
                    the_custom_logo();
            } else {
                    echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
            ?>
        </div>
      </div>


        <!-- <nav id="navigation"> -->
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'navigation', 'menu_id' => 'navigation',  ) ); ?>
        <!-- </nav> -->


    </header>