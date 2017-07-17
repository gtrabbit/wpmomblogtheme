<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkle_rune
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main sparkle-flex">

			<?php
			while ( have_posts() ) : the_post(); ?>
			<div class="sparkle-main-side">
				<div class="sparkle-header-wrapper"><h2 class="sparkle-entry-title"> <?php the_title() ?> </h2></div>
				
			
				<div class="sparkle-entry-content">
					<?php echo the_content(); ?>
				</div>
				
			</div>
			<div class="sparkle-sidebar-wrapper" id="sparkle-sidebar-wrapper">
				<section class="sparkle-sidebar" id="sparkle-sidebar">
				 	<?php 
				 		get_sidebar();
				 	 ?>
				</section>
				<div class="sparkle-center sparkle-close" id="sparkle-sidebar-closer"> ▲ </div>		
 			</div>
				
			<?php
			if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>


<?php
get_footer();

?>