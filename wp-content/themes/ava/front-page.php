<?php
/**
 * The template for displaying the static home page
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package ava
 */
get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<div class="container--full container--masthead">
	<div class="masthead">

		<div class="masthead__top">

		<?php // ACF content
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
				echo $GLOBALS[ 'noacf' ]; // Set in header.php
			}
		}
		?>

		<div class="masthead__caption-holder">
			<div class="masthead__caption">
				<h1><?php echo $hpmtagline; ?></h1>
				<a href="#" class="button">Get Support</a><a href="#" class="button">Get Involved</a><a href="#" class="button">Donate</a>
				<?php /* End: ACF content */ ?>
			</div>
		</div>

		</div><!-- /.masthead__top -->

		<div class="masthead__tagline">
		<?php // ACF content
			if ( function_exists( 'get_field' ) ) {
				$hptitle = get_field('hp_title');
				$hpsubtitle = get_field('hp_subtitle');
				echo '<h3>'.$hptitle.'</h3>';
				echo '<h6><em>'.$hpsubtitle.'</em></h6>';
			} else {
				echo $GLOBALS[ 'noacf' ]; // Set in header.php
			}
			?>
		</div>

	</div><!-- /.masthead -->
</div><!-- /.container--masthead -->


<div class="container--full container--home__inspiration">
	<div class="container">
	<div class="wrap">
	<div class="grid">


		<div class="col-6">
			<h2 class="home__inspiration--title">Our Inspiration</h2>
			<?php // ACF content
				if ( function_exists( 'get_field' ) ) {
					$hpinspiration = get_field('hp_inspiration');
					echo $hpinspiration;
				} else {
					echo $GLOBALS[ 'noacf' ]; // Set in header.php
				}
			?>
			<p><a href="/our-inspiration/">Read more about Ava &rarr;</a></p>
		</div>


		<div class="col-6 home__inspiration--holder">
			<?php // ACF content
			if ( function_exists( 'get_field' ) ) {
				$hpinspirationphoto = get_field('hp_inspiration_photo');
				if( $hpinspirationphoto ) {
					echo '<picture>
					      	<img src="'.$hpinspirationphoto.'" alt="Ava Rose Twardowski" class="home__inspiration">
					      </picture>';
				} else {
					echo $GLOBALS[ 'noacf' ]; // Set in header.php
				}
			}
			?>
		</div>
	</div>
	</div>
	</div>
</div>

<?php // Get the newsletter signup form ?>
<?php require get_template_directory() . '/inc/newsletter-signup.php'; ?>

<?php // Get Support, Get Involved, Donate Buttons ?>
<?php require get_template_directory() . '/inc/three-ctas.php'; ?>

<div class="container">
<div class="wrap">
<div class="grid">

	<div class="col-5">
		<h2 class="home__mission--title">Our Mission</h2>
		<?php // ACF content
			if ( function_exists( 'get_field' ) ) {
				$hpourmission = get_field('hp_our_mission');
				echo $hpourmission;
			} else {
				echo $GLOBALS[ 'noacf' ]; // Set in header.php
			}
		?>
		<p><a href="/about-us/">Read More &rarr;</a></p>
	</div>

	<div class="col-2"><p>&nbsp;</p></div>

	<div class="col-5">
		<h2 class="home__newsevents--title">News &amp; Events</h2>
		<?php // Show the most recent blog post
		global $post;
		$args = array( 'posts_per_page' => 1 );
		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) :
		  setup_postdata( $post ); ?>
			<h4 class="home__newsevents--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<p class="home__newsevents--date"><?php the_date(); ?></p>
			<?php the_post_thumbnail( $size = 'home-featured-post' ); ?>
			<div class="home__newsevents--excerpt">
				<?php the_excerpt(); ?>
				<p><a href="#">Read More &rarr;</a></p>
			</div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
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
