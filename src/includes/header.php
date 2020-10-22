<!DOCTYPE html>

<html lang="DE, de">
    <head>
        <!-- https://www.w3schools.com/tags/tag_meta.asp -->
        <meta charset="UTF-8">
        <meta name="description" content="Der Hüpfburg Discord Server">
        <meta name="keywords" content="hüpfburg, discord, server">
        <meta name="author" content="someguy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- page display info & styling -->
        <title>Die Hüpfburg !</title>
        <!-- load external stored css style -->
        <link rel="stylesheet" type="text/css" href="/huepfburg/style/style.css">
        <!-- load external stored javascript -->
        <script src="/huepfburg/scripts/script.js"></script> 
        <!-- load website icon -->
        <link rel="shortcut icon" type="image/x-icon" href="/huepfburg/img/icon/hburg_icon.ico">
    </head>

    <!-- script temporarly stored here -->
    <script>
        // parameters = pixelscroll, id of nav to change
        resizeNavOnScroll(100, "main_nav");
    </script>

    <!-- header will be shown on top with nav etc -->
    <div id="page-top" style="position: 'absolute'; top: 0;"></div>
    <header id="main_header">
        <nav id="main_nav">
            <div class="nav_title">
                <img id="nav_gif_icon" src="/huepfburg/img/icon/hburg_turning_icon_nobg.gif" alt="yes">
                <h3 id="nav_h3"><a href="/huepfburg/index.php#page-top">Die Hüpfburg</a></h3>
            </div>
            <ul>
                <!-- edit: removed the title="" for it to be more clean -->
                <!-- edit 2: removed "home" link, as the h3 will be that link, adding "Aktuelles" insted -->

                <!-- Channels, Themenchannels, Ränge, ... -->
                <li><a href="/huepfburg/index.php#aufbau" class="current_active">Aufbau</a></li>
                <!-- Entstehung, Geschichte bis jetzt -->
                <li><a href="/huepfburg/index.php#geschichte" class="current_active">Geschichte</a></li>
                <!-- Wie der Server moderiert wird (2 Owner usw) -->
                <li><a href="/huepfburg/index.php#moderation" class="current_active">Moderation</a></li>
                <!-- Aktuelles, was im Server vorgeht, news usw -->
                <li><a href="/huepfburg/index.php#aktuelles" class="current_active">Aktuelles</a></li>
                <!-- Link zum join-button, der aber immer highlighted sein wird-->
                <li id="nav_highlight"><a href="/huepfburg/index.php#join">Join</a></li>

            </ul>
        </nav>
    </header>
    <!--
        Rest of the Code in the index.php
    -->