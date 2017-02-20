<?php
/**
 * Starting point for all pages
 * @package ava
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/*
			This is our top-level conditional to start getting the appropriate pieces for our pages.
			If it's one of the pages listed in the is_page array, we're getting the custom page header
			that displays the color block on the left (with title, subtitle, etc), and the image
			on the right, with the CTA buttons.
			*/
			while ( have_posts() ) : the_post();
			if ( is_page( array( 'about-us', 'our-inspiration', 'our-acts-of-kindness', 'our-directors', 'blog', 'events' ))) {
				get_template_part( 'template-parts/content', 'sub-header' );
			} else {
				get_template_part( 'template-parts/content', 'page' );
			}
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
