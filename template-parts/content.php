<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkle_rune
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		$featuredImage = get_the_post_thumbnail_url();
		if(!empty($featuredImage)): ?>
		<br>
			<div class="sparkle-feature-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"> </div>
			<p class="sparkle-feature-image-caption">
				<?php echo get_the_post_thumbnail_caption(); ?>
			</p>
	<?php endif; ?>
	


	<div class="sparkle-entry-content">
		<h2>
			<?php the_title(); ?>
		</h2>

			<?php
				
			if ( 'post' === get_post_type() ) : ?>
				<span class="sparkle-post-date sparkle-center"> 
					 <span> posted <?php echo get_the_date(); ?>, By: &nbsp;<?php echo the_author_meta('display_name'); ?>  </span>
					 			</span> 
			<?php
			endif; 

				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sparkle_rune' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
				?>
				<?php
				wp_link_pages( array(
					'before' => '<div class="sparkle-page-links">' . esc_html__( 'Pages:', 'sparkle_rune' ),
					'after'  => '</div>',
				) );
			?>
			
	</div><!-- .entry-content -->

	<footer class="sparkle-entry-footer">
		<?php sparkle_rune_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
