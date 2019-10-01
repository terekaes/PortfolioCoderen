<div id="wrapper">

<?php get_header(); ?>


<div id="content_area">

    <div class="BlogMessage">  

        <?php 
                        
                        if(have_posts()) 
                        {
                            while(have_posts())
                            {
                                the_post(); // Instalisatie van de huidige post
                                ?>
                                <div class="imgMessage"> 
                                <a> <?php
                                the_post_thumbnail('medium'); 
                                ?> </a>
                                </div>
                                <article class="Welness">
                                <a href="<?php the_permalink(); ?>">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                                </a>
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
    <div class="WrapArchief">
        <div class="row mb-3">

            <?php

            $args = array(
                'posts_per_page' => 2,
                'post_type' => 'behandelingen',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'behandelingen_category',
                        'field' => 'slug',
                        'terms' => 'favoriet'
                    )
                )
            );
            $myposts = get_posts( $args );

            foreach($myposts as $post) :
                setup_postdata($post); ?>
                <div class="ShopGreen">
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php  the_title(); ?> </h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>"> 
                            <button type="button" class="btn btn-outline-danger"> lees meer </button>
                            <input type="hidden" name="bookmark" value="lyrics" />
                        </a>
                </div>
            <?php 
            endforeach;
            ?>

            <?php
                $posts = get_posts ("bericht=0&showposts=1");
                if ($posts) {
                    foreach ($posts as $post):
                        setup_postdata($post); ?>
                        <div class="ShopGreen">
                                <?php the_post_thumbnail('medium'); ?>
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                
                                <a href="<?php the_permalink(); ?>"> 
                                <button type="button" class="btn btn-outline-danger"> lees meer </button>
                                <input type="hidden" name="bookmark" value="lyrics" />
                                </a>
                    </div>
            <?php 
                    endforeach;
                }
            ?>
        </div> 
    </div>
    


</div>


<section>


<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</ul>
<?php endif; ?>

</section>


<?php get_footer(); ?>

</div>