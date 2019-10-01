<div id="wrapper">

<?php get_header(); ?>

<section>



<div class="WrapArchief">
        <div class="row mb-4">
                    <?php 
                if(have_posts()) 
                {
                    while(have_posts())
                    {
                        the_post(); // Instalisatie van de huidige post
                        ?>
                        
                        <div class="InfoGreen">
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php  the_title(); ?> </h2>
                        <?php the_content(); ?>
                        <a href="<?php the_permalink(); ?>"> 
                            <button type="button" class="btn btn-outline-danger"> lees meer </button>
                            <input type="hidden" name="bookmark" value="lyrics" />
                        </a>
                        </div>
                        
                        <?php
                    }
                }
                else
                {
                    echo 'No content available';
                }
                ?>
        </div>


</div>


<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</ul>
<?php endif; ?>
</section>

<?php get_footer(); ?>
</div>