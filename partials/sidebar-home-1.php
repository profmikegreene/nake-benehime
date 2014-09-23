<?php
/**
 * The Sidebar widget area for static frontpage.
 *
 * @package nake-benehime
 */
?>
				
	<?php
	// If footer sidebars do not have widget let's bail.
	
	if ( ! is_active_sidebar( 'home-widget-fullwidth-1' ) )
		return;
	// If we made it this far we must have widgets.
	?>
	
	<div class="home-widget-area row">
		<?php if ( is_active_sidebar( 'home-widget-fullwidth-1' ) ) : ?>
		<div class="home-widget home-widget-fullwidth" role="complementary">
			<?php dynamic_sidebar( 'home-widget-fullwidth-1' ); ?>
		</div><!-- .widget-area .first -->
		<?php endif; ?>

	</div>

