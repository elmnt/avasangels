<?php // ACF content - Our Directors excerpt
if ( function_exists( 'get_field' ) ) {
   $odexcerpt = get_field('od_directors_excerpt');
   if( $odexcerpt ) {
      echo '<div class="grid mt2 mb4">';
      echo '<div class="single-column">';
      echo '<h6>';
      echo $odexcerpt;
      echo '</h6>';
      echo '</div>';
      echo '</div>';
   } else {
      echo $GLOBALS[ 'noacf' ]; // Set in header.php
   }
}
?>

<?php // ACF content - Our Directors Repeater ?>
<?php if ( function_exists( 'get_field' ) ) : ?>

<?php if( have_rows('director_repeater') ): ?>

   <?php while( have_rows('director_repeater') ): the_row(); ?>

      <div class="grid mb4">

         <div class="col-6 home__inspiration--holder">
            <?php
               $dirphoto = get_sub_field('director_photo');
               $dirname = get_sub_field('director_name');
               echo '<img src="'.$dirphoto.'" alt="'.$dirname.'" class="home__inspiration">';
            ?>
         </div><!-- /.col-6 -->

         <div class="col-6">
            <?php
               $dirname = get_sub_field('director_name');
               $dirbio = get_sub_field('director_bio');
               echo '<h3>'.$dirname.'</h3>';
               echo '<p>'.$dirbio.'</p>';
            ?>
         </div><!-- /.col-6 -->

      </div><!-- /.grid -->

   <?php endwhile; ?>

<?php endif; ?>

<?php // end ACF content check with fallback ?>
<?php else: ?>
<?php echo $GLOBALS[ 'noacf' ]; // Set in header.php ?>
<?php endif; ?>
