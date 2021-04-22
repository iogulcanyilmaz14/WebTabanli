<?php
/**
 * Displays footer widgets if assigned
 *
 * @subpackage lz-toy-store
 * @since 1.0
 * @version 1.4
 */

?>
<div class="white-border1">
<aside class="widget-area " role="complementary">
	<div class="row">
		<div class="widget-column footer-widget-1 col-lg-4 col-md-4">
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
		<div class="widget-column footer-widget-2 col-lg-4 col-md-4">
			<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>	
		<div class="widget-column footer-widget-3 col-lg-4 col-md-4">
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
	</div>
</aside>
</div>