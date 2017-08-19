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


/**
 * Add a force reload on the About Us link, and the Our Mission link, to avoid a problem where,
 * if the mobile menu is showing, and either of those links are clicked, 
 * we get pushed down the page (because of the in-page anchor link), 
 * WITH the mobile menu open, showing only the solid background color of the mobile menu.
 * NOTE: This will break down if the client changes the link structure in the Admin.
 */
// Target the About Us link
const primaryMenu = document.querySelector("#primary-menu");
const aboutUsItem = primaryMenu.firstChild;
const aboutUsLink = aboutUsItem.firstChild;

// Target the Our Mission link
const subList = aboutUsItem.childNodes[2]; // the sub ul
const subListItem = subList.childNodes[1]; // the Our Mission li
const subListLink = subListItem.firstChild // the Our Mission link (a)

// Add the JS to refresh when hitting either of these links
aboutUsLink.setAttribute("onclick", "window.location.reload(true);");
subListLink.setAttribute("onclick", "window.location.reload(true);");
