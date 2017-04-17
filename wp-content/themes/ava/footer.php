<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @package ava
 */
?></div><!-- #content -->

    <div class="container--full container--footer-quote">
        <div class="wrap">
            <div class="single-column center">
            <h5>&ldquo;No act of kindness, no matter how small, is ever wasted.&rdquo;<br><br>&mdash;Aesop</h5>
            </div>
        </div>
    </div>

   <footer id="colophon" class="site-footer" role="contentinfo">

    <div class="container--full container--footer">
        <div class="wrap">
            <div class="single-column center">
                <p><a href="#">Contact Us</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">Privacy Policy</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">Facebook</a></p>
                <p class="copyright">Copyright 2013. Ava's Angels. All Rights Reserved.</p>
                <!--<div class="site-info"></div>-->
                <!-- .site-info -->
            </div>
        </div>
    </div>

   </footer><!-- #colophon -->

   <nav id="elmobile">
      <div class="elmtoggle__holder--mobile">
          <a href="#!" id="elmobiletoggle" class="cf"><span>CLOSE</span> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/hamburger-close.svg" alt="Open Sub Menu" class="elmtoggle__icon"></a>
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

/*
// Check width during development
// Throttles the resize event
jQuery(function($){

  var resizeTimer;
  function resizeFunction() {
    var wdw = jQuery(window).width();
    jQuery("#checkw").html( wdw );
  };
  $(window).resize(function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(resizeFunction, 500);
  });
  resizeFunction();

});
*/

</script>

<style type="text/css">
/* always show window width
#checkw {
  position: absolute;
  top: 400px;
  right: 5px;
  border: 1px solid red;
  background: yellow;
  color: red;
  padding: 10px 15px;
  z-index: 99999 !important;
  font-size: 13px;
  line-height: 1em;
}
*/
</style>
<!-- <div id="checkw"></div> -->

</body>
</html>
