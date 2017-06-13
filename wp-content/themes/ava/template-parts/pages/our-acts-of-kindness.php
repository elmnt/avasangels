<div class="grid">

	<div class="col-6">

		<h2>Our Acts of Kindness</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <div class="grid">

         <?php // ACF content - Acts of Kindness images/captions
         if ( function_exists( 'get_field' ) ) {
            // Check if the repeater field has rows of data
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
      </div>

	</div>

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
         // Check if the repeater field has rows of data
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

   </div>

</div>
