<?php
/**
 * VendorFuel_Side_Nav_Walker
 *
 * A navigation walker.
 *
 * @since 1.0.0
 * @package VendorFuel
 * @see Walker::start_el()
 */

/**
 * VendorFuel Side Nav Walker
 *
 * @category Class
 * @package VendorFuel_Side_Nav_Walker
 */
class VendorFuel_Side_Nav_Walker extends Walker_Nav_Menu {
	/**
	 * Starts the element output.
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$active      = $item->current ? 'active' : '';
		$object      = $item->object;
		$type        = $item->type;
		$title       = $item->title;
		$description = $item->description ? $item->description : $title;
		$permalink   = $item->url;

		if ( $permalink && '#' !== $permalink ) {
			$output .= '<a class="nav-link ' . $active . ' ' . implode( ' ', $item->classes ) . '" href="' . $permalink . '" title="' . $description . '">';
		} else {
			$output .= '<span class="nav-link disabled">';
		}

		$output .= $title;

		if ( $permalink && '#' !== $permalink ) {
			$output .= '</a>';
		} else {
			$output .= '</span>';
		}
	}
}

