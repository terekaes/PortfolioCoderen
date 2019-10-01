

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
                            <div class="imgMessage"> 
                            <a href="<?php the_permalink(); ?>"> <a> <?php
                            the_post_thumbnail('medium'); 
                            ?> </a> </a>
                            </div>
                            <article class="Welness">
                            <h1><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>
                            <dl>
                                <dt>Bericht geplaatst op:</dt>
                                <dd><?php the_date(); ?></dd>
                                <dt>Auteur:</dt>
                                <dd><?php the_author(); ?></dd>
                            </dl>
                            <a href="<?php the_permalink(); ?>"> 
                            <button type="button" class="btn btn-outline-danger"> lees meer </button>
                            <input type="hidden" name="bookmark" value="lyrics" />
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
    </div>

    <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</ul>
<?php endif; ?>
    </section>


<?php get_footer(); ?>

</div>

