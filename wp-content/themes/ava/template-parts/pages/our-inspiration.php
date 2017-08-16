<div class="grid">

   <div class="col-6 home__inspiration--holder">
      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $oiavaphoto = get_field('oi_ava_photo');
         if( $oiavaphoto ) {
            echo '<picture>
                     <img src="'.$oiavaphoto.'" alt="Ava Rose Twardowski" class="home__inspiration">
                  </picture>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>
   </div><!-- /.col-6 -->

	<div class="col-6">
      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         // Add the page ID to get the field from the Our Inspiration page
         $oiavaname = get_field('oi_ava_name');
         $oiavadates = get_field('oi_ava_dates');
         $oiavatext = get_field('oi_ava_text');
         if( $oiavaphoto ) {
            echo '<h2>'.$oiavaname.'</h2>';
            echo '<h6>'.$oiavadates.'</h6>';
            echo $oiavatext;
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>
   </div><!-- /.col-6 -->

</div><!-- /.grid -->
