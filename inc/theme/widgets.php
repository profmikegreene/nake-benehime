<?php
/**
 * Register widgetized area and update sidebar with default widgets.
 */
function nake_benehime_widgets_init() {
	unregister_sidebar( 'home-widget-1' );
	unregister_sidebar( 'home-widget-2' );
	unregister_sidebar( 'home-widget-3' );

	register_sidebar( array(
		'name'          => __( 'Homepage Fullwidth Widget 1', 'nake-benehime' ),
		'id'            => 'home-widget-fullwidth-1',
		'description' => __( 'Meant for Google Maps embed. Widgets in this area will be shown on the home page and are full width of the browser.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="page-header"><h1 class="widget-title text-center text-light">',
		'after_title'   => '</h1></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 1', 'nake-benehime' ),
		'id'            => 'home-widget-1',
		'description' => __( 'Meant for "What is New Horizons?" text. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 2', 'nake-benehime' ),
		'id'            => 'home-widget-2',
		'description' => __( 'Meant for "Who should attend?" text. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 3', 'nake-benehime' ),
		'id'            => 'home-widget-3',
		'description' => __( 'Meant for quote. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 4', 'nake-benehime' ),
		'id'            => 'home-widget-4',
		'description' => __( 'Meant for quote. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 5', 'nake-benehime' ),
		'id'            => 'home-widget-5',
		'description' => __( 'Meant for quote. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 6', 'nake-benehime' ),
		'id'            => 'home-widget-6',
		'description' => __( 'Meant for Day 1 Agenda. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 7', 'nake-benehime' ),
		'id'            => 'home-widget-7',
		'description' => __( 'Meant for Day 2 Agenda. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 8', 'nake-benehime' ),
		'id'            => 'home-widget-8',
		'description' => __( 'Meant for Day 3 Agenda. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 9', 'nake-benehime' ),
		'id'            => 'home-widget-9',
		'description' => __( 'Meant for highest level exhibitors. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 10', 'nake-benehime' ),
		'id'            => 'home-widget-10',
		'description' => __( 'Meant for second highest level exhibitors. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 11', 'nake-benehime' ),
		'id'            => 'home-widget-11',
		'description' => __( 'Meant for third highest level exhibitors. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Homepage Widget 12', 'nake-benehime' ),
		'id'            => 'home-widget-12',
		'description' => __( 'Meant for fourth highest level exhibitors. Widgets in this area will be shown on the home page.', 'nake-benehime' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	}
	add_action( 'widgets_init', 'nake_benehime_widgets_init', 11 );


?>