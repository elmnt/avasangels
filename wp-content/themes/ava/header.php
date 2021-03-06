<?php
/*
This displays a subtle message on the front-end, anywhere there is ACF content,
if the ACF plugin has been turned off. Normally we'd avoid showing any
kind of error message on the front-end, but if ACF has been turned off,
for any reason, we're loosing most of our content.
*/
$GLOBALS[ 'noacf' ] = '<p class="noacf"><em>Advanced Custom Fields</em> content missing</p>';

// error handling:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
<div id="canvas">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ava' ); ?></a>

	<header class="site-header" role="banner" id="elmain">

		<div class="container">
			<div class="wrap--header">
				<div class="grid cf">

					<div class="headercol-4">
						<div class="header__logo">
							<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/avasangels-logo.svg" onerror="this.src='<?php bloginfo('stylesheet_directory'); ?>/img/avasangels-logo.png'; this.onerror=null;" class="logo--header"></a>
						</div>
					</div>

					<div class="headercol-8">
						<div class="header__nav">
							<div class="navholder--main cf">
								<nav role="navigation">
								<?php
								$args = array(
									'theme_location'  => 'menu-1',
									'menu_id'         => 'primary-menu',
									'menu_class'      => 'nav--main elm__list',
									'container'       => '',
									'container_id'    => '',
									'container_class' => '',
									'walker'          => new Ava_Nav_Menu(),
									'depth'           => 0
								);
								wp_nav_menu( $args );
								?>
								</nav>
							</div>
						</div>
					</div>

				</div><!-- /.grid -->
			</div><!-- /.wrap--header -->
		</div><!-- /.container -->

		<div class="container--full mb0">
			<div class="elmtoggle__holder cf">
				<a href="#!" id="elmtoggle" class="cf"><span>MENU</span> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/hamburger.svg" alt="Open Sub Menu" class="elmtoggle__icon"></a>
			</div>
		</div>

	</header><!-- #elmain -->

	<div id="content" class="site-content">
