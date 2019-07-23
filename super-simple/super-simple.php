<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Aekan
 * @since             1.0.0
 * @package           Super_Simple
 *
 * @wordpress-plugin
 * Plugin Name:       Super Simple
 * Plugin URI:        https://silver-line.hu/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Alius Péter
 * Author URI:        https://github.com/Aekan
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       super-simple
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SUPER_SIMPLE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-super-simple-activator.php
 */
function activate_super_simple() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-super-simple-activator.php';
	Super_Simple_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-super-simple-deactivator.php
 */
function deactivate_super_simple() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-super-simple-deactivator.php';
	Super_Simple_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_super_simple' );
register_deactivation_hook( __FILE__, 'deactivate_super_simple' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-super-simple.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_super_simple() {

	$plugin = new Super_Simple();
	$plugin->run();

}
run_super_simple();
