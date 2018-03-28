<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tony_Foundation
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<img class="footer-logo" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/tf-ribbon.png">
		<a class="join-link" href="<?php echo site_url(); ?>/subscribe">Join our mailing list</a>
		<ul class="page-list">
			<li><a href="<?php echo site_url(); ?>/about">About</a></li>
			<li><a href="<?php echo site_url(); ?>/about#tonys-story">Tony's Story</a></li>
			<li><a href="<?php echo site_url(); ?>/news">News</a></li>
			<!-- <li><a href="#">Apply for Support</a></li> -->
			<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
		</ul>
			<div class="social-wrapper">
				<a href="https://www.facebook.com/tonyfoundation"><svg id="icon-facebook" viewBox="0 0 19 32">
				<path class="path1" fill="#F2F2F2" d="M17.125 0.214v4.714h-2.804q-1.536 0-2.071 0.643t-0.536 1.929v3.375h5.232l-0.696 5.286h-4.536v13.554h-5.464v-13.554h-4.554v-5.286h4.554v-3.893q0-3.321 1.857-5.152t4.946-1.83q2.625 0 4.071 0.214z"></path>
			</svg></a>
				<a href="https://www.twitter.com/tony_foundation"><svg id="icon-twitter" viewBox="0 0 30 32">
				<path class="path1" fill="#F2F2F2" d="M28.929 7.286q-1.196 1.75-2.893 2.982 0.018 0.25 0.018 0.75 0 2.321-0.679 4.634t-2.063 4.437-3.295 3.759-4.607 2.607-5.768 0.973q-4.839 0-8.857-2.589 0.625 0.071 1.393 0.071 4.018 0 7.161-2.464-1.875-0.036-3.357-1.152t-2.036-2.848q0.589 0.089 1.089 0.089 0.768 0 1.518-0.196-2-0.411-3.313-1.991t-1.313-3.67v-0.071q1.214 0.679 2.607 0.732-1.179-0.786-1.875-2.054t-0.696-2.75q0-1.571 0.786-2.911 2.161 2.661 5.259 4.259t6.634 1.777q-0.143-0.679-0.143-1.321 0-2.393 1.688-4.080t4.080-1.688q2.5 0 4.214 1.821 1.946-0.375 3.661-1.393-0.661 2.054-2.536 3.179 1.661-0.179 3.321-0.893z"></path>
			</svg></a>
				<a href="#">
					<svg id="icon-linkedin" viewBox="0 0 45 44">
						<path fill="#F2F2F2" d="M41.751,0c1.793,0 3.249,1.456 3.249,3.249l0,37.502c0,1.793 -1.456,3.249 -3.249,3.249l-38.502,0c-1.793,0 -3.249,-1.456 -3.249,-3.249l0,-37.502c0,-1.793 1.456,-3.249 3.249,-3.249l38.502,0Zm-30.414,40c1.066,0 1.932,-0.866 1.932,-1.931l0,-20.138c0,-1.066 -0.866,-1.931 -1.932,-1.931l-3.862,0c-1.066,0 -1.932,0.865 -1.932,1.931l0,20.138c0,1.066 0.866,1.931 1.932,1.931l3.862,0Zm26.157,0c1.066,0 1.931,-0.613 1.931,-1.368l0.009,-13.152l-0.009,-0.112c0,-0.74 -0.02,-1.578 -0.02,-1.61c-0.32,-4.508 -4.318,-8.077 -9.021,-8.077c-3.364,0 -6.18,1.637 -7.123,4.015c0,0 0.008,-2.015 0.008,-2.015c0,-0.928 -0.754,-1.681 -1.682,-1.681l-3.362,0c-0.928,0 -1.682,0.753 -1.682,1.681l0,20.638c0,0.928 0.754,1.681 1.682,1.681l3.362,0c0.928,0 1.682,-0.753 1.682,-1.681l0,-12.642l0,0.323c-0.004,-2.615 2.126,-3.849 4.246,-3.881c2.092,-0.032 4.175,1.108 4.185,3.249l0,13.264c0,0.755 0.865,1.368 1.931,1.368l3.863,0Zm1.911,-16.242c0.013,0.193 0.02,0.387 0.02,0.583l-0.02,-0.583l0,0l0,-0.001l0,0.001Zm-30.136,-19.758c2.759,0 5,2.169 5,4.841c0,2.671 -2.241,4.84 -5,4.84c-2.76,0 -5,-2.169 -5,-4.84c0,-2.672 2.24,-4.841 5,-4.841Z"></path>
					</svg>
				</a>
			</div><!--social-wrapper-->
			<div class="legal-wrapper">
				<p class="copyright-notice">copyright statement goes here</p>
				<p><a href="#">Site Terms of Use</a> | <a href="#">Privacy Policy</a></p>
			</div><!--legal-wrapper-->


	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
