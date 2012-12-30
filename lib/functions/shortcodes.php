<?php

/**
 * Shortcodes
 *
 * This file creates all the shortcodes used throughout the site.
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality 
 * @author       Jon Brown <jon@jbrownstudios.com>
 * @copyright    Copyright (c) 2012, Jon Brown
 * @attribution  Bill Erickson <bill@billerickson.net>
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
 
 
// Use shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Sample Shortcode
 * @since 1.0.0
 *
 * @param	null
 * @return	string	Site URL
 */
function jb_sample_shortcode( $atts ) {
	return $output;
}
//add_shortcode( 'sample_shortcode','jb_sample_shortcode' );