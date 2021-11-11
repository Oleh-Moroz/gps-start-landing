<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>

        <!-- Meta tags
        ================================================== -->
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Site title
        ================================================== -->
        <title><?php wp_title('|',true,'left'); ?></title>

        <!-- Favicons + Touch Icons
        ================================================== -->

        <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri()?>/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri()?>/img//favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri()?>/img//favicons/favicon-16x16.png">
<!--        <link rel="manifest" href="/site.webmanifest">-->
        <link rel="mask-icon" href="<?= get_template_directory_uri()?>/img//favicons/safari-pinned-tab.svg" color="#5cba4a">

        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#5cba4a">
        <?php wp_head(); ?>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link href="<?= get_template_directory_uri()?>/start-landing/css/main.css" rel="stylesheet">

    </head>
    <body>