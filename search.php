<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package sparkle_rune
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main sparkle-flex">
			<div class="sparkle-main-side">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'sparkle_rune' ), '<span>' . get_search_query() . '</span>' );
				?></h2>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ): the_post();
				?>
				<section class="sparkle-excerpt">
					<div class="sparkle-excerpt-heading">
						<div class="sparkle-post-title">
							<h2 ><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h2>
							<p class="sparkle-post-date"> 
				 				<span> posted <?php echo get_the_date(); ?>, By: <?php echo the_author_meta('display_name'); ?>  </span>
				 			</p> 
				 			
						</div>
						<?php if(!empty(get_the_post_thumbnail_url())): ?>
							<div class="sparkle-thumbnail-wrapper">
								<div class="sparkle-thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
							</div>
				 		
				 	
					</div>
				 	<?php endif; ?>
					
				</div>
				 	<div class="sparkle-content">
				 				<?php echo the_excerpt(); ?>
				 			</div>
				 	<?php if (!empty(the_tags())): ?>
				 	<span class="sparkle-tags">
				 		posted in: <?php the_tags("", ", ") ?>
				 	</span>
				 <?php endif; ?>
				 </section>
			

			<?php 
			endwhile;
			
			else:

				echo "<div class='sparkle-entry-content'>  <h2>Sorry, didn't find nothing</h2><p> you might as well go on and look for something else</p></div>";
			endif;
			 ?>

		</div>
					<div class="sparkle-sidebar-wrapper" id="sparkle-sidebar-wrapper">
				<section class="sparkle-sidebar" id="sparkle-sidebar">
				 	<?php 
				 		get_sidebar();
				 	 ?>
				</section>
				<div class="sparkle-center sparkle-close" id="sparkle-sidebar-closer"> ▲ </div>		
 			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>




