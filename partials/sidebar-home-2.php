<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package dazzling
 */
?>
				
	<?php
	// If footer sidebars do not have widget let's bail.
	
	if (	! is_active_sidebar( 'home-widget-6' ) &&
				! is_active_sidebar( 'home-widget-7' ) &&
				! is_active_sidebar( 'home-widget-8' ) &&
				! is_active_sidebar( 'home-widget-9' ) &&
				! is_active_sidebar( 'home-widget-10' ) &&
				! is_active_sidebar( 'home-widget-11' ) &&
				! is_active_sidebar( 'home-widget-12' )
				)
		return;
	// If we made it this far we must have widgets.
	?>
	
	<div class="home-widget-area row">
		<?php if ( is_active_sidebar( 'home-widget-6' ) ) : ?>
		<div class="col-sm-12 col-md-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-6' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-7' ) ) : ?>
		<div class="col-sm-12 col-md-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-7' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-8' ) ) : ?>
		<div class="col-sm-12 col-md-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-8' ); ?>
		</div><!-- .widget-area .third -->
		<?php endif; ?>
	</div>
	<div class="home-widget-area row">
		<div class="page-header">
			<h1 class="text-center text-light">We couldn't do this without our exhibitors</h1>
		</div>
		<?php if ( is_active_sidebar( 'home-widget-9' ) ) : ?>
		<div class="col-sm-12 col-md-12 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-9' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-10' ) ) : ?>
		<div class="col-sm-12 col-md-12 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-10' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-11' ) ) : ?>
		<div class="col-sm-12 col-md-12 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-11' ); ?>
		</div><!-- .widget-area .third -->
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'home-widget-12' ) ) : ?>
		<div class="col-sm-12 col-md-12 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-12' ); ?>
		</div><!-- .widget-area .third -->
		<?php endif; ?>
	</div>
