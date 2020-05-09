<?php get_header(); ?>

<div class="container main-area">

    <div class="row">

        <div class="col-md-8 single-blog-posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="row single-blog-post">

                <div class="col-md-12 post-photo">
                    <div style="background-image:url(<?php 
                              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail_url( full );
                        } ?>)" class="single-post-image"></div>
                </div>

                <div class="col-md-12 post-text">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <p>Δημοσιεύση:
                        <?php the_date(); ?>
                    </p>
                    <div class="excerpt">

                        <p>
                            <?php the_content(); ?>
                        </p>

                    </div>
                </div>

            </div>
            <?php endwhile; else : ?>
            <p>
                <?php _e( 'Sorry, no pages found.' ); ?>
            </p>
            <?php endif; ?>
        </div>

        <div class="col-md-4 sidebar">

            <div class="widget-area">
                <?php dynamic_sidebar( 'lastsongs' ); ?>
            </div>

        </div>


    </div>

</div>

<?php get_footer(); ?>
