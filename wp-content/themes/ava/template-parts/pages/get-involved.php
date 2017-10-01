<div class="grid">

   <div class="col-4">

      <h5>Ava's Angels San Diego</h5>
      <?php if ( is_active_sidebar( 'sidebar-contact-info' ) ) : ?>
         <?php dynamic_sidebar( 'sidebar-contact-info' ); ?>
      <?php endif; ?>

   </div><!-- /.col-4 -->

	<div class="col-8">

      <?php the_content(); ?>

      <?php // ACF content - Sumac form link
      if ( function_exists( 'get_field' ) ) {
         $giform = get_field('get_involved_form_link');
         if( $giform ) {
            echo '<iframe src="'.$giform.'" width="100%" height="2400" frameborder="0"></iframe>';
         } else {
            echo $GLOBALS[ 'noacf' ]; // Set in header.php
         }
      }
      ?>

	</div><!-- /.col-8 -->

</div><!-- /.grid -->
