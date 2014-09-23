<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package nake-benehime
 */
?>
				
	<?php
	// If footer sidebars do not have widget let's bail.
	
	if (	! is_active_sidebar( 'home-widget-1' ) &&
				! is_active_sidebar( 'home-widget-2' ) &&
				! is_active_sidebar( 'home-widget-3' ) &&
				! is_active_sidebar( 'home-widget-4' ) &&
				! is_active_sidebar( 'home-widget-5' ))
		return;
	// If we made it this far we must have widgets.
	?>

	<div class="home-widget-area row">
		<?php if ( is_active_sidebar( 'home-widget-1' ) ) : ?>
		<div class="col-sm-12 col-md-6 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-1' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-2' ) ) : ?>
		<div class="col-sm-12 col-md-6 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-2' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>

	</div>
</div>
<div class="inverse inverse-lg inverse-green">
	<div class="container"
	<div class="home-widget-area row">
		<div class="page-header">
			<h1 class="text-center text-light">Here's what other's are saying about VCCS New Horizons</h1>
		</div>
		<?php if ( is_active_sidebar( 'home-widget-3' ) ) : ?>
		<div class="col-sm-12 col-md-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-3' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-4' ) ) : ?>
		<div class="col-sm-12 col-md-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-4' ); ?>
		</div><!-- .widget-area .second -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'home-widget-5' ) ) : ?>
		<div class="col-sm-12 col-md-4 home-widget" role="complementary">
			<?php dynamic_sidebar( 'home-widget-5' ); ?>
		</div><!-- .widget-area .third -->
		<?php endif; ?>
	</div>
</div>
