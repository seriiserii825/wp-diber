<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	$basic_options_container = Container::make( 'theme_options', __( 'Carbon Fields' ) )
		->add_tab( __( 'Info' ), array(
			Field::make( 'text', 'crb_facebook', __( 'Facebook' ) )
				 ->set_width( 50 ),
			Field::make( 'text', 'crb_instagram', __( 'Instagram' ) )
				 ->set_width( 50 ),

			Field::make( 'image', 'crb_logo', __( 'Logo' ) )
			     ->set_value_type( 'url' )
				->set_help_text('170x90, format svg')
			     ->set_width( 50 ),
		) );

//	 Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Blocks' )
		 ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Slider' ), array(
			Field::make( 'text', 'crb_slider_button_text_ro', __( 'Button text ro' ) )
			     ->set_width( '50' ),
			Field::make( 'text', 'crb_slider_button_text_ru', __( 'Button text ru' ) )
			     ->set_width( '50' ),
		) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( __DIR__ . '/../../vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
