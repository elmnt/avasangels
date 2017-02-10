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

<div class="container--full">
<div class="wrap--home">
<div class="grid--home">
	<?php /* Start: ACF content */
	$hpmphoto = get_field('hpm_photo');
	$hpmtagline = get_field('hpm_tagline');
	?>
	<img src="<?php echo $hpmphoto; ?>" alt="Ava's Angels" class="fit">
	<div class="home__caption-holder">
		<div class="home__caption">
			<!--
			<h1><?php /*echo $hpmtagline;*/ ?></h1>
			<a href="#" class="button button--trans">Get Help</a><a href="#" class="button">Get Involved</a>
			-->
			<?php /* End: ACF content */ ?>
		</div>
	</div>
</div>
</div>
</div>


<div class="container--homeintro">
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
	<h4><?php echo $hpitext; ?></h4>
	<h2><?php echo $hpititle; ?></h2>
	<?php /* End: ACF content */ ?>

</div>
</div>


<div class="container">
<div class="wrap">
<div class="grid">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'front-page' );

		/*
		If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		*/

	endwhile; // End of the loop.
	?>

</div>
</div>
</div>

</main><!-- #main -->
</div><!-- #primary -->

<?php /*get_sidebar();*/ ?>
<?php
get_footer();
