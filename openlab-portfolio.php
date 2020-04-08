<?php
/**
 * Plugin Name: OpenLab Portfolio
 * Description: WordPress portfolio tools, developed for Commons In A Box and the City Tech OpenLab.
 * Author:      OpenLab
 * Author URI:  http://openlab.citytech.cuny.edu
 * Plugin URI:  http://openlab.citytech.cuny.edu
 * Version:     1.0.0
 * License:     GPL-2.0-or-later
 * Text Domain: openlab-portfolio
 * Domain Path: /languages
 */

namespace OpenLab\Portfolio;

const ROOT_DIR  = __DIR__;
const ROOT_FILE = __FILE__;

if ( file_exists( ROOT_DIR . '/vendor/autoload.php' ) ) {
	require ROOT_DIR . '/vendor/autoload.php';

	add_action( 'init', function() {
		load_plugin_textdomain( 'openlab-portfolio' );
	} );

	Portfolio::create();
}
