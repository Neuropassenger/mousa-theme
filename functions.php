<?php
add_action( 'init', 'mousa_enqueue_block_styles' );
function mousa_enqueue_block_styles() {
    wp_enqueue_block_style( 'core/paragraph', array(
		'handle' => 'mousa-block-paragraph',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-paragraph.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-paragraph.css" )
	) );

    wp_enqueue_block_style( 'core/quote', array(
		'handle' => 'mousa-block-quote',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-quote.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-quote.css" )
	) );

    wp_enqueue_block_style( 'core/list', array(
		'handle' => 'mousa-block-list',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-list.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-list.css" )
	) );

    wp_enqueue_block_style( 'core/button', array(
		'handle' => 'mousa-block-button',
		'src'    => get_theme_file_uri( "assets/css/blocks/core-button.css" ),
		'path'   => get_theme_file_path( "assets/css/blocks/core-button.css" )
	) );
}

add_action( 'admin_init', 'mousa_add_editor_styles' );
function mousa_add_editor_styles() {
    add_editor_style( get_theme_file_uri( "assets/css/editor.css?v=" . wp_get_theme()->get( 'Version' ) ) );
}