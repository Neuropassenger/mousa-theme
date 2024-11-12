<?php
add_action( 'init', 'mousa_enqueue_block_styles' );
function mousa_enqueue_block_styles() {
    wp_enqueue_block_style( 'core/paragraph', array(
		'handle' => 'mousa-block-paragraph',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-paragraph.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-paragraph.css" )
	) );
}