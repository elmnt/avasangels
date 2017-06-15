<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ava
 */

get_header(); ?>

<div class="page__header">
<!-- <header class="entry-header page__header"> -->
	<div class="container">
	<div class="wrap">
	<div class="grid">

		<div class="col-6">
			<h1 class="entry-title page__header-title">News &amp; Events</h1>
			<h6 class="page__header-tagline">Fostering Human Connection and Compassion While Helping Families with Sick or Disabled Children.</h6>
			<p>Ava's Angels San Diego</p>
		</div>

		<div class="col-6 page__header-buttons">
			<a href="/get-support" class="button">Get Support</a><a href="/get-involved" class="button">Get Involved</a>
		</div>

	</div>
	</div>
	</div>
</div>
<!-- </header> -->
<!-- .entry-header -->

<div class="container">
<div class="wrap">
<div class="grid">

	<div class="col-8">

		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>

					<!-- <header> -->
					<!-- <h1 class="page-title screen-reader-text"><?php /*single_post_title();*/ ?></h1> -->
					<!-- </header> -->

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- /.col-8 -->

	<div class="col-4">
	<?php get_sidebar(); ?>
	</div><!-- /.col-4 -->

</div>
</div>
</div>

<?php
get_footer();
