<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class(); ?>>
<header>
        <nav class="main-navigation">

            <!-- <div class="logo">Logo</div> -->
            <div class="link-wrapper">
                <ul>
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li><a href="<?php echo site_url('/about')?>">About</a></li>
                    <li><a href="<?php echo site_url('/editorial')?>">Editorial</a></li>
                    <!-- <li><a href="<?php echo site_url('/contact')?>">Contact</a></li> -->
                </ul>
            </div>

            <div class="hamburger-wrapper">
                <div class="menu-btn-5">
                    <span></span>
                    <span></span>
                </div>
                <aside class="sidebar">
                    <nav class="mobile-navigation">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Editorial</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </aside>
            </div>

        </nav>
    </header>
    
