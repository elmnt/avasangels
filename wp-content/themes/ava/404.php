<?php get_header(); ?>

<div class="container">
	<div class="wrap">
		<div class="grid">
			<div class="single-column">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<section class="error-404 not-found">

							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ava' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">

								<h5><?php esc_html_e( 'You\'re looking for a page that isn\'t here, or was removed. Try a search, or just use the top navigation to get started.', 'ava' ); ?></h5>

								<?php
									get_search_form();

									// the_widget( 'WP_Widget_Recent_Posts' );
									// Only show the widget if site has multiple categories.
								?>

								<?php  /*if ( ava_categorized_blog() ) :*/ ?>

								<!--
								<div class="widget widget_categories">
									<h2 class="widget-title"><?php /*esc_html_e( 'Most Used Categories', 'ava' );*/ ?></h2>
									<ul>
									<?php
										/*
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
										*/
									?>
									</ul>
								</div>-->
								<!-- .widget -->

								<?php /*endif;*/ ?>

								<?php
									/* translators: %1$s: smiley */
									/*
									$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'ava' ), convert_smilies( ':)' ) ) . '</p>';
									the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
									the_widget( 'WP_Widget_Tag_Cloud' );
									*/
								?>

							</div><!-- .page-content -->
						</section><!-- .error-404 -->

					</main><!-- #main -->
				</div><!-- #primary -->

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
