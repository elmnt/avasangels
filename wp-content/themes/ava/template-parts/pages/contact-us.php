<div class="grid flexheight">

	<div class="col-4">

      <h5>Ava's Angels San Diego</h5>
      <?php if ( is_active_sidebar( 'sidebar-contact-info' ) ) : ?>
         <?php dynamic_sidebar( 'sidebar-contact-info' ); ?>
      <?php endif; ?>

	</div><!-- /.col-4 -->

	<div class="col-8">

		<h2>Get in Touch!</h2>
      <?php the_content(); ?>

	</div><!-- /.col-8 -->

</div><!-- /.grid -->
