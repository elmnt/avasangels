<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
					</div><!-- /.col-6 -->
					<div class="col-6 page__header-buttons">
						<a href="/get-support/" class="button">Get Support</a><a href="/get-involved/" class="button">Get Involved</a><a href="/give/" class="button show-mobile-small">Give</a>
					</div><!-- /.col-6 -->
				</div><!-- /.grid -->
			</div><!-- /.wrap -->
		</div><!-- /.container -->
		<?php
		/*
		Place the Our Mission anchor here, so the text isn't
		up against the top of the browser window when we access the link.
		*/
		?>
		<div id="our-mission-anchor"></div>
	</header><!-- /.entry-header -->

	<?php // Or, just render the title ?>
	<?php else: ?>

	<header class="entry-header">
		<div class="container">
			<div class="wrap">
				<div class="grid">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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

	<?php endif; ?>

	<div class="entry-content">

		<div class="container">
			<div class="wrap">

				<?php
				/*
				Setting up some conditionals here for custom Page templates:

				I chose this method as opposed to page-name.php in the root directory,
				just because I like the tidiness of keeping them in a unique directory.

				When the client adds pages, in the future, via the Admin, they'll be limited
				to a basic template, and they can control visibility via the Menu settings.

				New custom page templates, can, of course, be added, following my method.

				Current site templates:

				about-us
					our-directors
					our-inspiration
				programs
					news & updates (this is the blog feed, uses home.php)
					our-acts-of-kindness
					little-angels
					gathering-in-the-garden
				contact-us
				give
				get-support
				get-involved
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
					} elseif ( is_page('programs')) {
						require get_template_directory() . '/template-parts/pages/programs.php';
					} elseif ( is_page('fundraisers')) {
						require get_template_directory() . '/template-parts/pages/fundraisers.php';
					} elseif ( is_page('acts-of-kindness')) {
						require get_template_directory() . '/template-parts/pages/acts-of-kindness.php';
					} elseif ( is_page('little-angels')) {
						require get_template_directory() . '/template-parts/pages/little-angels.php';
					} elseif ( is_page('gathering-in-the-garden')) {
						require get_template_directory() . '/template-parts/pages/gathering-in-the-garden.php';

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

				// No, it's not a page
				} else {
					the_content();
				}

				?>

			</div><!-- /.wrap -->
		</div><!-- /.container -->

	</div><!-- /.entry-content -->

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
