<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkle_rune
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<div class="sparkle-post-title">
							<h2 ><a href="<?php echo get_permalink(); ?>"><?php 
							if (!empty(get_the_title())) {
								echo the_title(); 
							} else {
								echo "Read Full Post...";
							}

							?></a></h2>
							<p class="sparkle-post-date"> 
				 				<span> posted <?php echo get_the_date(); ?>, By: <?php echo the_author_meta('display_name'); ?>  </span>
				 			</p> 
				 			
						</div>
	</header><!-- .entry-header -->

	<div class="sparkle-entry-content">


		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sparkle_rune' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'sparkle_rune' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->


