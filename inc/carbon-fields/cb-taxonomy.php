<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_bevande_type_options' );
function crb_attach_bevande_type_options() {
	Container::make( 'term_meta', __( 'Category Properties' ) )
	 ->where( 'term_taxonomy', '=', 'type' )
	 ->add_fields( array(
		 Field::make( 'image', 'crb_bevanda_img', __( 'Image' ) ),
	 ) );
}
