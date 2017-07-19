<div class="grid">
<div class="single-column">

   <?php // ACF content
   if ( function_exists( 'get_field' ) ) {
      $progintro = get_field('programs_intro');
      if( $progintro ) {
         echo '<h6 class="mb3">'.$progintro.'</h6>';
      } else {
         echo $GLOBALS[ 'noacf' ]; // Set in header.php
      }
   }
   ?>

</div>
</div>

<?php
/*
programs_repeater
programs_image
programs_title
programs_description
*/
?>

<?php // ACF content - Programs Repeater ?>
<?php if ( function_exists( 'get_field' ) ) : ?>

<?php if( have_rows('programs_repeater') ): ?>

   <?php while( have_rows('programs_repeater') ): the_row(); ?>

      <div class="grid mb4">

         <div class="col-6 home__inspiration--holder">
            <?php
               $progimg = get_sub_field('programs_image');
               $progname = get_sub_field('programs_title');
               echo '<img src="'.$progimg.'" alt="'.$progname.'" class="home__inspiration">';
            ?>
         </div>

         <div class="col-6">
            <?php
               $progname = get_sub_field('programs_title');
               $progbio = get_sub_field('programs_description');
               echo '<h3>'.$progname.'</h3>';
               echo '<p>'.$progbio.'</p>';
            ?>
         </div>

      </div>

   <?php endwhile; ?>

<?php endif; ?>

<?php // end ACF content check with fallback ?>
<?php else: ?>
<?php echo $GLOBALS[ 'noacf' ]; // Set in header.php ?>
<?php endif; ?>
