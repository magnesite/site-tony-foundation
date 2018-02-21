<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tony_Foundation
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<img class="hero" src="<?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1.png" width="2000" height="703" alt="TF Local" srcset="<?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1.png 2000w, <?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1-300x105.png 300w, <?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1-768x270.png 768w, <?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1-1024x360.png 1024w" sizes="(max-width: 2000px) 100vw, 2000px">

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
