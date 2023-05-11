<!DOCTYPE html>
<!--
	Bonativo by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bonativo Free HTML5 Responsive Template | Template Stock</title>

    <?php wp_head(); ?>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="80">

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-fixed-top before-color">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand alo" href="index.html">Bonativo</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right scroll-to">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="post-single.html">Blog Post</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="typography.html">Typography</a></li>

                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div class="fullwidthbanner" id="home">
        <div class="tp-banner">
            <ul>
                <?php
                $global = $post;
                $myposts = get_posts([
                    'numberpost' => -1,
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>

                        <!-- SLIDE 1 -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/bg-1.jpg" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption slider-title" data-x="center" data-y="center" data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                                <?php the_title('slider'); ?> welcome to <span>Bonativo</span>
                            </div> <!-- /tp-caption -->
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit aute irure
                            </div> <!-- /tp-caption -->

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                                <a class="btn btn-white" href="#about">See more</a>
                            </div> <!-- /tp-caption -->
                        </li>
                        <!-- SLIDE 2 -->
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div><!--full width banner-->
