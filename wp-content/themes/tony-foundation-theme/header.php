<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tony_Foundation
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tonyfoundation' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Tony</a><?php the_custom_logo();?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Foundation</a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Tony</a><?php the_custom_logo();?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Foundation</a></p>
			<?php
			endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<img class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/3lines.png"/>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
