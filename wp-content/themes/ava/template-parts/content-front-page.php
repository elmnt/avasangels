<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ava
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="single-column home__intro">

		<!-- Don't show the standard WP 'Home' page title:
		<header class="entry-header">
			<?php /*the_title( '<h1 class="entry-title">', '</h1>' );*/ ?>
		</header>
		-->
		<!-- .entry-header -->

		<?php /* Start: ACF content */
		$hpititle = get_field('hpi_title');
		$hpitext = get_field('hpi_text');
		?>
		<h2><?php echo $hpititle; ?></h2>
		<h4><?php echo $hpitext; ?></h4>
		<?php /* End: ACF content */ ?>

	</div>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ava' ),
				'after'  => '</div>',
			) );
		?>
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
