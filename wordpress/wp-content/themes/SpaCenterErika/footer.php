<footer>


<div class='wrapfooter'>
            <div class="logo">
                        <?php
                        if ( has_custom_logo() ) {
                                the_custom_logo();
                        } else {
                                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                        }
                        ?>
            </div>
                        
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'navF' ) ); ?>  


            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'navS' ) ); ?> 
 </div>


 <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
	<ul id="sidebarF">
		<?php dynamic_sidebar( 'footer-sidebar' ); ?>
	</ul>
<?php endif; ?>


</footer>

<?php wp_footer(); ?> 
</body>
</html>