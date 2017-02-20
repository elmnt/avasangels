<?php
/**
 * Template part for displaying the sub-page header,
 * on appropriate sub-pages, based on the conditional in /page.php
 * @package ava
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<div class="container">
			<div class="wrap">
				<div class="grid">

					<div class="col-5">
						<?php
						// If it's the About Us page, just show that title
						if ( is_page( 'about-us' )) {
							echo '<h1 class="entry-title">About Us</h1>';
						// If it's an About Us child page, show parent title (smaller), and child title
						} elseif ( is_page( array( 'our-inspiration', 'our-acts-of-kindness', 'our-directors' ))) {
							echo '<h3 class="entry-title">About Us</h3>';
							the_title( '<h1 class="entry-title subhead__title">', '</h1>' );
						// If it's any other page using this template-part, show its title
						} else {
							the_title( '<h1 class="entry-title subhead__title">', '</h1>' );
						}

						// get_template_part( 'template-parts/content', 'page' );
						?>

						<?php /* We have some more custom text on the Our Inspiration page */ ?>
						<?php /* Start: ACF content */
						if ( is_page( 'our-inspiration' )) {
							$subhead_subtitle = get_field('sh_subtitle');
							if( $subhead_subtitle ) {
								echo '<h2>'.$subhead_subtitle.'</h2>';
							}
							else {
								echo '<p>Backup for ACF failure</p>';
							}
						}
						?>
					</div>

					<div class="col-7" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
						<a href="#" class="button button--trans">Get Support</a><a href="#" class="button">Get Involved</a>
					</div>

				</div>
			</div>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php if ( is_page( 'our-inspiration' )): ?>
			<p>our-inspiration</p>
		<?php elseif ( is_page( 'our-acts-of-kindness' )): ?>
			<p>our-acts-of-kindness</p>
		<?php elseif ( is_page( 'our-directors' )): ?>
			<p>our-directors</p>
		<?php else: ?>
			<?php the_content(); ?>
		<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
