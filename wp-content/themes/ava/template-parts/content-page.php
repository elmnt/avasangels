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
	</header><!-- .entry-header -->

	<?php // Or, just render the title ?>
	<?php else: ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php endif; ?>

	<div class="entry-content">

		<div class="container">
		<div class="wrap">

		<!-- put this in the partials -->
		<!-- <div class="grid"> -->


			<!--
			Set up some conditionals here with ACF content.
			Getting a temporary include to show dummy content.
			-->

			<?php

			// First, is it a page?
			if ( is_page()) {

				// Yes, get the specific page content
				if ( is_page('about-us')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('our-acts-of-kindness')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('our-directors')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('our-inspiration')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('contact-us')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('donate')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('get-support')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('get-involved')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('the-gathering-in-the-garden')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('fundraisers')) {
					require get_template_directory() . '/inc/dummy.php';
				} elseif ( is_page('helping-hands-of-little-angels')) {}
				else { // With a fall-back, just in case
					the_content();
				}

			// It's not a page
			} else {
				the_content();
			}

			/* All possible pages:
			about-us
				our-acts-of-kindness
				our-directors
				our-inspiration
			contact-us
			donate
			get-support
			get-involved
				the-gathering-in-the-garden
				fundraisers
				helping-hands-of-little-angels
			*/

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

		<!-- </div> -->

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
