<div class="grid">

	<div class="col-6">

      <?php // ACF content
      if ( function_exists( 'get_field' ) ) {
         $hhquote = get_field('hh_quote');
         $hhquoteatt = get_field('hh_quote_attribute');
         if( $hhquote ) {
            echo '<h5>'.$hhquote.'</h5>';
            echo '<h6>'.$hhquoteatt.'</h6>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      //hh_quote
      //hh_quote_attribute
      ?>

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

<div class="grid--portfolio">

<!-- class="gpitem" -->

</div>
