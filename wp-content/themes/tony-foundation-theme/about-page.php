<?php
/**
 * Template Name: About Page
 * @package Tony_Foundation
 * 
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<header class="about-page-header">
				<div class="about-hero-wrapper">
						<img src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/about-hero.png">
				</div><!--hero-wrapper-->
				<img class="cancer-color-band" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/colors.png">
			</header>

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>


			<section id="leadership" class="about-section">
				<h1>Our Leadership</h1>

				<div class="profile-wrapper">

				<div class="leader-profile">

					<img src="<?php echo get_template_directory_uri() . '/images/leader-photo-placeholder.png'; ?>"></img>
					<h2>Tony Ladaudio</h2>
					<h3>President</h3>
					<p>Bacon ipsum dolor amet shankle dolore fatback velit pork chop anim officia.</p>
				</div><!--leader-profile-->

				<div class="leader-profile">
					<img src="<?php echo get_template_directory_uri() . '/images/leader-photo-placeholder.png'; ?>"></img>
					<h2>Scott Patterson</h2>
					<h3>Vice President</h3>
					<p>Bacon ipsum dolor amet shankle dolore fatback velit pork chop anim officia.</p>
				</div><!--leader-profile-->

				<div class="leader-profile">
					<img src="<?php echo get_template_directory_uri() . '/images/leader-photo-placeholder.png'; ?>"></img>
					<h2>Hailey Pate</h2>
					<h3>Secretary and Technology Advisor</h3>
					<p>Bacon ipsum dolor amet shankle dolore fatback velit pork chop anim officia.</p>
				</div><!--leader-profile-->

				<div class="leader-profile">
					<img src="<?php echo get_template_directory_uri() . '/images/leader-photo-placeholder.png'; ?>"></img>
					<h2>Tony Aguilar</h2>
					<h3>Treasurer and Director of Accounting</h3>
					<p>Bacon ipsum dolor amet shankle dolore fatback velit pork chop anim officia.</p>
				</div><!--leader-profile-->

				<div class="leader-profile">
					<img src="<?php echo get_template_directory_uri() . '/images/leader-photo-placeholder.png'; ?>"></img>
					<h2>Kristine Devine</h2>
					<h3>Legal Advisor</h3>
					<p>Bacon ipsum dolor amet shankle dolore fatback velit pork chop anim officia.</p>
				</div><!--leader-profile-->

				<div class="leader-profile">
					<img src="<?php echo get_template_directory_uri() . '/images/leader-photo-placeholder.png'; ?>"></img>
					<h2>Tim Ladaudio</h2>
					<h3>Business Advisor</h3>
					<p>Bacon ipsum dolor amet shankle dolore fatback velit pork chop anim officia.</p>
				</div><!--leader-profile-->

				<div class="leader-profile">
					<img src="<?php echo get_template_directory_uri() . '/images/leader-photo-placeholder.png'; ?>"></img>
					<h2>Scott Stager</h2>
					<h3>Business Analyst</h3>
					<p>Bacon ipsum dolor amet shankle dolore fatback velit pork chop anim officia.</p>
				</div><!--leader-profile-->

				<div class="leader-profile">
					<img src="<?php echo get_template_directory_uri() . '/images/leader-photo-placeholder.png'; ?>"></img>
					<h2>William Hamner</h2>
					<h3>Accounting Advisor</h3>
					<p>Bacon ipsum dolor amet shankle dolore fatback velit pork chop anim officia.</p>
				</div><!--leader-profile-->

				</div><!--profile-wrapper-->
			</section>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
