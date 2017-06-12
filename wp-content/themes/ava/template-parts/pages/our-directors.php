<div class="grid">

   <div class="col-6 home__inspiration--holder">
      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $odonephoto = get_field('od_one_photo');
         $odonename = get_field('od_one_name');
         if( $odonephoto ) {
            echo '<picture>
                     <img src="'.$odonephoto.'" alt="'.$odonename.'" class="home__inspiration">
                  </picture>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>
   </div>

	<div class="col-6">

      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $odonename = get_field('od_one_name');
         $odonebio = get_field('od_one_bio');
         if( $odonename ) {
            echo '<h2>'.$odonename.'</h2>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
         if( $odonebio ) {
            echo $odonebio;
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

   </div>

</div>


<div class="grid mt4">

   <div class="col-6 home__inspiration--holder">
      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $odonephoto = get_field('od_one_photo');
         $odonename = get_field('od_one_name');
         if( $odonephoto ) {
            echo '<picture>
                     <img src="'.$odonephoto.'" alt="'.$odonename.'" class="home__inspiration">
                  </picture>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>
   </div>

   <div class="col-6">

      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $odonename = get_field('od_one_name');
         $odonebio = get_field('od_one_bio');
         if( $odonename ) {
            echo '<h2>'.$odonename.'</h2>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
         if( $odonename ) {
            echo $odonebio;
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

   </div>

</div>
