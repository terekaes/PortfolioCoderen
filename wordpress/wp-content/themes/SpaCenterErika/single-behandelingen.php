<div id="wrapper">
<?php get_header(); ?>

<section>
<div id="content_area">
        <div class="BlogMessage"> 
           
        <?php 
        if(have_posts()) 
        {
            while(have_posts())
            {
                the_post(); // Instalisatie van de huidige post
                ?>
                
                
                <div class="imgMessage"> <?php the_post_thumbnail('medium'); ?> </div>
                <article class="Welness">
                <h2><?php  the_title(); ?> </h2>
                <?php the_content(); ?>
                <?php echo get_post_meta(get_the_ID(), '_afkorting', true); ?>
             </article>
                
                <?php
            }
        }
        else
        {
            echo 'No content available';
        }
        ?>
        
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