<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blackbird-demo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blackbird-demo' ); ?></a> -->

	<header id="header" class="alt">

		<?php
		the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
			<a class="logo is-fp-and-home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php
		else :
			?>
			<a class="logo either-fp-or-home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php
		endif;
		?>

		<nav id="menu">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'links',
			) );
			?>
		</nav>

		<nav>
			<a href="#menu"><?php esc_html_e( 'Primary Menu', 'blackbird-demo' ); ?></a>
		</nav>

	</header><!-- #masthead -->
