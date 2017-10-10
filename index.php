<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkle_rune
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main sparkle-flex">
			<div class="sparkle-main-side">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				?>
				<section <?php post_class('sparkle-excerpt') ?> >
					<div class="sparkle-excerpt-heading">
						<div class="sparkle-post-title">
							<h2 ><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h2>
							<p class="sparkle-post-date"> 
				 				<span> posted <?php echo get_the_date(); ?>, By: <?php echo the_author_meta('display_name'); ?>  </span>
				 			</p> 
				 			
						</div>
						<?php $thumb = get_the_post_thumbnail_url();


						if(!empty($thumb)): ?>
							<div class="sparkle-thumbnail-wrapper">
								<div class="sparkle-thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
							</div>
				 		
				 	
					</div>
				 	<?php endif; ?>
					
				</div>
				 	<div class="sparkle-content">
						<?php
						    if( strpos( $post->post_content, '<!--more-->' ) ) {
						        the_content('something' );
						        
						    }
						    else {
						        the_excerpt();
						    }
					?>

				 			</div>
				 	<?php if (!empty(the_tags())): ?>
				 	<span class="sparkle-tags">
				 		posted in: <?php the_tags("", ", ") ?>
				 	</span>
				 <?php endif; ?>
				 </section>
			

				<?php
			endwhile;
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
		<?php 
		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
?>