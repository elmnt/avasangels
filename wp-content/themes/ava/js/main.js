/**
 * main.js
 * Misc scripts that also compile into our global script: ava.min.js
 * Any more specific scripts should be loaded in functions.php
 *
 * NOTE: We're adding this last, in our gulpfile,
 * so the elmenu script is at the top of the synchronous list.
 */

/**
 * Add our two main CTAs to the mobile nav, AFTER the links.
 * Use a timeout to allow the mobile menu to render.
 * ( We can't append a child to something that doesn't exist yet! )
 * The two-second timeout is guesstimation, we could probably return
 * a global const from the elmenu script to be more specific, but this works just fine.
 */
setTimeout( function() {

	// create the buttons
	const mobileCTAs = document.createElement('div');
	mobileCTAs.classList.add('elmobile__cta-holder');
	mobileCTAs.innerHTML = '<a href="/get-support/" class="button button--white">Get Support</a><a href="/get-involved/" class="button button--white">Get Involved</a><a href="/give/" class="button button--white">Give</a>';
	const mobileMenu = document.querySelector( '#elmobile' );
	mobileMenu.appendChild( mobileCTAs );

}, 2000 );
