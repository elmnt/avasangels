<div class="grid">

	<div class="col-6">

      <div class="hh__topquote">
      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $hhquote = get_field('hh_quote');
         $hhquoteatt = get_field('hh_quote_attribute');
         if( $hhquote ) {
            echo '<h5>'.$hhquote.'</h5>';
            echo '<h6 class="mb0">&mdash; '.$hhquoteatt.'</h6>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>
      </div>

	</div>

	<div class="col-6">

      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $hhopptitle = get_field('hh_opportunites_title');
         if( $hhopptitle ) {
            echo '<h4>'.$hhopptitle.'</h4>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

      <?php // ACF content - The "Opportunities" list
      if ( function_exists( 'get_field' ) ) {
         // Check if the repeater field has rows of data
         if( have_rows( 'hh_opportunites_list' ) ) {
            echo '<ol>';
            // loop through the rows of data
            while ( have_rows( 'hh_opportunites_list' ) ) : the_row();
               // set variables
               $hhoppitem = get_sub_field( 'hh_opportunity_item' );
               echo '<li class="mb1">'.$hhoppitem.'</li>';
            endwhile;
            echo '</ol>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

	</div>

</div>

<div class="grid">

   <?php // ACF content - Acts of Kindness images/captions
   if ( function_exists( 'get_field' ) ) {
      // Check if the repeater field has rows of data
      if( have_rows( 'hh_events' ) ) {
         echo '<div class="grid--portfolio">';
         // loop through the rows of data
         while ( have_rows( 'hh_events' ) ) : the_row();
            // set variables
            $image = get_sub_field( 'hh_event_image' );
            $caption = get_sub_field( 'hh_event_caption' );
            echo '<div class="gpitem">';
            echo '<figure>';
            echo '<img src="'.$image.'">';
            echo '<figcaption><p>'.$caption.'</p></figcaption>';
            echo '</figure>';
            echo '</div>';
         endwhile;
         echo '</div>';
      } else {
         echo $GLOBALS[ 'noacf' ]; // Set in header.php
      }
   }
   ?>

</div>
