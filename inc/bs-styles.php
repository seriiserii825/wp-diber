<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function bs_diber_scripts() {
	wp_enqueue_style( 'bs-diber-style', get_stylesheet_uri() );
	wp_enqueue_style('bs-font-awesome-css', get_template_directory_uri().'/assets/libs/fontawesome/css/all.min.css');
//	wp_enqueue_style('bs-my-css', get_template_directory_uri().'/assets/css/my.css');
	wp_enqueue_style('bs-my-css', get_template_directory_uri().'/assets/css/my.css');

	// Регистрация jQuery
	add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
	function jquery_script_method() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
		wp_enqueue_script( 'jquery' );
	}

//	wp_enqueue_script('bs-slick.min', get_template_directory_uri().'/assets/libs/slick/slick/slick.min.js', ['jquery'], null, true);
	if(is_page(9) || is_page(7) ){
		wp_enqueue_script('bs-mixitup-js', get_template_directory_uri().'/assets/libs/mixitup/mixitup.min.js', ['jquery'], null, true);
	}
//	wp_enqueue_script('bs-main', get_template_directory_uri().'/assets/js/main.js', ['jquery'], null, true);
	wp_enqueue_script('bs-main', get_template_directory_uri().'/assets/js/main.js', ['jquery'], null, true);

//	wp_enqueue_script( 'bs-diber-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//
//	wp_enqueue_script( 'bs-diber-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
//
//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'bs_diber_scripts' );
