<?php
/**
 * The default template for displaying content on the front page
 *
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen_Child
 * @since Twenty Thirteen Child 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<hr><h1>Recent</h1><hr>
	</header><!-- .entry-header -->

	<!--The most recent blog entry excerpt-->
	<section id="featuredPost">
		<?php

			// The Query
			$args = array (
				'posts_per_page'		 => '1',
				'order'                  => 'DESC',
				'orderby'                => 'date',
				'year'                   => '2015',
			);
		?>

		<!--The Query-->
		<?php $query = new WP_Query( $args ); ?>

		<!--The Loop-->
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

			<!--Begin If/Else to check for featured image-->
			<?php if ( has_post_thumbnail() ) { ?>
				
					<div id="featuredImage">
						<?php the_post_thumbnail() ;?>
					</div>

					<div id="featuredContent">
						<h2 id="featuredPostTitle"><?php the_title();?></h2>
						<p id="featuredPostContent"><?php the_excerpt();?></p>
					</div>
				
			<?php } else { ?>
				<div id="onlyFeaturedContent">
					<h2 id="featuredPostTitle"><?php the_title();?></h2>
					<p id="featuredPostContent"><?php the_excerpt();?></p>
				</div>
			<?php } ?>
		
		<?php endwhile; else: ?>
			
			<p>Sorry, there are no posts to display</p>

		<?php endif; ?>
		
		<!--Restore original Post Data -->
		<?php wp_reset_postdata(); ?>
	
	</section><!--closes #featuredPost-->
	
	<!--End recent blog-->
	
	<!--New section displaying most recent post in each category (1 / category)-->
	<header class="section2">
			<hr><h2 id="moreRecents">More Recents</h2><hr>
	</header>
	<section class="moreRecent">
		<div class="category">
			<div id="mjdevelopz">
				<?php

					// The Query
					$args = array (
						'category_name'          => 'MJDevelopz',
						'posts_per_page'         => '1',
						'order'                  => 'DESC',
						'orderby'                => 'date',
					);
				?>

				<!--The Query-->
				<?php $query = new WP_Query( $args ); ?>

				<!--The Loop-->
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

					<div class="moreThumbnail">
						<//php the_post_thumbnail(); ?>
					</div>

					<div class="beforeCatTitle">
						
					</div>

					<div class="moreContent">
						<h2><?php the_title();?></h2>
						<p>Recently in: <?php echo get_the_category_by_id(3); ?></p>
						<p><?php the_excerpt();?></p>
					</div>
		
				<?php endwhile; ?>
		
				<!--Restore original Post Data -->
				<?php wp_reset_postdata(); ?>
			</div><!--closes #mjdevelopz-->

			<div id="tradesOfHope">
				<?php

					// The Query
					$args = array (
						'category_name'          => 'Trades of Hope',
						'posts_per_page'         => '1',
						'order'                  => 'DESC',
						'orderby'                => 'date',
					);
				?>

				<!--The Query-->
				<?php $query = new WP_Query( $args ); ?>

				<!--The Loop-->
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

					<div class="moreThumbnail">
						<//php the_post_thumbnail(); ?>
					</div>

					<div class="beforeCatTitle">
						
					</div>

					<div class="moreContent">
						<h2><?php the_title();?></h2>
						<p>Recently in: <?php echo get_the_category_by_id(4); ?></p>
						<p><?php the_excerpt();?></p>
					</div>
		
				<?php endwhile; ?>
		
				<!--Restore original Post Data -->
				<?php wp_reset_postdata(); ?>
			</div><!--closes #tradesofhope-->

			<div id="seraphinaknits">
				<?php

					// The Query
					$args = array (
						'category_name'          => 'SeraphinaKnits',
						'posts_per_page'         => '1',
						'order'                  => 'DESC',
						'orderby'                => 'date',
					);
				?>

				<!--The Query-->
				<?php $query = new WP_Query( $args ); ?>

				<!--The Loop-->
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

					<div class="moreThumbnail">
						<//php the_post_thumbnail(); ?>
					</div>

					<div class="beforeCatTitle">
						
					</div>

					<div class="moreContent">
						<h2><?php the_title();?></h2>
						<p>Recently in: <?php echo get_the_category_by_id(5); ?></p>
						<p><?php the_excerpt();?></p>
					</div>
		
				<?php endwhile; ?>
		
				<!--Restore original Post Data -->
				<?php wp_reset_postdata(); ?>
			</div><!--closes #seraphinaknits-->

			<div id="life">
				<?php

					// The Query
					$args = array (
						'category_name'          => 'Life',
						'posts_per_page'         => '1',
						'order'                  => 'DESC',
						'orderby'                => 'date',
					);
				?>

				<!--The Query-->
				<?php $query = new WP_Query( $args ); ?>

				<!--The Loop-->
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

					<div class="moreThumbnail">
						<//php the_post_thumbnail(); ?>
					</div>

					<div class="beforeCatTitle">
						
					</div>

					<div class="moreContent">
						<h2><?php the_title();?></h2>
						<p>Recently in: <?php echo get_the_category_by_id(6); ?></p>
						<p><?php the_excerpt();?></p>
					</div>
		
				<?php endwhile; ?>
		
				<!--Restore original Post Data -->
				<?php wp_reset_postdata(); ?>
			</div><!--closes #life-->

		</div><!--closes .category-->


	</section>

	<!--End section-->

</article><!-- #post -->
