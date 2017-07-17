<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparkle_rune
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Alegreya|Fresca|Roboto" rel="stylesheet">

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>./js/sparkle-scripts.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sparkle_rune' ); ?></a>
	<a href="<?php echo get_site_url(); ?>" class="sparkle-hide-links">
	<header id="masthead" class="site-header">
		<div class="sparkle-banner" style="background-image: url('<?php echo get_header_image(); ?>')">
		<h1> 
			<?php echo get_bloginfo('name'); ?>

		</h1>
		<p> 
			<?php echo get_bloginfo('description'); ?>
		</p>
	</div>
	<nav id="nav" class="sparkle-flex-nowrap sparkle-nav-menu" >
	<?php $headerLinks = wp_get_nav_menu_items('Menu 1');
		foreach ($headerLinks as $key => $value): ?>

			<a href="<?php echo $value->url; ?>" class="sparkle-nav-menu-item sparkle-always-black" ><?php echo $value->title; ?></a>
			<?php if ($key+1 < count($headerLinks) ){
				echo "&#8901;";
				} ?>

		<?php endforeach; ?>



	</nav>



	</header><!-- #masthead -->
	</a>
	<div id="content" class="site-content">
