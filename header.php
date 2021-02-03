<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
</head>
<body>
    <header class="navbar">
        <a href="/" class="logo">
            <h1>khenny c</h1>
        </a>

        <!-- <div class="popover">
            <div class="content"></div>
            <div class="background"></div>  
            <div class="arrow"></div> 
        </div> -->
        
        <article class="menu-items">
            <nav class="page-links">
                <ul></ul>
            </nav> 
            <div class="social-links"></div>
        </article>
        <article id="menu-icon" onclick="toggleNav()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </article>
    </header>
    <aside onclick="toggleNav()">
        <article>
            <nav class="page-links">
                <ul></ul>
            </nav> 
            <ul class="social-links"></ul>
        </article>
    </aside>
    <main>