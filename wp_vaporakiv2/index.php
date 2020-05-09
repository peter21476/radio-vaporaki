<?php get_header(); ?>


<div class="container slider-radioplayer">

    <div class="row">

        <div class="col-md-8">

            <?php dynamic_sidebar( 'slider' ); ?>

        </div>

        <div class="col-md-4 radio-player" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/Classic-Radio-Music-Wallpaper-HD-275.jpg)">

            <h3>Τώρα παίζει στο Βαποράκι</h3>

            <div class="artist-image">
                <img class="cc_streaminfo" data-type="trackimageurl" data-username="bjmzrrud" />
            </div>

            <div class="artist-details">
                <span class="cc_streaminfo" data-type="trackartist" data-username="bjmzrrud"></span><br /><span class="cc_streaminfo" data-type="tracktitle" data-username="bjmzrrud"></span>
            </div>
            <div style="clear:both"></div>
            <div class="player-footer">
                <p>Streaming by TorontoCast<br />Licensed by SOCAN</p>

                <a class="btn btn-warning listen-live-button" target="_blank" href="http://classicgold.torontocast.stream/vaporaki/build/index.html">Ακούστε Ζωντανά</a>

            </div>

        </div>

    </div>
</div>


<div class="container main-area">

    <div class="row">

        <div class="col-md-8 blog-posts">

            <div class="row">

                <div class="col-md-12 blog-list-title">

                    <h3>Τι μάθαμε απο τον ασύρματο...</h3>

                </div>

            </div>

            <div class="row blog-post">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="col-md-12 post-text">
                    <h2>
                        <a class="h1Link" href="<?php the_permalink(); ?>">
                            <?php the_title() ;?>
                        </a>
                    </h2>
                    <div class="post-photo">
                        <div style="background-image:url( <?php 
                              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail_url( full );
                        } ?>)" class="post-image"></div>
                    </div>
                    <p><strong>Δημοσιεύση:</strong>
                        <?php the_date(); ?>
                    </p>
                    <div class="excerpt">

                        <p>
                            <?php the_excerpt(); ?>
                        </p>

                    </div>
                </div>

                <?php endwhile; ?>
                <!-- End of the main loop -->

                <!-- Add the pagination functions here. -->

                <div class="nav-previous alignleft">
                    <?php next_posts_link( 'Παλαιότερες αναρτήσεις' ); ?>
                </div>
                <div class="nav-next alignright">
                    <?php previous_posts_link( 'Πρόσφατες αναρτήσεις' ); ?>
                </div>

                <?php else : ?>


                <p>There are no posts or pages here</p>

                <?php endif; ?>
            </div>


        </div>

        <div class="col-md-4 sidebar">

            <div class="widget-area">
                <?php dynamic_sidebar( 'lastsongs' ); ?>
            </div>

        </div>


    </div>

</div>
<script language="javascript" type="text/javascript" src="https://agnes.torontocast.com:2199/system/streaminfo.js"></script>

<?php get_footer(); ?>
