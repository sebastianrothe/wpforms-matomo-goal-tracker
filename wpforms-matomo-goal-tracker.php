<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://gruseltour-berlin.de
 * @since             1.0.0
 * @package           Wpforms_Matomo_Goal_Tracker
 *
 * @wordpress-plugin
 * Plugin Name:       WPForms Matomo Goal Tracker
 * Plugin URI:        https://github.com/sebastianrothe
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Mysterium Tremendum GbR
 * Author URI:        https://gruseltour-berlin.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpforms-matomo-goal-tracker
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpforms-matomo-goal-tracker-activator.php
 */
function activate_wpforms_matomo_goal_tracker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpforms-matomo-goal-tracker-activator.php';
	Wpforms_Matomo_Goal_Tracker_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpforms-matomo-goal-tracker-deactivator.php
 */
function deactivate_wpforms_matomo_goal_tracker() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpforms-matomo-goal-tracker-deactivator.php';
	Wpforms_Matomo_Goal_Tracker_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpforms_matomo_goal_tracker' );
register_deactivation_hook( __FILE__, 'deactivate_wpforms_matomo_goal_tracker' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpforms-matomo-goal-tracker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpforms_matomo_goal_tracker() {

	$plugin = new Wpforms_Matomo_Goal_Tracker();
	$plugin->run();

}
run_wpforms_matomo_goal_tracker();
