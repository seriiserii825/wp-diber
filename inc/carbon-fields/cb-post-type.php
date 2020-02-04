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

add_action( 'carbon_fields_register_fields', 'crb_attach_beer_options' );
function crb_attach_beer_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'beer' )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_beer_title', __( 'Titolo da visualizzare nella pagina di un singolo record' ) )
		              ->set_width(50),
		         Field::make( 'text', 'crb_beer_link', __( "Riferimento al produttore di birra" ) )
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
		         Field::make( 'text', 'crb_bevanda_link', __( 'Riferimento al produttore' ) )
	         ) );
}
