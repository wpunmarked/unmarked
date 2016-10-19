<?php
/**
 * The sidebar containing the main widget area.
 */

if ( ! is_active_sidebar( 'primary-sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="col-md-4 widget-area" role="complementary">

	<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	
</div><!-- #secondary -->
