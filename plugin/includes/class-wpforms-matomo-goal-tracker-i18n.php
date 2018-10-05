<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://gruseltour-berlin.de
 * @since      1.0.0
 *
 * @package    Wpforms_Matomo_Goal_Tracker
 * @subpackage Wpforms_Matomo_Goal_Tracker/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wpforms_Matomo_Goal_Tracker
 * @subpackage Wpforms_Matomo_Goal_Tracker/includes
 * @author     Mysterium Tremendum GbR <kontakt@gruseltour-berlin.de>
 */
class Wpforms_Matomo_Goal_Tracker_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wpforms-matomo-goal-tracker',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
