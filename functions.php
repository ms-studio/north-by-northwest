<?php 

function north_by_nw_register_styles() {
	
	wp_enqueue_style( 
		'parent-style', // $handle
		get_template_directory_uri() . '/style.css' // $src 
	);
	
}
add_action( 'wp_enqueue_scripts', 'north_by_nw_register_styles', 10 );
