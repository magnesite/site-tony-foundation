<?php
/**
 * Template Name: About
 * @package Tony_Foundation
 * Template Post Type: tfcustompage
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

				<div class="about-hero-wrapper">
					<img class="about-hero-sm" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/tony-colors-banner-sm.jpg">
					<img class="about-hero-lg" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/tony-colors-banner.jpg">
					<a class="explore-colors">Explore more colors >></a>
				</div><!--hero-wrapper-->


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-about', 'page' );

			endwhile; // End of the loop.
			?>

			<section id="leadership" class="about-section">
				<h1>Our Leadership</h1>

			<div class="profile-list-wrapper">

					<?php $people_query = new WP_Query( array( 'post_type' => 'tfpeople' ) ); ?>

					<?php while ( $people_query->have_posts() ) : $people_query->the_post(); ?>

					<div class="profile-wrapper">
						<a href="<?php the_permalink($post->ID) ?>" class="post-thumbnail-link">
								<?php the_post_thumbnail('tonyfoundation-person', array('class' => 'circle-image')); ?>
						</a><!--post-thumbnail-link-->
								<?php
									the_title( '<h2 class="person-name"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>');
									echo '<h3 class="person-title">';
									echo get_post_meta($post->ID, 'person-title', true);
									echo '</h3>';?>

					</div><!--profile-wrapper-->

					<?php endwhile;?>

				</div><!--profile-list-wrapper-->
			</section>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
