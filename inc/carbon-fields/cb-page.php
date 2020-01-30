<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_page_finance_options' );
function crb_attach_page_finance_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_id', '=', 5 )
	         ->add_tab( __( 'Le nostre birre' ), array(
		         Field::make( 'text', 'crb_le_nostre_bire_title', __( 'Title' ) )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_le_nostre_bire_text', __( 'Text' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_le_nostre_bire_link', __( 'Testo per il collegamento alla pagina' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_le_nostre_bire_link_id', __( "Id pagina dall'area di amministrazione" ) )
		              ->set_width( 50 ),

		         Field::make( 'image', 'crb_le_nostre_bire_img', __( 'Immagine' ) )
		              ->set_value_type( 'url' )
		              ->set_help_text( '910x585, format png' )
	         ) )
	         ->add_tab( __( 'Alte bevande' ), array(
		         Field::make( 'text', 'crb_alte_bevande_link', __( 'Testo per il collegamento alla pagina' ) )
	         ) )
	         ->add_tab( __( 'I nostri servizi' ), array(
		         Field::make( 'text', 'crb_nostri_servizi_link', __( 'Intestazione del blocco' ) )
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_page_services_options' );
function crb_attach_page_services_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_id', '=', 11 )
	         ->add_tab( __( 'Fields' ), array(
		         Field::make( 'image', 'crb_services_img', __( 'Immagine' ) )
		              ->set_value_type( 'url' )
		              ->set_help_text( '1920x724' ),
		         Field::make( 'text', 'crb_services_title', __( 'Intestazione del pagina' ) )
	         ) );
}
