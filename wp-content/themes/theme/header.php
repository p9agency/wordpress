<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="content">
	<div class="content-inside">

		<header id="masthead" class="site-header" role="banner">
			<?php if ( has_nav_menu( 'header_menu' ) ) : ?>
				<nav class="footer-navigation" role="navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'header_menu',
							'menu_class'     => 'header_menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>
		</header><!-- .site-header -->