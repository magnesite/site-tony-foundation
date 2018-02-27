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
			<div class="hero-wrapper">
					<p class="mission-banner">The Tony Foundation meets immediate needs for families whose primary income earner is impacted by cancer.</p>
			</div><!--hero-wrapper-->

			<div class="site-features-wrapper">
				<div class="site-feature">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="114px" height="125px">
						<g>
							<path transform="translate(0,17)" d="M104.443,15.778c1.716,-0.201 3.476,0.985 3.931,2.653l5.641,20.669l-0.274,0c-1.426,0 -2.959,-1.094 -3.425,-2.444l-2.447,-7.094l3.728,18.983c0,0 -2.921,0.274 -2.923,0.289l1.332,17.791c0.036,0.483 -0.327,0.875 -0.809,0.875l-1.321,0l-4.251,-18.205l-1.288,0l-1.943,17.339c-0.054,0.478 -0.488,0.866 -0.968,0.866l-1.433,0l-0.645,-46.499c-0.034,-2.42 1.888,-4.611 4.292,-4.893l2.803,-0.33Zm-2.965,-12.229c2.09,0 3.612,1.683 3.398,3.76l-0.244,2.385c-0.167,1.627 -1.631,2.946 -3.268,2.946l-0.369,0c-1.637,0 -3.1,-1.317 -3.267,-2.946l-0.245,-2.385c-0.213,-2.077 1.306,-3.76 3.398,-3.76l0.597,0Zm5.346,6.902c1.364,1.418 4.399,2.064 4.436,1.721c0.036,-0.343 -1.414,-0.825 -2.072,-2.977c-0.658,-2.152 -1.918,-1.847 -1.918,-1.847c-0.665,-0.09 -1.311,0.373 -1.332,1.044c0,0 -0.478,0.64 0.886,2.059Zm-90.626,-2.126c-0.17,1.682 -1.661,3.046 -3.329,3.046l-0.376,0c-1.669,0 -3.159,-1.362 -3.33,-3.046l-0.401,-3.791c-0.134,-1.152 0.66,-2.29 1.774,-2.546c0,0 1.12,-0.244 1.476,-0.371c0.781,-0.279 1.994,-1.601 1.994,-1.601c0.122,-0.048 0.26,0.014 0.309,0.138l0.06,0.154c0.05,0.125 0.188,0.187 0.31,0.14l0.152,-0.057c0.123,-0.047 0.298,-0.01 0.393,0.083l0.185,0.179c0.742,0.69 1.318,2.731 1.185,3.881l-0.402,3.791Zm-2.135,6.747c2.619,0.301 4.736,2.683 4.729,5.317l-0.036,13.95l0,33.011l-1.866,0c-0.483,0 -0.909,-0.387 -0.952,-0.874l-2.443,-27.305l-1.218,0l-4.271,27.959l-1.866,0c-0.483,0 -0.862,-0.388 -0.846,-0.878c0,0 0.99,-30.72 0.975,-30.973l-0.088,-7.191l-2.825,10.446c-0.277,1.024 -1.358,1.986 -2.406,2.146l-0.95,0.146l3.989,-22.702c0.4,-2.278 2.589,-3.912 4.886,-3.648l5.188,0.596Zm82.37,13.574l-7.943,6.121l-2.881,4.773c0.803,0.623 5.825,-3.48 6.671,-4.044l3.716,-2.477l0.437,-4.373Zm-76.534,0l7.943,6.121l-0.802,0.622c-0.804,0.624 -2.142,0.671 -2.988,0.107l-3.716,-2.477l-0.437,-4.373Zm23.1,7.507c-0.151,1.471 -1.477,2.663 -2.96,2.663l-0.334,0c-1.483,0 -2.808,-1.191 -2.959,-2.663l-0.357,-2.072c-0.119,-1.008 0.732,-3.137 3.444,-3.137c2.712,0 3.641,2.131 3.522,3.137l-0.356,2.072Zm-15.009,-1.385l0.024,0.243c0.107,1.074 0.961,2.358 1.914,2.871l4.625,5.408c0.792,0.428 1.423,1.504 1.408,2.406l-0.487,21.654l0.987,0c0.485,0 0.936,-0.389 1.006,-0.863l1.518,-10.26l1.219,0l1.921,10.048c0.09,0.472 0.559,0.855 1.042,0.855l0.987,0l-0.839,-18.156l2.461,4.894c0.478,0.95 1.629,-1.419 2.673,-1.65l-0.119,-0.876l-2.831,-5.559c-0.637,-1.913 -2.73,-3.909 -4.671,-4.457l-12.838,-6.558Zm44.983,8.052c0.151,1.471 1.476,2.663 2.959,2.663l0.334,0c1.483,0 2.808,-1.191 2.959,-2.663l0.358,-2.072c0.119,-1.008 -0.733,-2.792 -3.445,-2.792c-2.712,0 -3.641,1.786 -3.522,2.792l0.357,2.072Zm5.912,4.781c0,0 7.708,-8.773 6.756,-8.259l-4.284,10.06c-0.793,0.427 -1.361,2.059 -1.346,2.961l0.41,14.987l-0.987,0c-0.485,0 -0.936,-0.389 -1.006,-0.863l-0.78,-4.818l-2.157,-0.372l-1.721,4.978c-0.09,0.472 -0.559,0.855 -1.042,0.855l-0.987,0l0.915,-11.49l-1.257,-4.98c-0.478,0.95 -2.909,-6.083 -3.953,-6.314l-0.096,-0.021l1.711,-0.729c0.371,-1.114 1.681,2.663 3.121,4.302c1.034,1.178 2.15,0.324 2.962,0.095l3.741,-0.392Zm-21.547,-16.109c-1.931,0 -4.051,1.466 -4.735,3.271l-4.508,16.251l0.576,0.73c1.051,0.233 2.455,-4.151 2.942,-5.12l2.667,-8.477l0,29.203l0.987,0c0.485,0 0.936,-0.389 1.006,-0.863l1.518,-13.758l1.219,-0.438l1.92,13.984c0.091,0.472 0.56,0.855 1.042,0.855l0.987,0l-0.915,-28.983l2.462,4.894c0.478,0.951 1.704,1.536 2.749,1.305l0.095,-0.021l-3.848,-9.587c-0.719,-1.793 -2.865,-3.246 -4.798,-3.246l-1.366,0Zm-2.303,-4.416c0.151,1.471 1.478,2.663 2.963,2.663l0.335,0c1.485,0 2.812,-1.191 2.964,-2.663l0.357,-2.073c0.119,-1.007 -0.733,-3.136 -3.449,-3.136c-2.716,0 -3.646,2.131 -3.528,3.136l0.358,2.073Z"/>
							<text x="20" y="120" fill="#262626" font-size="20px" font-family="'Roboto Condensed', sans-serif">Our Story</text>
				</g>
					</svg>
			</div><!--site-feature-->
			<div class="site-feature">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="163px" height="125px">
					<g>
						<g transform="scale(.9)">
					<path transform="translate(35 5)" d="M77.814,53.375c2.565,0,4.652-2.088,4.652-4.652c0-2.565-2.087-4.651-4.652-4.651c-0.199,0-0.46,0.024-0.742,0.11v-0.527  c0.282,0.086,0.543,0.11,0.742,0.11c2.565,0,4.652-2.086,4.652-4.651c0-2.565-2.087-4.652-4.652-4.652  c-0.199,0-0.46,0.024-0.742,0.11V8.929c0-2.17-1.76-3.929-3.929-3.929H45.487c-2.17,0-3.929,1.759-3.929,3.929v35.61l-7.246,4.811  l-0.072,0.048l-0.061,0.063c-4.982,5.209-6.596,10.282-7.56,13.313c-0.121,0.379-0.232,0.729-0.34,1.047  c-0.765,2.264-6.391,9.258-8.493,11.764l-0.254,0.303l0.094,0.383c0.075,0.309,1.877,7.598,4.755,12.705  c3.008,5.34,6.355,5.943,6.496,5.967L29.232,95l6.76-5.693c1.846-0.322,13.881-2.686,18.18-10.393h18.972  c2.169,0,3.929-1.76,3.929-3.928v-2.502c0.282,0.086,0.543,0.109,0.742,0.109c2.565,0,4.652-2.086,4.652-4.65  c0-2.566-2.087-4.652-4.652-4.652c-0.199,0-0.46,0.023-0.742,0.109v-0.527c0.282,0.086,0.543,0.111,0.742,0.111  c2.565,0,4.652-2.086,4.652-4.652c0-2.564-2.087-4.65-4.652-4.65c-0.199,0-0.46,0.023-0.742,0.109v-0.527  C77.354,53.35,77.615,53.375,77.814,53.375z M59.314,7.974c0.408,0,0.737,0.33,0.737,0.737s-0.329,0.737-0.737,0.737  c-0.406,0-0.736-0.33-0.736-0.737S58.908,7.974,59.314,7.974z M54.404,11.186c0-0.036,0.044-0.065,0.098-0.065h9.625  c0.055,0,0.099,0.029,0.099,0.065v0.851c0,0.036-0.044,0.065-0.099,0.065h-9.625c-0.054,0-0.098-0.029-0.098-0.065V11.186z   M35.532,87.803l-0.215,0.033l-6.498,5.473c-0.795-0.291-2.988-1.387-5.079-5.1c-2.409-4.275-4.092-10.365-4.502-11.932  c1.373-1.65,7.598-9.23,8.519-11.957c0.111-0.328,0.226-0.688,0.349-1.074c0.979-3.078,2.456-7.721,7.142-12.646l17.669-11.73  l0.101-0.067l0.075-0.095c0.24-0.298,0.504-0.599,0.787-0.895c1.005-1.052,3.508-3.344,5.025-1.894  c1.711,1.634,0.674,5.794-2.217,8.919l-4.251,3.658l-8.688,8.071l0.112,0.447c0.613,2.445,0.396,7.113,0.057,9.5  c-0.668,4.703-1.616,8.604-7.098,12.426c-0.354,0.246-0.439,0.732-0.193,1.086s0.731,0.439,1.085,0.193  c1.77-1.234,3.106-2.488,4.134-3.768c0.58,1.443,1.99,2.463,3.642,2.463h6.856C47.726,85.805,35.665,87.781,35.532,87.803z   M59.314,75.77c-1.627,0-2.945-1.318-2.945-2.945c0-1.629,1.318-2.947,2.945-2.947c1.628,0,2.947,1.318,2.947,2.947  C62.261,74.451,60.942,75.77,59.314,75.77z M74.293,67.422c0,0.109-0.088,0.197-0.195,0.197H45.33  c0.046-0.293,0.09-0.588,0.132-0.887c0.348-2.441,0.559-6.9,0.014-9.641l7.989-7.424l4.272-3.677l0.062-0.06  c3.135-3.366,4.86-8.582,2.183-11.14c-1.785-1.706-4.421-0.997-7.23,1.944c-0.284,0.296-0.552,0.599-0.798,0.901l-7.615,5.056  V15.765c0-0.109,0.087-0.198,0.195-0.198h29.564c0.107,0,0.195,0.088,0.195,0.198V67.422z M77.814,36.021  c1.705,0,3.093,1.387,3.093,3.093c0,1.705-1.388,3.092-3.093,3.092c-1.262,0-1.359-2.367-1.359-3.092  C76.455,38.388,76.552,36.021,77.814,36.021z M77.814,64.85c1.705,0,3.093,1.389,3.093,3.094s-1.388,3.092-3.093,3.092  c-1.262,0-1.359-2.367-1.359-3.092C76.455,67.217,76.552,64.85,77.814,64.85z M77.814,55.24c1.705,0,3.093,1.387,3.093,3.092  s-1.388,3.094-3.093,3.094c-1.262,0-1.359-2.367-1.359-3.094C76.455,57.607,76.552,55.24,77.814,55.24z M76.455,48.723  c0-0.725,0.098-3.092,1.359-3.092c1.705,0,3.093,1.387,3.093,3.092s-1.388,3.091-3.093,3.091  C76.552,51.814,76.455,49.449,76.455,48.723z"/>
</g>
				<text x="0" y="120" fill="#262626" font-size="20px" font-family="'Roboto Condensed', sans-serif">Apply for Assistance</text>
			</g>
				</svg>
			</div><!--site-feature-->
			<div class="site-feature">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="104px" height="125px">
					<g>
						<g>
					<path transform="scale(1.5)" d="M40.1,13.1c-0.6,0-1.1,0.2-1.6,0.5l0-0.9c0-0.8-0.3-1.6-0.9-2.2c-0.6-0.6-1.3-0.9-2.2-0.9c-0.6,0-1.2,0.2-1.6,0.5   c-0.1-0.6-0.4-1.2-0.9-1.7c-0.6-0.6-1.4-0.9-2.2-0.9c-1.7,0-3.1,1.4-3.1,3.1l0,0.8c-0.5-0.3-1-0.5-1.6-0.5c-1.5,0-2.7,1-3,2.4   l-0.1,0l0,0.6c0,0,0,0.1,0,0.1l0.1,7.6l0,3.9l-0.7-1.1c-0.3-0.6-0.7-1.1-1-1.5c-1.2-1.4-3-1.2-4.1-0.5c-1.3,0.9-1.6,2.5-0.8,3.9   l7.8,12.4v5h1.5v-5.4l-8-12.8c-0.5-0.8-0.1-1.6,0.4-1.9c0.6-0.4,1.4-0.5,2.1,0.2c0.3,0.3,0.6,0.7,0.9,1.2l1.8,3   c0.2,0.3,0.6,0.5,1,0.4c0.4-0.1,0.7-0.5,0.7-0.9l0-3.1h0l0-3L24.6,14c0.1-0.8,0.7-1.5,1.6-1.5c0,0,0,0,0,0c0.9,0,1.6,0.7,1.6,1.5   l0.1,7.2h0l0,3.4l1.5,0l-0.1-10.6c0,0,0,0,0,0l0-3.4c0-0.9,0.7-1.6,1.6-1.6c0,0,0,0,0,0c0.4,0,0.8,0.2,1.1,0.5   c0.3,0.3,0.5,0.7,0.5,1.1l0.1,10.6h0l0,2.1l1.5,0l-0.1-10.6c0-0.9,0.7-1.6,1.6-1.6c0,0,0,0,0,0c0.4,0,0.8,0.2,1.1,0.5   c0.3,0.3,0.5,0.7,0.5,1.1l0.1,10.6h0l0,3.5l1.5,0l-0.1-10.6c0-0.9,0.7-1.6,1.6-1.6c0,0,0,0,0,0c0.9,0,1.6,0.7,1.6,1.6l0,16.5   c0,1.3-0.4,4.7-2.2,5.2L39,38.1l0.1,4.3l1.5,0l-0.1-3.2c2.8-1.4,2.8-6.2,2.8-6.4l0-16.5C43.2,14.4,41.8,13.1,40.1,13.1z"/>
					<path transform="scale(1.5)" d="M17.4,34.8C17.4,34.8,17.4,34.8,17.4,34.8c-0.4,0-0.7,0.1-1,0.2l0-0.3c0-0.7-0.3-1.3-0.7-1.7c-0.5-0.5-1.1-0.7-1.7-0.7   c-0.4,0-0.7,0.1-1.1,0.3c-0.1-0.4-0.3-0.7-0.6-1c-0.5-0.5-1.1-0.7-1.7-0.7c0,0,0,0,0,0c-1.3,0-2.4,1.1-2.4,2.5l0,0.2   c-0.3-0.1-0.6-0.2-0.9-0.2c-1.2,0-2.1,0.8-2.4,2l0,0l0,0.4c0,0,0,0.1,0,0.1l0,5.2l0,2.4l-0.1-0.2c-0.2-0.4-0.5-0.8-0.8-1.1   c-0.9-1.1-2.3-1-3.2-0.4c-1,0.7-1.3,2-0.6,3.2l5.6,8.9v3.6h1.5v-4l-5.8-9.3c-0.4-0.6,0.1-1,0.2-1.1c0.3-0.2,0.8-0.3,1.2,0.1   C3,43.4,3.2,43.7,3.5,44l1.3,2.2c0.2,0.3,0.6,0.5,1,0.4c0.4-0.1,0.6-0.4,0.6-0.8l0-2.3h0l0-2.5l0-5.2c0-0.5,0.4-0.9,0.9-0.9   c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.3,0.7l0,5.2h0l0,2.5l1.5,0l-0.1-7.7c0,0,0,0,0,0l0-2.4c0-0.5,0.4-0.9,0.9-1   c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.3,0.7l0.1,7.7h0l0,1.5l1.5,0L13,34.8c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.4-0.3,0.7-0.3   c0.2,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.4,0.3,0.7l0.1,7.7h0l0,2.6l1.5,0l-0.1-7.7c0-0.5,0.4-0.9,0.9-1c0,0,0,0,0,0   c0.5,0,0.9,0.4,0.9,0.9l0,12c0,0.8-0.3,3.2-1.5,3.6L16.3,53l0.1,3.3l1.5,0l0-2.2c2-1.1,2-4.4,2-4.8l0-12   C19.8,35.9,18.7,34.8,17.4,34.8z"/>
					<path transform="scale(1.5)" d="M64.2,41.8c-0.9-0.6-2.3-0.7-3.2,0.4c-0.3,0.3-0.5,0.7-0.8,1.1l-0.1,0.2l0-2.2l0-5.4c0,0,0,0,0-0.1l0-0.4l0,0   c-0.2-1.1-1.2-1.9-2.4-2c-0.3,0-0.6,0.1-0.9,0.2l0-0.2c0-1.3-1.1-2.5-2.4-2.5c0,0,0,0,0,0c-0.6,0-1.3,0.2-1.7,0.7   c-0.3,0.3-0.5,0.7-0.6,1c-0.3-0.2-0.7-0.3-1.1-0.3c-0.7,0-1.3,0.2-1.7,0.7c-0.5,0.5-0.7,1.1-0.7,1.7l0,0.3   c-0.3-0.1-0.6-0.2-0.9-0.2c-1.3,0-2.5,1.1-2.5,2.4l0,12c0,0.4,0,3.7,2,4.8l0,2.2l1.5,0l0.1-3.3l-0.6-0.2c-1.2-0.3-1.5-2.8-1.5-3.6   l0-12c0-0.5,0.4-0.9,0.9-0.9c0,0,0,0,0,0c0.5,0,0.9,0.4,0.9,1L48.5,45l1.5,0l0-2.6h0l0.1-7.7c0-0.3,0.1-0.5,0.3-0.7   c0.2-0.2,0.4-0.3,0.7-0.3c0.5,0,0.9,0.4,0.9,1l-0.1,7.7l1.5,0l0-1.5h0l0.1-7.7c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3   c0.5,0,0.9,0.4,0.9,1l0,2.5c0,0,0,0,0,0l-0.1,7.7l1.5,0l0-2.5h0l0-5.2c0-0.2,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3   c0.5,0,0.9,0.4,0.9,0.9l0,5.4l0,2.4h0l0,2.3c0,0.4,0.3,0.7,0.6,0.8c0.4,0.1,0.8-0.1,1-0.4l1.3-2.2c0.2-0.3,0.4-0.6,0.6-0.9   c0.4-0.5,0.9-0.4,1.2-0.1c0.1,0.1,0.6,0.5,0.2,1.2l-5.8,9.3v4h1.5v-3.6l5.6-8.9l0.1-0.1C65.5,43.8,65.3,42.5,64.2,41.8z"/>
</g>
				<text x="0" y="120" fill="#262626" font-size="20px" font-family="'Roboto Condensed', sans-serif">Get Involved</text>
			</g>
				</svg>
			</div><!--site-feature-->
			</div><!--site-features-wrapper-->

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
