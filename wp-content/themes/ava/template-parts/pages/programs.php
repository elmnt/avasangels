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

<?php // ACF content - Programs Repeater ?>
<?php if ( function_exists( 'get_field' ) ) : ?>

<?php if( have_rows('programs_repeater') ): ?>
   <?php while( have_rows('programs_repeater') ): the_row(); ?>
      <div class="grid mb4">
         <div class="col-6 home__inspiration--holder">
            <?php
               $progimg = get_sub_field('programs_image');
               $progname = get_sub_field('programs_title');
               $proglink = get_sub_field('programs_link');
               echo '<a href="'.$proglink.'"><img src="'.$progimg.'" alt="'.$progname.'" class="home__inspiration"></a>';
            ?>
         </div>
         <div class="col-6">
            <?php
               $progname = get_sub_field('programs_title');
               $progbio = get_sub_field('programs_description');
               $proglink = get_sub_field('programs_link');
               echo '<h3><a href="'.$proglink.'">'.$progname.'</a></h3>';
               echo '<p>'.$progbio.'</p>';
               echo '<p><a href="'.$proglink.'">Read More &rarr;</a></p>';
            ?>
         </div>
      </div>
   <?php endwhile; ?>
<?php endif; ?>

<?php // end ACF content check with fallback ?>
<?php else: ?>
<?php echo $GLOBALS[ 'noacf' ]; // Set in header.php ?>
<?php endif; ?>
