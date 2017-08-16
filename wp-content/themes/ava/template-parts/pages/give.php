<div class="grid">

	<div class="col-4">

		<?php the_content(); ?>

   </div><!-- /.col-4 -->

	<div class="col-8">

		<h5>Donate Securely Online:</h5>

      <?php // ACF content - Sumac form link
      if ( function_exists( 'get_field' ) ) {
         $giveform = get_field('give_form_link');
         if( $giveform ) {
            echo '<iframe src="'.$giveform.'" width="100%" height="2400" frameborder="0"></iframe>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

   </div><!-- /.col-8 -->

</div><!-- /.grid -->
