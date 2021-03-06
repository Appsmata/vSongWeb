<?php
/*
	vSongBook by AppSmata Solutions
	http://github.com/appsmata/

	File: as-plugin/basic-adsense/as-plugin.php
	Description: Initiates Adsense widget plugin


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://github.com/appsmata/license.php
*/

/*
	Plugin Name: Basic AdSense
	Plugin URI:
	Plugin Description: Provides a basic widget for displaying Google AdSense ads
	Plugin Version: 1.0
	Plugin Date: 2011-03-27
	Plugin Author: vSongBook
	Plugin Author URI: http://github.com/appsmata/
	Plugin License: GPLv2
	Plugin Minimum vSongBook Version: 1.4
	Plugin Update Check URI:
*/


if (!defined('AS_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}


as_signup_plugin_module('widget', 'as-basic-adsense.php', 'as_basic_adsense', 'Basic AdSense');
