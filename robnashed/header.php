<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rob Nashed</title>
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <?php wp_head(); ?>

</head>
<body>
    <div class="containerMain">
<!-- SOCIAL MEDIA LINKS -->
<div class="col-1">
        <a href="https://www.instagram.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/instagram.svg" alt="INSTAGRAM"></a>
        <a href="https://twitter.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/twitter.svg" alt="TWITTER"></a>
        <a href="https://www.linkedin.com/in/rob-nashed-4a2442a7/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/linkedin.svg" alt="LINKEDIN"></a>
    </div>
<!-- SIDE BAR -->
        <div class="col-2">
            <div class="row"> <span class="logo"><a href="<?php echo home_url(); ?>">Rob Nashed</a></span> <a href="nav.html"><i class="fas fa-bars"></i></a>

            </div>
            <div class="row nav">
            <?php wp_nav_menu(['robnashed'  => 'main']); ?>
                <!-- <ul class="nav-ul">
                    <li><a href="index.html"><span class="active">WEB</span></a></li>
                    <li><a href="illustration.html">ILLUSTRATION</a></li>
                    <li><a href="music.html">MUSIC</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                   
                </ul> -->
                <div class="searchBar">
                        <input type="text">
                        <button class="searchSubmit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/search.png" alt=""></button>
                </div>
               
                
            </div>
            <div class="contactMe">Contact me at <span class="email">robertonashed@gmail.com</span></div>   
        </div>