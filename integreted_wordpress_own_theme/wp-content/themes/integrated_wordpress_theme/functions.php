<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
	wp_enqueue_style( 'icons', get_template_directory_uri() . '/assets/icons/css/ionicons.min.css');
	wp_enqueue_style( 'simple-icons', get_template_directory_uri() . '/assets/icons/css/simple-line-icons.css');
	wp_enqueue_style( 'rs-plugin', get_template_directory_uri() . '/assets/rs-plugin/css/settings.css');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/assets/css/prettyPhoto.css');


    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'moderniz-min-js', get_template_directory_uri() . '/assets/js/moderniz.min.js', array(), 'null', true );
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), 'null', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), 'null', true );
    wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array(), 'null', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), 'null', true );
    wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', array(), 'null', true );
    wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/assets/js/jqBootstrapValidation.js', array(), 'null', true );
    wp_enqueue_script( 'themepunch-tools', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.tools.min.js', array(), 'null', true );
    wp_enqueue_script( 'themepunch-revolution', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), 'null', true );
    wp_enqueue_script( 'template-js', get_template_directory_uri() . '/assets/js/template.js', array(), 'null', true );


} );

add_theme_support('post_thumbnails');
add_theme_support('title_tag');
add_theme_support('custom_logo');
add_theme_support( 'menus' );

?>


