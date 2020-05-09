<!doctype html>

<html lang="gr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ράδιο Βαποράκι</title>
    <meta name="description" content="Radio Vaporaki">
    <meta name="author" content="SitePoint">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
    <?php wp_head() ?>
</head>

<body style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background4.jpg)">

    <div class="container main-wrapper">
        <div class="row top-bar">

            <div class="col-md-2 logo">

                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/Vaporaki-Logo.png" />

            </div>

            <div class="col-md-7">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
  </button>
                    <div class="collapse navbar-collapse" id="navbarNav">

                        <?php

        $defaults = array(

        'container' => false,

        'depth'      => 2,

        'menu_class' => 'nav navbar-nav',

        'theme_location' => 'primary-menu'

      );

      wp_nav_menu($defaults);

      ?>

                    </div>
                </nav>
            </div>

            <div class="col-md-3">

                <a class="btn btn-warning listen-live-button" target="_blank" href="http://classicgold.torontocast.stream/vaporaki/build/index.html">Ακούστε Ζωντανά</a>

            </div>

        </div>

    </div>
