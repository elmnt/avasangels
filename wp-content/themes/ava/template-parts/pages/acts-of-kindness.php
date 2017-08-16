<div class="grid">

   <?php // ACF content - Intro text
   if ( function_exists( 'get_field' ) ) {
      $oaokintro = get_field('oaok_intro');
      if( $oaokintro ) {
         echo '<div class="grid mt2 mb4">';
         echo '<div class="single-column">';
         echo '<h6>';
         echo $oaokintro;
         echo '</h6>';
         echo '</div>';
         echo '</div>';
      } else {
         echo $GLOBALS[ 'noacf' ]; // Set in header.php
      }
   }
   ?>

	<div class="col-6">

      <div class="grid">
         <?php // ACF content - Acts of Kindness images/captions
         if ( function_exists( 'get_field' ) ) {
            // check if the repeater field has rows of data
            if( have_rows( 'oaok_acts' ) ) {
               echo '<figure>';
               // loop through the rows of data
               while ( have_rows( 'oaok_acts' ) ) : the_row();
                  // set variables
                  $image = get_sub_field( 'oaok_acts_image' );
                  $caption = get_sub_field( 'oaok_acts_caption' );
                  echo '<img src="'.$image.'">';
                  echo '<figcaption><p>'.$caption.'</p></figcaption>';
               endwhile;
               echo '</figure>';
            } else {
               echo $GLOBALS[ 'noacf' ]; // Set in header.php
            }
         }
         ?>
      </div><!-- /.grid -->

	</div><!-- /.col-6 -->

	<div class="col-6">

      <?php // ACF content - The "Easy ways" title
      if ( function_exists( 'get_field' ) ) {
         $oaoksbtitle = get_field('oaok_sidebar_title');
         if( $oaoksbtitle ) {
            echo '<h4>'.$oaoksbtitle.'</h4>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

      <?php // ACF content - The "Easy ways" list
      if ( function_exists( 'get_field' ) ) {
         // check if the repeater field has rows of data
         if( have_rows( 'oaok_sidebar_list' ) ) {
            echo '<ol>';
            // loop through the rows of data
            while ( have_rows( 'oaok_sidebar_list' ) ) : the_row();
               // set variables
               $sidebaritem = get_sub_field( 'oaok_sidebar_list_item' );
               echo '<li class="mb1">'.$sidebaritem.'</li>';
            endwhile;
            echo '</ol>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

   </div><!-- /.col-6 -->

</div><!-- /.grid -->
