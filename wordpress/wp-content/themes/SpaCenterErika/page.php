<?php /* Template Name: CustomPageT1 */ ?>

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
                    the_post(); // Instalisatie van de huidige post
                    ?>
                    <div class="content">
                    <h1><?php  the_title(); ?> </h1>
                    <?php the_content(); ?>
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


</div>


<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</ul>
<?php endif; ?>
</section>

<?php get_footer(); ?>

</div>
