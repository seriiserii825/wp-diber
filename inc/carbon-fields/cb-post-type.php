<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_beer_options' );
function crb_attach_beer_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'beer' )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_beer_title', __( 'Titolo da visualizzare nella pagina di un singolo record' ) ),
		         Field::make( 'text', 'crb_beer_link', __( "Riferimento al produttore di birra" ) )
		              ->set_width(50),
		         Field::make( 'text', 'crb_beer_url', __( 'Link del collegamento' ) )
		              ->set_width(50),

		         Field::make( 'complex', 'crb_beer_links', __( 'Collegamento alle filiali' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'text', __( 'Nome del collegamento' ) )
			                   ->set_width(50),
			              Field::make( 'file', 'file', __( "Pdf file" ) )
				              ->set_value_type( 'url' )
			                   ->set_width(50),
		              ) )
		              ->set_layout( 'tabbed-horizontal' )
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_bevanda_options' );
function crb_attach_bevanda_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'bevanda' )
	         ->add_fields( array(
		         Field::make( 'radio', 'crb_show_link', __( 'Show link' ) )
		              ->set_options( array(
			              'show' => 'show',
			              'hide' => 'hide',
		              ) ),
		         Field::make( 'text', 'crb_bevanda_link', __( 'Riferimento al produttore' ) )
			         ->set_conditional_logic( array(
				         'relation' => 'AND', // Optional, defaults to "AND"
				         array(
					         'field' => 'crb_show_link',
					         'value' => 'show', // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					         'compare' => '=', // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				         )
			         ) ),
	         ) );
}
