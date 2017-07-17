<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparkle_rune
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="sparkle-footer">
		<div class="sparkle-flex-column-wrap">
			
			<p class="sparkle-footer-menu-item">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s', 'sparkle_rune' ), 'sparkle_rune,', '<a href="https://automattic.com/">Chris Rune</a></p>' );
			?>
			<a class="sparkle-footer-menu-item" href="<?php echo esc_url( __( 'https://wordpress.org/', 'sparkle_rune' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'sparkle_rune' ), 'WordPress' );
			?></a>
		</div>
		<div class="sparkle-flex sparkle-left-border sparkle-flex-column-wrap">
			<?php $headerLinks = wp_get_nav_menu_items('Menu 1');
				foreach ($headerLinks as $key => $value): ?>

				<a href="<?php echo $value->url; ?>" class="sparkle-footer-menu-item" ><?php echo $value->title; ?></a>
		

		<?php endforeach; ?>
			<a href="<?php echo get_site_url(); ?>/wp-admin" class="sparkle-footer-menu-item">Log in</a>
		</div>
	
	

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
