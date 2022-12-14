<?php
/**
* The file for displaying the search form
*
* @package GridMode WordPress Theme
* @copyright Copyright (C) 2022 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<form role="search" method="get" class="gridmode-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="gridmode-sr-only"><?php echo esc_html_x( 'Search for:', 'label', 'gridmode' ); ?></span>
    <input type="search" class="gridmode-search-field" placeholder="<?php echo esc_attr( gridmode_search_box_placeholder_text() ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="gridmode-search-submit" value="<?php echo esc_attr_x( '&#xf002;', 'submit button', 'gridmode' ); ?>" />
</form>