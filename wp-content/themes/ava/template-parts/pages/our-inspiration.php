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
   </div>

	<div class="col-6">

      <?php the_content(); ?>

   </div>

</div>
