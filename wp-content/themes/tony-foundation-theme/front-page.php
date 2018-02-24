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

	<div id="primary" class="content-area front-page">
		<main id="main" class="front-page-main">
			<img class="hero" src="<?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1.png" width="2000" height="703" alt="TF Local" srcset="<?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1.png 2000w, <?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1-300x105.png 300w, <?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1-768x270.png 768w, <?php echo site_url(); ?>/wp-content/uploads/2018/02/cropped-emerald-bay-1-1024x360.png 1024w" sizes="(max-width: 2000px) 100vw, 2000px">
			<img class="cancer-color-band" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/colors.png">
			<p class="mission-banner">The mission will go here, yo.</p>
			<div class="site-features-wrapper">
				<div class="site-feature">
				<svg width="100%" height="100%" viewBox="0 0 389 234" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
					<path id="_-Rectangle-" serif:id="(Rectangle)" d="M388.778,233.396l0,-233.396l-388.778,0l0,233.396l388.778,0Z" style="fill:url(#_Linear1);"/>
					<path d="M233.498,101.054c3.187,0 5.781,-2.564 5.781,-5.712c0,-3.149 -2.594,-5.711 -5.781,-5.711c-0.248,0 -0.572,0.03 -0.923,0.135l0,-0.647c0.351,0.106 0.675,0.135 0.923,0.135c3.187,0 5.781,-2.561 5.781,-5.71c0,-3.15 -2.594,-5.712 -5.781,-5.712c-0.248,0 -0.572,0.029 -0.923,0.135l0,-31.485c0,-2.664 -2.187,-4.824 -4.882,-4.824l-34.371,0c-2.696,0 -4.882,2.16 -4.882,4.824l0,43.723l-9.006,5.907l-0.089,0.059l-0.076,0.077c-6.191,6.396 -8.197,12.624 -9.395,16.346c-0.151,0.465 -0.289,0.895 -0.423,1.285c-0.951,2.78 -7.942,11.368 -10.555,14.444l-0.315,0.373l0.116,0.47c0.094,0.379 2.333,9.329 5.91,15.599c3.738,6.557 7.898,7.297 8.073,7.327l0.441,0.07l8.401,-6.99c2.294,-0.396 17.251,-3.298 22.594,-12.761l23.578,0c2.695,0 4.883,-2.161 4.883,-4.823l0,-3.072c0.35,0.106 0.674,0.134 0.922,0.134c3.187,0 5.781,-2.561 5.781,-5.709c0,-3.151 -2.594,-5.712 -5.781,-5.712c-0.248,0 -0.572,0.028 -0.922,0.134l0,-0.648c0.35,0.106 0.674,0.137 0.922,0.137c3.187,0 5.781,-2.561 5.781,-5.712c0,-3.148 -2.594,-5.709 -5.781,-5.709c-0.248,0 -0.572,0.028 -0.922,0.133l0,-0.647c0.349,0.106 0.673,0.137 0.921,0.137Zm-22.992,-55.744c0.507,0 0.916,0.405 0.916,0.905c0,0.499 -0.409,0.904 -0.916,0.904c-0.504,0 -0.914,-0.405 -0.914,-0.904c0,-0.5 0.41,-0.905 0.914,-0.905Zm-6.102,3.943c0,-0.044 0.055,-0.079 0.122,-0.079l11.962,0c0.068,0 0.123,0.035 0.123,0.079l0,1.045c0,0.044 -0.055,0.08 -0.123,0.08l-11.962,0c-0.067,0 -0.122,-0.036 -0.122,-0.08l0,-1.045Zm-23.453,94.072l-0.268,0.04l-8.075,6.72c-0.988,-0.357 -3.714,-1.703 -6.312,-6.262c-2.994,-5.248 -5.086,-12.726 -5.595,-14.65c1.706,-2.026 9.442,-11.333 10.587,-14.681c0.138,-0.403 0.281,-0.845 0.434,-1.319c1.216,-3.779 3.052,-9.479 8.876,-15.526l21.958,-14.403l0.126,-0.082l0.093,-0.117c0.298,-0.366 0.626,-0.735 0.978,-1.099c1.249,-1.291 4.36,-4.105 6.245,-2.325c2.126,2.006 0.838,7.114 -2.755,10.951l-5.283,4.491l-10.798,9.91l0.14,0.549c0.761,3.002 0.492,8.733 0.07,11.664c-0.83,5.774 -2.008,10.564 -8.821,15.257c-0.44,0.302 -0.545,0.899 -0.24,1.333c0.306,0.435 0.909,0.539 1.349,0.237c2.2,-1.515 3.86,-3.055 5.137,-4.626c0.721,1.772 2.474,3.024 4.527,3.024l8.52,0c-5.739,8.461 -20.728,10.887 -20.893,10.914Zm29.555,-14.774c-2.022,0 -3.66,-1.619 -3.66,-3.616c0,-2 1.638,-3.619 3.66,-3.619c2.023,0 3.663,1.619 3.663,3.619c0,1.996 -1.64,3.616 -3.663,3.616Zm18.616,-10.25c0,0.134 -0.11,0.242 -0.243,0.242l-35.752,0c0.057,-0.36 0.112,-0.722 0.164,-1.089c0.433,-2.997 0.695,-8.472 0.018,-11.838l9.928,-9.115l5.309,-4.515l0.077,-0.073c3.896,-4.133 6.04,-10.538 2.713,-13.678c-2.218,-2.095 -5.494,-1.224 -8.985,2.387c-0.353,0.363 -0.686,0.735 -0.992,1.106l-9.463,6.208l0,-33.06c0,-0.134 0.108,-0.244 0.242,-0.244l36.741,0c0.133,0 0.243,0.108 0.243,0.244l0,63.425Zm4.376,-38.555c2.118,0 3.843,1.703 3.843,3.798c0,2.093 -1.725,3.796 -3.843,3.796c-1.569,0 -1.689,-2.906 -1.689,-3.796c0,-0.892 0.12,-3.798 1.689,-3.798Zm0,35.397c2.118,0 3.843,1.705 3.843,3.799c0,2.093 -1.725,3.796 -3.843,3.796c-1.569,0 -1.689,-2.906 -1.689,-3.796c0,-0.893 0.12,-3.799 1.689,-3.799Zm0,-11.799c2.118,0 3.843,1.703 3.843,3.796c0,2.093 -1.725,3.799 -3.843,3.799c-1.569,0 -1.689,-2.906 -1.689,-3.799c0,-0.89 0.12,-3.796 1.689,-3.796Zm-1.689,-8.002c0,-0.89 0.121,-3.797 1.689,-3.797c2.118,0 3.843,1.703 3.843,3.797c0,2.093 -1.725,3.795 -3.843,3.795c-1.569,0 -1.689,-2.904 -1.689,-3.795Z" style="fill-rule:nonzero;"/>
					<defs>
						<linearGradient id="_Linear1" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.42914e-14,233.396,-388.778,2.38058e-14,194.389,0)"><stop offset="0" style="stop-color:#ccc;stop-opacity:1"/><stop offset="0.16" style="stop-color:#e3e3e3;stop-opacity:1"/><stop offset="0.36" style="stop-color:#f7f7f7;stop-opacity:1"/>
							<stop offset="1" style="stop-color:#fff;stop-opacity:1"/>
						</linearGradient>
					</defs>
				</svg>
				<p>Apply for support</p>
			</div><!--site-feature-->
			<div class="site-feature">
				<svg width="100%" height="100%" viewBox="0 0 389 234" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
					<path id="_-Rectangle-" serif:id="(Rectangle)" d="M388.778,233.396l0,-233.396l-388.778,0l0,233.396l388.778,0Z" style="fill:url(#_Linear1);"/>
					<path d="M233.498,101.054c3.187,0 5.781,-2.564 5.781,-5.712c0,-3.149 -2.594,-5.711 -5.781,-5.711c-0.248,0 -0.572,0.03 -0.923,0.135l0,-0.647c0.351,0.106 0.675,0.135 0.923,0.135c3.187,0 5.781,-2.561 5.781,-5.71c0,-3.15 -2.594,-5.712 -5.781,-5.712c-0.248,0 -0.572,0.029 -0.923,0.135l0,-31.485c0,-2.664 -2.187,-4.824 -4.882,-4.824l-34.371,0c-2.696,0 -4.882,2.16 -4.882,4.824l0,43.723l-9.006,5.907l-0.089,0.059l-0.076,0.077c-6.191,6.396 -8.197,12.624 -9.395,16.346c-0.151,0.465 -0.289,0.895 -0.423,1.285c-0.951,2.78 -7.942,11.368 -10.555,14.444l-0.315,0.373l0.116,0.47c0.094,0.379 2.333,9.329 5.91,15.599c3.738,6.557 7.898,7.297 8.073,7.327l0.441,0.07l8.401,-6.99c2.294,-0.396 17.251,-3.298 22.594,-12.761l23.578,0c2.695,0 4.883,-2.161 4.883,-4.823l0,-3.072c0.35,0.106 0.674,0.134 0.922,0.134c3.187,0 5.781,-2.561 5.781,-5.709c0,-3.151 -2.594,-5.712 -5.781,-5.712c-0.248,0 -0.572,0.028 -0.922,0.134l0,-0.648c0.35,0.106 0.674,0.137 0.922,0.137c3.187,0 5.781,-2.561 5.781,-5.712c0,-3.148 -2.594,-5.709 -5.781,-5.709c-0.248,0 -0.572,0.028 -0.922,0.133l0,-0.647c0.349,0.106 0.673,0.137 0.921,0.137Zm-22.992,-55.744c0.507,0 0.916,0.405 0.916,0.905c0,0.499 -0.409,0.904 -0.916,0.904c-0.504,0 -0.914,-0.405 -0.914,-0.904c0,-0.5 0.41,-0.905 0.914,-0.905Zm-6.102,3.943c0,-0.044 0.055,-0.079 0.122,-0.079l11.962,0c0.068,0 0.123,0.035 0.123,0.079l0,1.045c0,0.044 -0.055,0.08 -0.123,0.08l-11.962,0c-0.067,0 -0.122,-0.036 -0.122,-0.08l0,-1.045Zm-23.453,94.072l-0.268,0.04l-8.075,6.72c-0.988,-0.357 -3.714,-1.703 -6.312,-6.262c-2.994,-5.248 -5.086,-12.726 -5.595,-14.65c1.706,-2.026 9.442,-11.333 10.587,-14.681c0.138,-0.403 0.281,-0.845 0.434,-1.319c1.216,-3.779 3.052,-9.479 8.876,-15.526l21.958,-14.403l0.126,-0.082l0.093,-0.117c0.298,-0.366 0.626,-0.735 0.978,-1.099c1.249,-1.291 4.36,-4.105 6.245,-2.325c2.126,2.006 0.838,7.114 -2.755,10.951l-5.283,4.491l-10.798,9.91l0.14,0.549c0.761,3.002 0.492,8.733 0.07,11.664c-0.83,5.774 -2.008,10.564 -8.821,15.257c-0.44,0.302 -0.545,0.899 -0.24,1.333c0.306,0.435 0.909,0.539 1.349,0.237c2.2,-1.515 3.86,-3.055 5.137,-4.626c0.721,1.772 2.474,3.024 4.527,3.024l8.52,0c-5.739,8.461 -20.728,10.887 -20.893,10.914Zm29.555,-14.774c-2.022,0 -3.66,-1.619 -3.66,-3.616c0,-2 1.638,-3.619 3.66,-3.619c2.023,0 3.663,1.619 3.663,3.619c0,1.996 -1.64,3.616 -3.663,3.616Zm18.616,-10.25c0,0.134 -0.11,0.242 -0.243,0.242l-35.752,0c0.057,-0.36 0.112,-0.722 0.164,-1.089c0.433,-2.997 0.695,-8.472 0.018,-11.838l9.928,-9.115l5.309,-4.515l0.077,-0.073c3.896,-4.133 6.04,-10.538 2.713,-13.678c-2.218,-2.095 -5.494,-1.224 -8.985,2.387c-0.353,0.363 -0.686,0.735 -0.992,1.106l-9.463,6.208l0,-33.06c0,-0.134 0.108,-0.244 0.242,-0.244l36.741,0c0.133,0 0.243,0.108 0.243,0.244l0,63.425Zm4.376,-38.555c2.118,0 3.843,1.703 3.843,3.798c0,2.093 -1.725,3.796 -3.843,3.796c-1.569,0 -1.689,-2.906 -1.689,-3.796c0,-0.892 0.12,-3.798 1.689,-3.798Zm0,35.397c2.118,0 3.843,1.705 3.843,3.799c0,2.093 -1.725,3.796 -3.843,3.796c-1.569,0 -1.689,-2.906 -1.689,-3.796c0,-0.893 0.12,-3.799 1.689,-3.799Zm0,-11.799c2.118,0 3.843,1.703 3.843,3.796c0,2.093 -1.725,3.799 -3.843,3.799c-1.569,0 -1.689,-2.906 -1.689,-3.799c0,-0.89 0.12,-3.796 1.689,-3.796Zm-1.689,-8.002c0,-0.89 0.121,-3.797 1.689,-3.797c2.118,0 3.843,1.703 3.843,3.797c0,2.093 -1.725,3.795 -3.843,3.795c-1.569,0 -1.689,-2.904 -1.689,-3.795Z" style="fill-rule:nonzero;"/>
					<defs>
						<linearGradient id="_Linear1" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.42914e-14,233.396,-388.778,2.38058e-14,194.389,0)"><stop offset="0" style="stop-color:#ccc;stop-opacity:1"/><stop offset="0.16" style="stop-color:#e3e3e3;stop-opacity:1"/><stop offset="0.36" style="stop-color:#f7f7f7;stop-opacity:1"/>
							<stop offset="1" style="stop-color:#fff;stop-opacity:1"/>
						</linearGradient>
					</defs>
				</svg>
				<p>Apply for support</p>
			</div><!--site-feature-->
			<div class="site-feature">
				<svg width="100%" height="100%" viewBox="0 0 389 234" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
					<path id="_-Rectangle-" serif:id="(Rectangle)" d="M388.778,233.396l0,-233.396l-388.778,0l0,233.396l388.778,0Z" style="fill:url(#_Linear1);"/>
					<path d="M233.498,101.054c3.187,0 5.781,-2.564 5.781,-5.712c0,-3.149 -2.594,-5.711 -5.781,-5.711c-0.248,0 -0.572,0.03 -0.923,0.135l0,-0.647c0.351,0.106 0.675,0.135 0.923,0.135c3.187,0 5.781,-2.561 5.781,-5.71c0,-3.15 -2.594,-5.712 -5.781,-5.712c-0.248,0 -0.572,0.029 -0.923,0.135l0,-31.485c0,-2.664 -2.187,-4.824 -4.882,-4.824l-34.371,0c-2.696,0 -4.882,2.16 -4.882,4.824l0,43.723l-9.006,5.907l-0.089,0.059l-0.076,0.077c-6.191,6.396 -8.197,12.624 -9.395,16.346c-0.151,0.465 -0.289,0.895 -0.423,1.285c-0.951,2.78 -7.942,11.368 -10.555,14.444l-0.315,0.373l0.116,0.47c0.094,0.379 2.333,9.329 5.91,15.599c3.738,6.557 7.898,7.297 8.073,7.327l0.441,0.07l8.401,-6.99c2.294,-0.396 17.251,-3.298 22.594,-12.761l23.578,0c2.695,0 4.883,-2.161 4.883,-4.823l0,-3.072c0.35,0.106 0.674,0.134 0.922,0.134c3.187,0 5.781,-2.561 5.781,-5.709c0,-3.151 -2.594,-5.712 -5.781,-5.712c-0.248,0 -0.572,0.028 -0.922,0.134l0,-0.648c0.35,0.106 0.674,0.137 0.922,0.137c3.187,0 5.781,-2.561 5.781,-5.712c0,-3.148 -2.594,-5.709 -5.781,-5.709c-0.248,0 -0.572,0.028 -0.922,0.133l0,-0.647c0.349,0.106 0.673,0.137 0.921,0.137Zm-22.992,-55.744c0.507,0 0.916,0.405 0.916,0.905c0,0.499 -0.409,0.904 -0.916,0.904c-0.504,0 -0.914,-0.405 -0.914,-0.904c0,-0.5 0.41,-0.905 0.914,-0.905Zm-6.102,3.943c0,-0.044 0.055,-0.079 0.122,-0.079l11.962,0c0.068,0 0.123,0.035 0.123,0.079l0,1.045c0,0.044 -0.055,0.08 -0.123,0.08l-11.962,0c-0.067,0 -0.122,-0.036 -0.122,-0.08l0,-1.045Zm-23.453,94.072l-0.268,0.04l-8.075,6.72c-0.988,-0.357 -3.714,-1.703 -6.312,-6.262c-2.994,-5.248 -5.086,-12.726 -5.595,-14.65c1.706,-2.026 9.442,-11.333 10.587,-14.681c0.138,-0.403 0.281,-0.845 0.434,-1.319c1.216,-3.779 3.052,-9.479 8.876,-15.526l21.958,-14.403l0.126,-0.082l0.093,-0.117c0.298,-0.366 0.626,-0.735 0.978,-1.099c1.249,-1.291 4.36,-4.105 6.245,-2.325c2.126,2.006 0.838,7.114 -2.755,10.951l-5.283,4.491l-10.798,9.91l0.14,0.549c0.761,3.002 0.492,8.733 0.07,11.664c-0.83,5.774 -2.008,10.564 -8.821,15.257c-0.44,0.302 -0.545,0.899 -0.24,1.333c0.306,0.435 0.909,0.539 1.349,0.237c2.2,-1.515 3.86,-3.055 5.137,-4.626c0.721,1.772 2.474,3.024 4.527,3.024l8.52,0c-5.739,8.461 -20.728,10.887 -20.893,10.914Zm29.555,-14.774c-2.022,0 -3.66,-1.619 -3.66,-3.616c0,-2 1.638,-3.619 3.66,-3.619c2.023,0 3.663,1.619 3.663,3.619c0,1.996 -1.64,3.616 -3.663,3.616Zm18.616,-10.25c0,0.134 -0.11,0.242 -0.243,0.242l-35.752,0c0.057,-0.36 0.112,-0.722 0.164,-1.089c0.433,-2.997 0.695,-8.472 0.018,-11.838l9.928,-9.115l5.309,-4.515l0.077,-0.073c3.896,-4.133 6.04,-10.538 2.713,-13.678c-2.218,-2.095 -5.494,-1.224 -8.985,2.387c-0.353,0.363 -0.686,0.735 -0.992,1.106l-9.463,6.208l0,-33.06c0,-0.134 0.108,-0.244 0.242,-0.244l36.741,0c0.133,0 0.243,0.108 0.243,0.244l0,63.425Zm4.376,-38.555c2.118,0 3.843,1.703 3.843,3.798c0,2.093 -1.725,3.796 -3.843,3.796c-1.569,0 -1.689,-2.906 -1.689,-3.796c0,-0.892 0.12,-3.798 1.689,-3.798Zm0,35.397c2.118,0 3.843,1.705 3.843,3.799c0,2.093 -1.725,3.796 -3.843,3.796c-1.569,0 -1.689,-2.906 -1.689,-3.796c0,-0.893 0.12,-3.799 1.689,-3.799Zm0,-11.799c2.118,0 3.843,1.703 3.843,3.796c0,2.093 -1.725,3.799 -3.843,3.799c-1.569,0 -1.689,-2.906 -1.689,-3.799c0,-0.89 0.12,-3.796 1.689,-3.796Zm-1.689,-8.002c0,-0.89 0.121,-3.797 1.689,-3.797c2.118,0 3.843,1.703 3.843,3.797c0,2.093 -1.725,3.795 -3.843,3.795c-1.569,0 -1.689,-2.904 -1.689,-3.795Z" style="fill-rule:nonzero;"/>
					<defs>
						<linearGradient id="_Linear1" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.42914e-14,233.396,-388.778,2.38058e-14,194.389,0)"><stop offset="0" style="stop-color:#ccc;stop-opacity:1"/><stop offset="0.16" style="stop-color:#e3e3e3;stop-opacity:1"/><stop offset="0.36" style="stop-color:#f7f7f7;stop-opacity:1"/>
							<stop offset="1" style="stop-color:#fff;stop-opacity:1"/>
						</linearGradient>
					</defs>
				</svg>
				<p>Apply for support</p>
			</div><!--site-feature-->
			</div><!--site-features-wrapper-->

			<p>post thumbnails will go here</p>

			<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://wordpress.us17.list-manage.com/subscribe/post?u=33f69fccbfedf2f974900f158&amp;id=362de29c61" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list!</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_33f69fccbfedf2f974900f158_362de29c61" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='text';fnames[14]='MMERGE14';ftypes[14]='text';fnames[15]='MMERGE15';ftypes[15]='text';fnames[16]='MMERGE16';ftypes[16]='text';fnames[17]='MMERGE17';ftypes[17]='text';fnames[18]='MMERGE18';ftypes[18]='text';fnames[19]='MMERGE19';ftypes[19]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
