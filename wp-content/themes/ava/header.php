<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ava
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
?>

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

	<header id="elmain" class="site-header" role="banner">

		<div class="site-branding">

			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php /* Removed the tagline */ ?>
			<?php /*$description = get_bloginfo( 'description', 'display' );*/ ?>
			<?php /*if ( $description || is_customize_preview() ) :*/ ?>
				<?php /* WPCS: xss ok. */ ?>
				<!-- p class="site-description"><?php /*echo $description;*/ ?></p> -->
			<?php /*endif;*/ ?>

		</div><!-- .site-branding -->

		<?php include 'header-nav.php'; ?>

	</header><!-- #elmain -->

	<div id="content" class="site-content">
