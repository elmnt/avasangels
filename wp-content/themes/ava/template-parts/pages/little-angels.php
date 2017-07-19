<div class="grid">
<div class="single-column">

   <?php // ACF content
   if ( function_exists( 'get_field' ) ) {
      $liintro = get_field('li_intro');
      if( $liintro ) {
         echo '<h6 class="mb3">'.$liintro.'</h6>';
      } else {
         echo $GLOBALS[ 'noacf' ]; // Set in header.php
      }
   }
   ?>

</div>
</div>

<div class="grid">

	<div class="col-6">

      <div class="hh__topquote">
      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $liquote = get_field('li_quote');
         $liquoteatt = get_field('li_quote_attribute');
         if( $liquote ) {
            echo '<h5>'.$liquote.'</h5>';
            echo '<h6 class="mb0">&mdash; '.$liquoteatt.'</h6>';
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
         $liopptitle = get_field('li_opportunites_title');
         if( $liopptitle ) {
            echo '<h4>'.$liopptitle.'</h4>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         // Check if the repeater field has rows of data
         if( have_rows( 'li_opportunites_list' ) ) {
            echo '<ol>';
            // loop through the rows of data
            while ( have_rows( 'li_opportunites_list' ) ) : the_row();
               // set variables
               $lioppitem = get_sub_field( 'li_opportunity_item' );
               echo '<li class="mb1">'.$lioppitem.'</li>';
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
      if( have_rows( 'li_events' ) ) {
         echo '<div class="grid--portfolio">';
         // loop through the rows of data
         while ( have_rows( 'li_events' ) ) : the_row();
            // set variables
            $image = get_sub_field( 'li_event_image' );
            $caption = get_sub_field( 'li_event_caption' );
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
