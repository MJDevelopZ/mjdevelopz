<?php
/**
 * Template Name: Front Page (full-width)
 *
 *
 * @package Dazzling Child
 * @subpackage Dazzling
 * @since Dazzling Child 1.0
 */

get_header(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-front'); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<!--Add a "sidebar" above the footer like in twenty thirteen?-->
