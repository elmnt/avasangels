<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ava
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
    <div class="wrap">
    <div class="grid">

        <!--
		<div class="site-info">
			<a href="<?php /*echo esc_url( __( 'https://wordpress.org/', 'ava' ) );*/ ?>"><?php /*printf( esc_html__( 'Proudly powered by %s', 'ava' ), 'WordPress' );*/ ?></a>
			<span class="sep"> | </span>
			<?php /*printf( esc_html__( 'Theme: %1$s by %2$s.', 'ava' ), 'ava', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' );*/ ?>
		</div>
        -->
        <!-- .site-info -->

    </div>
    </div>
    </div>
	</footer><!-- #colophon -->

    <nav id="elmobile">
        <div class="elmtoggle__holder--mobile">
            <a href="#!" id="elmobiletoggle" class="cf"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/hamburger-close.svg" alt="Open Sub Menu" class="elmtoggle__icon"></a>
        </div>
    </nav>

</div><!-- #canvas -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
jQuery(document).ready(function($){
    /*
    elmenu init
    Set the order you want the header nav elements to show up
    in the mobile nav. Reminder: it's an array, so 0 is the first item.
    */
    var menuOrder = ['2','0','1'];
    $( '#elmain' ).elmenu( menuOrder );
});
</script>

</body>
</html>
