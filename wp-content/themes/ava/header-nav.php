<?php
/**
 * Custom header nav
 *
 * @package ava
 */
?><div class="navholder--main cf">
	<?php
	/*
	Generate a custom structure for Wordpress menus
	Credit: https://gist.github.com/hitautodestruct/4345363
	Using this to generate markup with my custom classes for the elmenu script
	*/
	$menu_name = 'menu-1';
	$locations = get_nav_menu_locations();
	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
	?>
	<nav role="navigation">
		<ul class="nav--main elm__list">
		    <?php
		    $count = 0;
		    $submenu = false;
		    foreach( $menuitems as $item ):
		        $link = $item->url;
		        $title = $item->title;
		        // Item does not have a parent so menu_item_parent equals 0 (false)
		        if ( !$item->menu_item_parent ):
		        // Save this id for later comparison with sub-menu items
		        $parent_id = $item->ID;
		    ?>
		    <?php
		    /*
		    If the current menu item has children (check using the hasChildren function),
		    then use the LI with the hassub class. If not, just get the normal LI
		    */
		    ?>
			<?php if( hasChildren( $item->object_id ) ): ?>
			<li class="elm__item hassub">
			<?php else: ?>
			<li class="elm__item">
			<?php endif; ?>
			<a href="<?php echo $link; ?>" class="elm__link"><?php echo $title; ?></a>
			<?php endif; ?>
			<?php if ( $parent_id == $item->menu_item_parent ): ?>
			<?php if ( !$submenu ): $submenu = true; ?>
				<ul class="elm__list--sub">
				<?php endif; ?>
					<li class="elm__item--sub"><a href="<?php echo $link; ?>" class="elm__link--sub"><?php echo $title; ?></a></li>
				<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
				</ul>
			<?php $submenu = false; endif; ?>
			<?php endif; ?>
		    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
		    </li>
		    <?php $submenu = false; endif; ?>
			<?php $count++; endforeach; ?>
			<?php
			/* Check if page has children */
			function hasChildren( $pid ) {
			    $children = get_pages( "child_of={$pid}" );
			    return ( $children );
			}
			?>
		</ul>
	</nav>
</div>

<div class="elmtoggle__holder">
	<a href="#!" id="elmtoggle" class="cf"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/hamburger.svg" alt="Open Sub Menu" class="elmtoggle__icon"></a>
</div>
