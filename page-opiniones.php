<?php

/*
 * Template Name: Opiniones
 */
get_header();
?>
<?php get_template_part( 'app/part/menu' ); ?>

	<main id="content" class="ui page grid post-single">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : ?>

                <?php the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <p>
                	<?php the_content(); ?>
                </p>

                    <!--display the content-->
                    <?php if ( has_post_thumbnail() ) : ?>

                        <div class="property eight wide column">
                            <?php the_post_thumbnail();  ?> 
                        </div>

                    <?php endif; ?>
                        
					<div class="price"> <i class="euro icon"></i><?php echo the_field( 'precio' ); ?></div>

                <!-- </div> -->

                <!--end the loop-->
            <?php endwhile; ?>

        <?php else : ?>

            <div class="no-posts">No posts found</div>

        <?php endif; ?>

        <?php wp_reset_query(); ?>

    </main>

<?php get_footer(); ?>

