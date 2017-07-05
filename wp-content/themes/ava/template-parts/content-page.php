<?php
/**
 * Template part for displaying page content in page.php
 * @package ava
 */
?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/*
	If it's a page, render the page specific header
	with the gradient & flowers background, and two CTA buttons.
	*/
	?>
	<?php if ( is_page() ) : ?>

	<header class="entry-header page__header">
		<div class="container">
		<div class="wrap">
		<div class="grid">

			<div class="col-6">
				<?php the_title( '<h1 class="entry-title page__header-title">', '</h1>' ); ?>
				<h6 class="page__header-tagline">Fostering Human Connection and Compassion While Helping Families with Sick or Disabled Children.</h6>
				<p>Ava's Angels San Diego</p>
			</div>

			<div class="col-6 page__header-buttons">
				<a href="/get-support" class="button">Get Support</a><a href="/get-involved" class="button">Get Involved</a>
			</div>

		</div>
		</div>
		</div>
		<?php
		/*
		Place the Our Mission anchor here, so the text isn't
		up against the top of the browser window when we access the link.
		*/
		?>
		<div id="our-mission-anchor"></div>
	</header><!-- .entry-header -->

	<?php // Or, just render the title ?>
	<?php else: ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php
		/*
		Place the Our Mission anchor here, so the text isn't
		up against the top of the browser window when we access the link.
		*/
		?>
		<div id="our-mission-anchor"></div>
	</header><!-- .entry-header -->

	<?php endif; ?>

	<div class="entry-content">

		<div class="container">
		<div class="wrap">

			<?php

			/*
			Setting up some conditionals here with ACF content for all the Pages:

			I chose this method as opposed to page-name.php in the root directory,
			just because I like the tidiness of keeping them in a unique directory.

			When the client adds pages, in the future, via the Admin, they'll be limited
			to a basic template, and they can control visibility via the Menu settings. Basic.

			/inc/dummy.php = temporary include to show dummy content.

			about-us
				our-directors
				our-inspiration
			programs-events
				blog
				our-acts-of-kindness
				helping-hands-of-little-angels
				gathering-in-the-garden
			contact-us
			give
			get-support
			get-involved
				fundraisers (Should this content be ON the get-involved page?)

			*/

			// First, is it a page?
			if ( is_page()) {

				// Yes, get the specific page content

				// About Us (and sub-pages)
				if ( is_page('about-us')) {
					require get_template_directory() . '/template-parts/pages/about-us.php';
				} elseif ( is_page('our-inspiration')) {
					require get_template_directory() . '/template-parts/pages/our-inspiration.php';
				} elseif ( is_page('our-directors')) {
					require get_template_directory() . '/template-parts/pages/our-directors.php';

				// Programs & Events (and sub-pages)
				} elseif ( is_page('programs-events')) {
					require get_template_directory() . '/template-parts/pages/programs-events.php';
				} elseif ( is_page('fundraisers')) {
					require get_template_directory() . '/template-parts/pages/fundraisers.php';
				} elseif ( is_page('our-acts-of-kindness')) {
					require get_template_directory() . '/template-parts/pages/our-acts-of-kindness.php';
				} elseif ( is_page('helping-hands-of-little-angels')) {
					require get_template_directory() . '/template-parts/pages/helping-hands-of-little-angels.php';
				} elseif ( is_page('the-gathering-in-the-garden')) {
					require get_template_directory() . '/template-parts/pages/the-gathering-in-the-garden.php';

				// Remaining sub-pages
				}  elseif ( is_page('contact-us')) {
					require get_template_directory() . '/template-parts/pages/contact-us.php';
				} elseif ( is_page('give')) {
					require get_template_directory() . '/template-parts/pages/give.php';
				} elseif ( is_page('get-support')) {
					require get_template_directory() . '/template-parts/pages/get-support.php';
				} elseif ( is_page('get-involved')) {
					require get_template_directory() . '/template-parts/pages/get-involved.php';
				} else { // With a fall-back, just in case
					the_content();
				}

			// It's not a page
			} else {
				the_content();
			}

			?>

			<?php // ACF content
			/*
			if ( function_exists( 'get_field' ) ) {
				$shiz = get_field('shiz');
				if( $shiz ) {
					echo '<p>'.$shiz.'</p>';
				} else {
					echo $GLOBALS[ 'noacf' ]; // Set in header.php
				}
			}
			*/
			?>

			<?php
				/*
				the_content();
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ava' ),
					'after'  => '</div>',
				));
				*/
			?>

		</div>
		</div>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'ava' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-## -->
