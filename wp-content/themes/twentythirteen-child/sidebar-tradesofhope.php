<?php
/**
 * The sidebar containing the secondary widget area for all posts categorized as Trades of Hope
 *
 *
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="tertiary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
				<P>Where is this?</P>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>