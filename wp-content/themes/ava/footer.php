</div><!-- #content -->

  <div class="container--full container--footer-quote">
    <div class="wrap">
      <div class="single-column center">
      <?php // ACF Content
      // If a quote is entered for this page, it will show.
      if ( function_exists( 'get_field' ) ) {
        $iq = get_field('iquote');
        $iqatt = get_field('iquoteatt');
        if( $iq ) {
          echo '<h5>&ldquo;';
          echo $iq;
          echo '&rdquo;<br><br>&mdash;';
          echo $iqatt;
          echo '</h5>';
        } else {
          // If not, just show nothing
          // echo $GLOBALS[ 'noacf' ]; // Set in header.php
        }
      }
      ?>
      </div>
    </div>
  </div>

  <footer id="colophon" class="site-footer" role="contentinfo">

    <div class="container--full container--footer">
      <div class="wrap">
        <div class="single-column center">
          <p><a href="/contact-us/">Contact Us</a>/<a href="/privacy-policy/">Privacy Policy</a>/<a href="http://www.facebook.com/AvasAngelsSanDiego" target="_blank">Facebook</a></p>
          <p class="copyright">Copyright 2013. Ava's Angels. All Rights Reserved.</p>
          <!--<div class="site-info"></div>-->
          <!-- /.site-info -->
        </div>
      </div>
    </div>

  </footer><!-- /#colophon -->

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

</script>

</body>
</html>
