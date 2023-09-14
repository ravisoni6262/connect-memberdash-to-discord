<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://www.expresstechsoftwares.com
 * @since      1.0.0
 *
 * @package    Connect_Memberdash_To_Discord
 * @subpackage Connect_Memberdash_To_Discord/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Connect_Memberdash_To_Discord
 * @subpackage Connect_Memberdash_To_Discord/includes
 * @author     ExpressTech Softwares Solutions Pvt Ltd <younesdro@gmail.com>
 */
class Connect_Memberdash_To_Discord_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'connect-memberdash-to-discord',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
