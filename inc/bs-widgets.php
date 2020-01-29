<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function bs_diber_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bs-diber' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bs-diber' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bs_diber_widgets_init' );

