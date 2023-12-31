<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->

	<?php
endif;
if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

	<aside class="widget-area">
		<div class="footer-widgets column-two grid-item">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
	</aside><!-- .widget-area -->

	<?php
endif;
