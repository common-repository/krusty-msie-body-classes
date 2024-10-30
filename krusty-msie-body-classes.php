<?php
/*
Plugin Name: Krusty MSIE Body Classes
Plugin URI: http://www.rustykruffle.com/wordpress-plugins/krusty-msie-body-classes/
Description: Inserts Internet Explorer version tags in the body classes of themes that use the 'body_class' filter.
Version: 1.0.2
Author: Krusty Ruffle
Author URI: http://www.rustykruffle.com/
*/

/*
	Copyright 2008  Krusty Ruffle  (email : krustyruffle@rustykruffle.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


/**
 * Checks the user agent and matches against MSIE versions
 *
 * @requires filter 'body_class'
 * @param array body classes
 * @uses preg_match()
 * @uses $SERVER['HTTP_USER_AGENT']
 * @return array body classes
 */
function krusty_msie_body_classes($c){

	if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version)){
		// add a class for all versions of MSIE
		$c[] = 'browser-msie';
		// add a class with the major version number
		$c[] = 'browser-msie-' . $browser_version[1];
		// add a class with the major and minor version number, if it's MSIE 5.5
		if('5' == $browser_version[1] && isset($browser_version[2]) && '5' == $browser_version[2])
			$c[] = 'browser-' . strtolower(str_replace('.', '-', strtolower($browser_version[0])));
		// add a class to match MSIE 6 and older
		if (7 > $browser_version[1])
			$c[] = 'browser-msie-old';
	}

	return $c;
}

// Hook on the body_class filter.
add_filter('body_class', 'krusty_msie_body_classes');

?>