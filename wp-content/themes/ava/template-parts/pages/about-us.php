<div class="grid">

	<div class="col-6">
      <?php // ACF content - Our Mission
      if ( function_exists( 'get_field' ) ) {
         // Add the page ID to get the field from the Our Inspiration page
         $aumissiontitle = get_field('au_our_mission_title');
         $aumissionsubtitle = get_field('au_our_mission_subtitle');
         $aumissiontext = get_field('au_our_missoin_text');
         if( $aumissiontitle ) {
            echo '<h2>'.$aumissiontitle.'</h2>';
            echo '<h6>'.$aumissionsubtitle.'</h6>';
            echo $aumissiontext;
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>
	</div>

	<div class="col-6">

		<h2>Our Inspiration</h2>
      <?php // Get the image & copy from the Our Inspiration page ?>
      <div class="grid--flex">
         <div class="col-6 gfitem-1">
            <?php // ACF content
            if ( function_exists( 'get_field' ) ) {
               // Add the page ID to get the field from the Our Inspiration page
               $oiavaphoto = get_field('oi_ava_photo', 49);
               if( $oiavaphoto ) {
                  echo '<img src="'.$oiavaphoto.'" alt="Ava Rose Twardowski" class="img--round gfitem-img">';
               } else {
                  echo $GLOBALS[ 'noacf' ]; // Set in header.php
               }
            }
            ?>
         </div>
   		<div class="gfitem-2">
            <?php // ACF content - Our Inspiration excerpt
            if ( function_exists( 'get_field' ) ) {
               $auoitext = get_field('au_our_inspiration_text');
               if( $auoitext ) {
                  echo $auoitext;
               } else {
                  echo $GLOBALS[ 'noacf' ]; // Set in header.php
               }
            }
            ?>
            <p><a href="#">Read More &rarr;</a></p>
         </div>
      </div>

      <h2>Our Directors</h2>
      <?php // Get the image & copy from the FIRST entry on the Our Directors page ?>
      <div class="grid--flex">
         <div class="col-6 gfitem-1">
            <?php // ACF content
            if ( function_exists( 'get_field' ) ) {
               // Add the page ID to get the field from the Our Directors page
               $odonephoto = get_field('od_one_photo', 102);
               $odonename = get_field('od_one_name', 102);
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
         <div class="gfitem-2">
            <?php // ACF content - Our Directors excerpt
            if ( function_exists( 'get_field' ) ) {
               $auodtext = get_field('au_our_directors_text');
               if( $auodtext ) {
                  echo $auodtext;
               } else {
                  echo $GLOBALS[ 'noacf' ]; // Set in header.php
               }
            }
            ?>
            <p><a href="#">Read More &rarr;</a></p>
         </div>
      </div>

   </div><!-- /col-6 -->

</div><!-- /grid -->
