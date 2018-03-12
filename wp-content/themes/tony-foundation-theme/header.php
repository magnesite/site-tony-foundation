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


	<!-- temporary call to local jquery for local dev -->
	<?php wp_enqueue_script("jquery"); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tonyfoundation' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a class="custom-logo-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Tony</a><?php the_custom_logo();?><a class="custom-logo-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Foundation</a></h1>
			<?php else : ?>
				<p class="site-title"><a class="custom-logo-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Tony</a><?php the_custom_logo();?><a class="custom-logo-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Foundation</a></p>
			<?php
			endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<svg class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" viewBox="0 0 27 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M26.611,0.628c0,-0.347 -0.281,-0.628 -0.628,-0.628l-25.355,0c-0.347,0 -0.628,0.281 -0.628,0.628l0,1.257c0,0.346 0.281,0.628 0.628,0.628l25.355,0c0.347,0 0.628,-0.282 0.628,-0.628l0,-1.257Z" style="fill:#595959;"/><path d="M26.611,7.699c0,-0.346 -0.281,-0.628 -0.628,-0.628l-25.355,0c-0.347,0 -0.628,0.282 -0.628,0.628l0,1.257c0,0.346 0.281,0.628 0.628,0.628l25.355,0c0.347,0 0.628,-0.282 0.628,-0.628l0,-1.257Z" style="fill:#595959;"/><path d="M26.611,14.771c0,-0.347 -0.281,-0.629 -0.628,-0.629l-25.355,0c-0.347,0 -0.628,0.282 -0.628,0.629l0,1.256c0,0.347 0.281,0.628 0.628,0.628l25.355,0c0.347,0 0.628,-0.281 0.628,-0.628l0,-1.256Z" style="fill:#595959;"/></g>
			</svg>
			<div class="super-menu">
				<a class="subscribe-button">Subscribe</a>
				<a class="donate-button">Donate</a>
			</div><!--super-menu-->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
