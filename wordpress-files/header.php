<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>
            <?php
                wp_title('-', 'true', 'right');  bloginfo( 'name' );
            ?> 
        </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="#">
        <meta name="keywords" content="#">
        <meta name="author" content="FREEHTML5.CO">


        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="">
        <meta name="twitter:image" content="">
        <meta name="twitter:url" content="">
        <meta name="twitter:card" content="">

        <!-- CSS -->
        
        <?php get_styles() ?>

        <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">

    </head>
    <body>