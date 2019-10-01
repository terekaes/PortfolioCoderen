<div id="wrapper">
<?php get_header(); ?>
 
<section>

<div id="content_area">
        <div class="BlogMessage"> 
            <div class="GreenTeam">  
                <?php 
                if(have_posts()) 
                {
                    while(have_posts())
                    {
                        the_post();
                        the_title();
                        the_content();
                    }
                }
                else
                {
                    echo 'No content available';
                }
                ?>
            </div>
        </div>
   
        <?php comments_template(); ?>
</div>


<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</ul>
<?php endif; ?>

</section>
<?php get_footer(); ?>
</div>