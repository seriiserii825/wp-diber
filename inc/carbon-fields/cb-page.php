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
		              ->set_width(50),
		         Field::make( 'text', 'crb_le_nostre_bire_link_id', __( "Id pagina dall'area di amministrazione" ) )
		              ->set_width(50),

		         Field::make( 'image', 'crb_le_nostre_bire_img', __( 'Immagine' ) )
		              ->set_value_type( 'url' )
		              ->set_help_text('910x585, format png')
	         ) );
}
