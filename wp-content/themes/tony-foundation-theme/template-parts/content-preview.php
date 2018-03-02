<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tony_Foundation
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail('tonyfoundation-preview'); ?>
	<div class="preview-text-wrapper">
		<div class="entry-meta preview">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<?php
			tonyfoundation_posted_on();
			// tonyfoundation_posted_by();
		?>

		</div><!-- .entry-meta -->
		<?php
		endif; ?>

	<div class="entry-content preview">
		<?php
			the_excerpt( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tonyfoundation' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tonyfoundation' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	</div><!--preview-text-wrapper-->

</div><!-- #post-<?php the_ID(); ?> -->
