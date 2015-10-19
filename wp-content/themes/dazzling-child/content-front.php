<?php
/**
 * The template used for displaying page content in front-page.php
 *
 * @package Dazzling Child
 * @subpackage Dazzling
 * @since Dazzling Child 1.0
 */
?>

<div class="entry-content">
<section id="featuredPost">
	<header class="entry-header ">
		<hr><h1 class="recent-title">Recent</h1><hr>
	</header>

	<div class="featuredPost">
		<!--The most recent blog entry excerpt-->
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
						<h2 id="featuredPostTitle"><a href="<?php the_permalink() ?>" rel="bookmar"><?php the_title();?></a></h2>
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
	</div><!--closes .featuredPost-->
</section><!--closes #featuredPost-->

<section id="moreRecent">
	<header class="entry-header">
		<hr><h2 class="recent-title">More Recent</h2><hr>
	</header>

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

				<div>
				<div class="moreThumbnail">
					<?php the_post_thumbnail(); ?>
				</div>

				<div class="moreContent">
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a></h3>
					<p>Recently in: <?php echo get_the_category_by_id(3); ?></p>
					<p><?php the_excerpt();?></p>
				</div>
				<hr id="moreRecentBreak">
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

				<div>
				<div class="moreThumbnail">
					<?php the_post_thumbnail(); ?>
				</div>

				<div class="moreContent">
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a></h3>
					<p>Recently in: <?php echo get_the_category_by_id(4); ?></p>
					<p><?php the_excerpt();?></p>
				</div>
				<hr id="moreRecentBreak">
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

				<div>
				<div class="moreThumbnail">
					<?php the_post_thumbnail(); ?>
				</div>

				<div class="moreContent">
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a></h3>
					<p>Recently in: <?php echo get_the_category_by_id(5); ?></p>
					<p><?php the_excerpt();?></p>
				</div>
				<hr id="moreRecentBreak">
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

				<div>
				<div class="moreThumbnail">
					<?php the_post_thumbnail(); ?>
				</div>

				<div class="beforeCatTitle">
					
				</div>

				<div class="moreContent">
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a></h3>
					<p>Recently in: <?php echo get_the_category_by_id(6); ?></p>
					<p><?php the_excerpt();?></p>
				</div>
				</div>
	
			<?php endwhile; ?>
	
			<!--Restore original Post Data -->
			<?php wp_reset_postdata(); ?>
		</div><!--closes #life-->
	</div><!--closes .category-->
</section><!--closes #moreRecent-->

<!--Pagination-->
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'dazzling' ),
			'after'  => '</div>',
		) );
	?>

	
</div><!-- .entry-content -->
