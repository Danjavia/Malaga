<?php get_header(); ?>

    <?php get_template_part( 'app/part/menu' ); ?>

    <div class="background-image">
        <div class="search">
            <div class="ui remote search">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Buscar propiedad..." autocomplete="off">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
            </div>
        </div>
        
        <div class="ui card reservations">
            <div class="content">
                <div class="header">Reservaciones</div>
                <div class="ui primary button check-in">
                    Check in
                </div>
                <div class="ui button check-out">
                    Check out
                </div>
                <br>
                <div class="ui input pax">
                    <input type="text" placeholder="Pax">
                </div>
            </div>
        </div>
    </div>

    <main id="content" class="ui page grid">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : ?>

                <?php the_post(); ?>
                <?php //$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

                <!-- <div class="individual-item" data-full-image="<?php echo $thumb[ 0 ]; ?>"> -->

                    <!--display the content-->
                    <?php if ( has_post_thumbnail() ) : ?>

                        <div class="property four wide column">
                            <?php the_post_thumbnail( 'small-thumb' );  ?> 
                        </div>

                    <?php endif; ?>

                <!-- </div> -->

                <!--end the loop-->
            <?php endwhile; ?>

        <?php else : ?>

            <div class="no-posts">No posts found</div>

        <?php endif; ?>

        <?php wp_reset_query(); ?>

    </main>

    <div class="invert">
        <div class="ui page grid">
            <div class="eight wide column custom-text">
                <p>
                    ” 5 de 5 estrellasOpinión escrita el 11 ” 5 de 5 estrellasOpinión escrita el 11 
                    ” 5 de 5 estrellasOpinión escrita el 11 ” 5 de 5 estrellasOpinión escrita el 11
                    ” 5 de 5 estrellasOpinión escrita el 11 ” 5 de 5 estrellasOpinión escrita el 11
                    ” 5 de 5 estrellasOpinión escrita el 11 ” 5 de 5 estrellasOpinión escrita el 11
                    ” 5 de 5 estrellasOpinión escrita el 11 ” 5 de 5 estrellasOpinión escrita el 11
                </p>
            </div>
            
            <div class="eight wide column">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/2P8LlsqpGWU" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

<?php get_footer(); ?>