<?php get_header(); ?>

<div class="container">
	<div class="wrap">
		<div class="grid">

			<div class="col-8">

			<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'ava' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
			</section><!-- #primary -->

			</div><!-- /.col-8 -->

			<div class="col-4">

				<?php get_sidebar(); ?>

			</div><!-- /.col-4 -->

		</div><!-- /.grid -->
	</div><!-- /.wrap -->
</div><!-- /.container -->

<?php
get_footer();
