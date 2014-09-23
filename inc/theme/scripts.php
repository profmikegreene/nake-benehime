<?php
/* ==================================================================
*
*   Copy of dazzling_scripts from dazzling theme functions.php file
*		Had to wrap the original dazzling_scripts functions with
*		if ( ! function_exists( 'dazzling_scripts' ) ) {
*
*		}
*		in the dazzling theme functions.php file to make this work
*
* -----------------------------------------------------------------*/

if ( ! function_exists( 'dazzling_scripts' ) ) {
	function dazzling_scripts() {

	  wp_enqueue_style( 'dazzling-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );

	  wp_enqueue_style( 'dazzling-icons', get_template_directory_uri().'/inc/css/font-awesome.min.css' );

	  if( ( is_home() || is_front_page() ) && of_get_option('dazzling_slider_checkbox') == 1 ) {
			wp_enqueue_style( 'flexslider-css', get_template_directory_uri().'/inc/css/flexslider.css' );
	  }

	  wp_enqueue_style( 'dazzling', get_template_directory_uri() . '/style.css' );

		wp_enqueue_script('dazzling-bootstrapjs', get_template_directory_uri().'/inc/js/bootstrap.min.js', array('jquery') );

		if( ( is_home() || is_front_page() ) && of_get_option('dazzling_slider_checkbox') == 1 ) {
			wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/inc/js/flexslider.min.js', array('jquery'), '20140222', true );
		}

		wp_enqueue_script( 'dazzling-main', get_template_directory_uri() . '/inc/js/main.js', array('jquery') );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'dazzling_scripts' );

/* ==================================================================
*
*   Enqueue Nake Benehime styles and scripts
*
* -----------------------------------------------------------------*/

function nake_benehime_enqueue_scripts() {
	wp_enqueue_style( 'nake-benehime', get_stylesheet_directory_uri() . '/inc/css/compiled.css', array('dazzling') );


}
add_action( 'wp_enqueue_scripts', 'nake_benehime_enqueue_scripts' );
?>