<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sparkle_rune
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<header class="sparkle-card">
	<?php
	while ( have_posts() ) : the_post();
		$title = get_the_title();
		if (empty($title)){
			echo '<div class="sparkle-header-wrapper" ><h2 class="sparkle-entry-title">' . get_the_date() . '</h2></div>';
		}
		if ( is_singular() ) :
			the_title( '<div class="sparkle-header-wrapper" ><h2 class="sparkle-entry-title">', '</h2></div>' );
		else :
			the_title( '<h2 class="sparkle-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; 
				
		?>
		</header>
		<main id="main" class="site-main sparkle-flex">
			<div class="sparkle-main-side">
		<?php
		

			get_template_part( 'template-parts/content', get_post_format() );


				the_post_navigation();
			 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
			<div class="sparkle-sidebar-wrapper">
				<section class="sparkle-sidebar" id="sparkle-sidebar">
				 	<?php 
				 		get_sidebar();
				 	 ?>
				</section>
				<div class="sparkle-center sparkle-close" id="sparkle-sidebar-closer"> ▲ </div>		
 			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
