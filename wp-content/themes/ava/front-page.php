<?php
/**
 * The template for displaying the static home page
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package ava
 */

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<div class="container--full">
<div class="wrap--home">
<div class="grid--home">

	<?php
	/*
	Start: ACF content
	Add a safety conditional in case ACF is disabled
	*/
	if ( function_exists( 'get_field' ) ) {
		$hpmphoto_xl = get_field('hpm_photoxl');
		$hpmphoto_desktop = get_field('hpm_photodt');
		$hpmphoto_tablet = get_field('hpm_photot');
		$hpmphoto_mobile = get_field('hpm_photom');
		$hpmtagline = get_field('hpm_tagline');
		if( $hpmphoto_desktop ) {
			echo '<picture class="fit">
			      	<source srcset="'.$hpmphoto_xl.'" media="(min-width: 1200px)">
			      	<source srcset="'.$hpmphoto_desktop.'" media="(min-width: 768px)">
			      	<source srcset="'.$hpmphoto_tablet.'" media="(min-width: 420px)">
			      	<source srcset="'.$hpmphoto_mobile.'" media="(min-width: 100px)">
			      	<img srcset="'.$hpmphoto_mobile.'" alt="alt">
			      </picture>';
		} else {
			echo '<p>Backup for ACF failure</p>';
		}
	}
	?>
	<!--
	No Picturefill
	<img src="<?php /*echo $hpmphoto_xl;*/ ?>" alt="Ava's Angels" class="fit">
	-->
	<div class="home__caption-holder">
		<div class="home__caption">
			<h1><?php echo $hpmtagline; ?></h1>
			<a href="#" class="button button--trans">Get Help</a><a href="#" class="button">Get Involved</a>
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

	<?php
	/*
	Start: ACF content
	Add a safety conditional in case ACF is disabled
	*/
	if ( function_exists( 'get_field' ) ) {
		$hpititle = get_field('hpi_title');
		$hpitext = get_field('hpi_text');
		echo '<h4>'.$hpitext.'</h4>';
		echo '<h2>'.$hpititle.'</h2>';
	}
	?>

</div>
</div>

<div class="container">
<div class="wrap">
<div class="grid">
	<div class="col-4">
		<h3>Our Mission</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>
	<div class="col-4">
		<h3>Our Inspiration</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>
	<div class="col-4">
		<h3>News &amp; Events</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>
</div>
</div>
</div>

<!--
<div class="container">
<div class="wrap">
<div class="grid">
	<?php
	/*
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'front-page' );
		// Never comments on the front-page, even if we use the loop (post content)
		// If comments are open or we have at least one comment, load up the comment template.
		// if ( comments_open() || get_comments_number() ) :
		// 	comments_template();
		// endif;
	endwhile; // End of the loop.
	*/
	?>
</div>
</div>
</div>
-->

</main><!-- #main -->
</div><!-- #primary -->

<?php /*get_sidebar();*/ ?>
<?php
get_footer();
