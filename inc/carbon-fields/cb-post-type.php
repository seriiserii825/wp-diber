<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_slider_options' );
function crb_attach_slider_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'slider' )
		->add_fields( array(
			Field::make( 'text', 'crb_slider_link', __( 'Testo per il collegamento alla pagina' ) )
			->set_width(50),
			Field::make( 'text', 'crb_slider_link_id', __( "Id pagina dall'area di amministrazione" ) )
			 ->set_width(50),
		) );
}
