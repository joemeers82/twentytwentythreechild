<?php
/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles',20 );

function my_theme_enqueue_styles() {
	$parenthandle = 'twentytwentythree';
		wp_enqueue_style( 'tailwind-css',
		get_stylesheet_directory_uri().'/dist/output.css',
	);
}


function wpdocs_enqueue_scripts() {
  wp_enqueue_style( 'tailwind-css',
		get_stylesheet_directory_uri().'/dist/output.css');

}
add_action( 'enqueue_block_editor_assets', 'wpdocs_enqueue_scripts' );

function register_acf_blocks() {
    
    register_block_type( __DIR__ . '/blocks/hero/block.json' );
    register_block_type( __DIR__ . '/blocks/tech-list/block.json' );
    register_block_type( __DIR__ . '/blocks/project-archive/block.json' );
    register_block_type( __DIR__ . '/blocks/project-hero/block.json' );
  }
  add_action( 'init', 'register_acf_blocks' );

