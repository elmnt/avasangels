<?php

/*

Custom Walker_Nav_Menu Class to create my header nav menu

Credit:
http://shinraholdings.com/62/custom-nav-menu-walker-function/

Luke's classes:
.main-menu to top menu
.sub-menu to menus inside the main-menu
.menu-item to all <li>s
.main-menu-item to all <li>s in the main menu
.sub-menu-item to all <li>s in a sub-menu
.sub-sub-menu to all menus inside a sub-menu
.menu-even/.menu-odd for <ul>s (alternating)
.menu-depth-# to tell you how deep each menu is
.menu-item-even or .menu-item-odd (alternating)
.menu-item-depth-# to tell you which level menu the <li> is in
.menu-link to links

My elmenu class structure to be injected:

    Parent ul.elm__list
           li.elm__item (optional:hassub) > a.elm__link

     Child ul.elm__list--sub
           li.elm__item--sub (optional:hassubsub) > a.elm__link--sub

Grandchild ul.elm__list--subsub
           li.elm__item--subsub > a.elm__link--subsub

*/

/* Function to check if an item has children */
function hasChildren( $pid ) {
    $children = get_pages( "child_of={$pid}" );
    return ( $children );
}

class Ava_Nav_Menu extends Walker_Nav_Menu {

	// add classes to ul sub-menus
	// function start_lvl( &$output, $depth ) {
	function start_lvl( &$output, $depth = 0, $args = array() ) {

	    // depth dependent classes
	    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
	    $display_depth = ( $depth + 1); // because it counts the first submenu as 0

	    // Render the sub-menu ULs if they exist
	    if ( $display_depth >=2 ){
	    	$output .= "\n" . $indent . '<ul class="elm__list--subsub">' . "\n";
	    } else {
	    	$output .= "\n" . $indent . '<ul class="elm__list--sub">' . "\n";
		}

	}

	// add main/sub classes to li's and links
	// function start_el( &$output, $item, $depth, $args ) {
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

	    global $wp_query;
	    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

	    // depth dependent classes
	    $depth_classes = array(
	        // Add the appropriate class, based on depth
	        ( $depth == 0 ? 'elm__item' : '' ),
	        ( $depth == 1 ? 'elm__item--sub' : '' ),
	        ( $depth >=2  ? 'elm__item--subsub' : '' )
	    );

	    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

	    // passed classes
	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

	    // Create an array from our depth variables
	    // (revealing the depth of each menu)
	    $darray = array($depth);
		foreach ($darray as $dval) {

			// Loop through the array

			// If it's a Level 1 link
		    if( $dval == 0 ) {
		    	// And if it has children
				if( hasChildren( $item->object_id ) ) {
					// Add the hasssub class
					$addHasSub = 'hassub';
				// Or, if it has no children
				} else {
					// Leave the variable empty (so no class will be assigned)
					$addHasSub = '';
				}

			// If it's a Level 2 link, do the same thing
		    } elseif( $dval == 1 ) {

				if( hasChildren( $item->object_id ) ) {
					$addHasSub = 'hassubsub';
				} else {
					$addHasSub = '';
				}

			// Have to account for Level 3 links (which will have no children)
			} elseif ( $dval >= 2 ) {
				$addHasSub = '';
			}

			// Render the list item, and add the 'does it have children' class variable
			$output .= $indent . '<li class="' . $depth_class_names . ' ' . $addHasSub . '">';

		}

	    // link attributes
	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	    // Attach the correct link class, based on depth
	    if( $depth == 0 ) {
	    	$linkClass = 'elm__link';
	    } elseif ( $depth == 1 ) {
	    	$linkClass = 'elm__link--sub';
	    } elseif ( $depth >= 2 ) {
	    	$linkClass = 'elm__link--subsub';
	    }
	    $attributes .= ' class="' . $linkClass . '"';

	    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
	        $args->before,
	        $attributes,
	        $args->link_before,
	        apply_filters( 'the_title', $item->title, $item->ID ),
	        $args->link_after,
	        $args->after
	    );

	    // build the html
	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

} // end Ava_Nav_Menu
