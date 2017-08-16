<?php get_header(); ?>

<div class="container">
	<div class="wrap">
		<div class="grid">

		<div class="col-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- /.col-8 -->

		<div class="col-4">

			<?php get_sidebar(); ?>

		</div><!-- /.col-4 -->

		</div><!-- /.grid -->
	</div><!-- /.wrap -->
</div><!-- /.container -->

<?php
get_footer();
