<?php
/**
 * The template for displaying the static home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ava
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php /* Start: ACF content */
			$hpmphoto = get_field('hpm_photo');
			$hpmtagline = get_field('hpm_tagline');
			?>
			<img src="<?php echo $hpmphoto; ?>" alt="Ava's Angels">
			<h1><?php echo $hpmtagline; ?></h1>
			<?php /* End: ACF content */ ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'front-page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php /*get_sidebar();*/ ?>
<?php
get_footer();
