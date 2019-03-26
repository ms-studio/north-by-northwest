<?php 

function north_by_nw_register_styles() {
	
	// Register parent style
	wp_enqueue_style( 
		'parent-style', // $handle
		get_template_directory_uri() . '/style.css', // $src 
		array(),
		'1.20'
	);

	
}
add_action( 'wp_enqueue_scripts', 'north_by_nw_register_styles', 10 );

function hitchcock_load_style() {
	if ( ! is_admin() ) {

		$dependencies = array();

		wp_enqueue_style( 
			'hitchcock_style', get_stylesheet_uri(), 
			$dependencies,
			'0.0.1'
		 );
	}
}
add_action( 'wp_print_styles', 'hitchcock_load_style' );
	
