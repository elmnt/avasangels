<div class="grid mb3">
   <?php the_content(); ?>
</div>

<div class="grid">
<div class="single-column">

   <?php // ACF content
   if ( function_exists( 'get_field' ) ) {
      // Check if the repeater field has rows of data
      if( have_rows( 'gathering_content' ) ) {
         // loop through the rows of data
         while ( have_rows( 'gathering_content' ) ) : the_row();
            // set variables
            $gctitle = get_sub_field( 'gathering_content_title' );
            $gccopy = get_sub_field( 'gathering_content_copy' );
            echo '<h4>'.$gctitle.'</h4>';
            echo $gccopy;
         endwhile;
      } else {
         echo $GLOBALS[ 'noacf' ]; // Set in header.php
      }
   }
   ?>

</div>
</div>
