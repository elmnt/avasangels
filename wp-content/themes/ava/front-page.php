<?php get_header(); ?>

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
					<div class="masthead__desktop-buttons">
						<a href="/get-support/" class="button">Get Support</a><a href="/get-involved/" class="button">Get Involved</a><a href="/give/" class="button">Give</a>
					</div>
				</div>
			</div><!-- /.masthead__caption-holder -->

		</div><!-- /.masthead__top -->

		<div class="masthead__mobile-buttons">
			<a href="/get-support/" class="button">Get Support</a><a href="/get-involved/" class="button">Get Involved</a><a href="/give/" class="button">Give</a>
		</div>

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
		</div><!-- /.masthead__tagline -->

	</div><!-- /.masthead -->
</div><!-- /.container--masthead -->

<div class="container--full container--home__mission">
	<div class="container">
		<div class="wrap">
			<div class="grid">

				<div class="col-6">
					<h2 class="home__mission--title">Our Mission</h2>
					<?php // ACF content
					if ( function_exists( 'get_field' ) ) {
					   // Add the page ID to get the Our Mission excerpt field from the Front Page
					   $omexcerpt = get_field('au_our_mission_excerpt', 41);
					   if( $omexcerpt ) {
					      echo $omexcerpt;
					   } else {
					      echo $GLOBALS[ 'noacf' ]; // Set in header.php
					   }
					}
					?>
					<p><a href="/about-us/#our-mission-anchor">Read More &rarr;</a></p>
				</div><!-- /.col-6 -->

				<div class="col-6 hide-mobile">
					<?php // ACF content
					if ( function_exists( 'get_field' ) ) {
						$hpomphoto = get_field('hp_our_mission_photo');
						$hpomphotomw = get_field('hp_our_mission_photo_width');
						if( $hpomphoto ) {
							echo '<img src="'.$hpomphoto.'" alt="Our Mission" style="max-width:'.$hpomphotomw.'px">';
						} else {
							echo $GLOBALS[ 'noacf' ]; // Set in header.php
						}
					}
					?>
				</div><!-- /.col-6 -->

			</div><!-- /.grid -->
		</div><!-- /.wrap -->
	</div><!-- /.container -->
</div><!-- /.container--full -->

<?php // Get the newsletter signup form ?>
<?php require get_template_directory() . '/inc/newsletter-signup.php'; ?>

<?php // Get Support, Get Involved, Donate Buttons ?>
<?php require get_template_directory() . '/inc/three-ctas.php'; ?>

<div class="container">
	<div class="wrap">
		<div class="grid">

			<div class="col-5">
				<h2 class="home__inspiration--title">Our Inspiration</h2>
				<?php // ACF content
				if ( function_exists( 'get_field' ) ) {
				   // Add the page ID to get the Our Inspiration excerpt field from the Front Page
				   $oiexcerpt = get_field('oi_ava_excerpt', 49);
				   if( $oiexcerpt ) {
				      echo $oiexcerpt;
				   } else {
				      echo $GLOBALS[ 'noacf' ]; // Set in header.php
				   }
				}
				?>
				<p><a href="/about-us/">Read More &rarr;</a></p>
			</div><!-- /.col-5 -->

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
			</div><!-- /.col-5 -->

		</div><!-- /.grid -->
	</div><!-- /.wrap -->
</div><!-- /.container -->

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
