<div class="grid">

	<div class="col-6">

		<h2>Our Mission</h2>
      <h6>The most important thing we have is each other</h6>
		<p>Ava's Angels is a non-profit organization dedicated to supporting families with sick or disabled children. The organization was founded by a group of women who recognize the importance of love and support given by others during difficult and challenging times. With the mission of addressing basic life needs, Ava's Angels fosters the growth of human connections which improve the lives of all involved. We work closely with the donee family to meet their specific needs, as each situation is different.</p>
      <p>As word of our mission spreads, our volunteer base grows, continually inspiring involvement from those who understand that sharing their time or resources deeply benefits a struggling family. This contagious goodwill led our children to ask what they could do to help, so we also create volunteer opportunities for them to learn the immeasurable value of support and generosity. From acts as simple as buying groceries or giving rides, to organizing events to raise funds for family assistance, Ava's Angels believes that forging personal connections is a life-affirming gift for everyone.</p>
      <p>Through our volunteers and donations, we provide assistance that ranges from emotional support to a trip to the grocery store. ​We recognize the importance of the love and support given by others during difficult and challenging times.</p>

	</div>

	<div class="col-6">

		<h2>Our Inspiration</h2>

      <?php // Get the image & copy from the Our Inspiration page ?>

      <div class="grid--flex">

         <div class="col-6 gfitem-1">
            <?php // ACF content
            if ( function_exists( 'get_field' ) ) {
               // Add the page ID to get the field from the Our Inspiration page
               $oiavaphoto = get_field('oi_ava_photo', 49);
               if( $oiavaphoto ) {
                  echo '<img src="'.$oiavaphoto.'" alt="Ava Rose Twardowski" class="img--round gfitem-img">';
               } else {
                  echo $GLOBALS[ 'noacf' ]; // Set in header.php
               }
            }
            ?>
         </div>

   		<p class="gfitem-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      </div>

      <h2>Our Directors</h2>

      <?php // Get the image & copy from the FIRST entry on the Our Directors page ?>

      <div class="grid--flex">

         <div class="col-6 gfitem-1">

            <?php // ACF content
            if ( function_exists( 'get_field' ) ) {
               // Add the page ID to get the field from the Our Directors page
               $odonephoto = get_field('od_one_photo', 102);
               $odonename = get_field('od_one_name', 102);
               if( $odonephoto ) {
                  echo '<picture>
                           <img src="'.$odonephoto.'" alt="'.$odonename.'" class="home__inspiration">
                        </picture>';
               } else {
                  echo $GLOBALS[ 'noacf' ]; // Set in header.php
               }
            }
            ?>

         </div>

         <div class="gfitem-2">

            <?php // ACF content
            if ( function_exists( 'get_field' ) ) {
               // Add the page ID to get the field from the Our Directors page
               $odonename = get_field('od_one_name', 102);
               $odonebio = get_field('od_one_bio', 102);
               if( $odonename ) {
                  echo '<h5>'.$odonename.'</h5>';
               } else {
                  echo $GLOBALS[ 'noacf' ]; // Set in header.php
               }
               if( $odonebio ) {
                  echo $odonebio;
               } else {
                  echo $GLOBALS[ 'noacf' ]; // Set in header.php
               }
            }
            ?>

         </div>

      </div>

   </div>

</div>



