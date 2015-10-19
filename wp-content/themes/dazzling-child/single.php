<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dazzling
 */

get_header(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout', 'no entry' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php dazzling_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!--conditional statement to call specific sidebars based on the post category-->
<?php
    //to be able to use this outside the_Loop
    if ( have_posts() ) { the_post(); rewind_posts(); }  

    if ( in_category('tradesofhope') ) {
        get_sidebar('TOH');
        //gets sidebar-TOH.php
    } elseif ( in_category('life') ) {
        get_sidebar('life');
        //gets sidebar-life.php
    } elseif ( in_category('mjdevelopz') ) {
        get_sidebar('mjdevelopz');
        //gets sidebar-mjdevelopz.php
    } elseif ( in_category('seraphinaknits') ) {
        get_sidebar('seraphinaknits');
        //gets sidebar-mjdevelopz.php
    }elseif ( in_category('uncategorized') ) {
        get_sidebar('sidebar');
        //gets sidebar-cat75.php
//repeat as necessary
    } else {
        get_sidebar();
        //gets sidebar.php
    }
?>


<?php get_footer(); ?>