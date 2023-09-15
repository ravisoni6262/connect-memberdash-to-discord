<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.expresstechsoftwares.com
 * @since             1.0.0
 * @package           Connect_Memberdash_To_Discord
 *
 * @wordpress-plugin
 * Plugin Name:       Connect MemberDash to Discord
 * Plugin URI:        https://https://github.com/ravisoni6262/connect-memberdash-to-discord
 * Description:       Seamlessly integrate MemberDash with Discord. Automatically assign Discord roles based on membership plans, creating a well-organized and engaged community.
 * Version:           1.0.0
 * Author:            ExpressTech Softwares Solutions Pvt Ltd
 * Author URI:        https://https://www.expresstechsoftwares.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       connect-memberdash-to-discord
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
define( 'CONNECT_MEMBERDASH_TO_DISCORD_VERSION', '1.0.0' );

/**
 * Define plugin directory path
 */
define( 'CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Define plugin directory URL
 */
define( 'CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );

/**
 * Discord Bot Permissions.
 */
define( 'CONNECT_MEMBERDASH_TO_DISCORD_BOT_PERMISSIONS', 8 );

/**
 * Discord api call scopes.
 */
define( 'CONNECT_MEMBERDASH_TO_DISCORD_OAUTH_SCOPES', 'identify email guilds guilds.join' );

/**
 * Define group name for action scheduler actions
 */
define( 'CONNECT_MEMBERDASH_TO_DISCORD_AS_GROUP_NAME', 'ets-memberdash-discord' );

/**
 * Discord API url.
 */
define( 'CONNECT_MEMBERDASH_TO_DISCORD_API_URL', 'https://discord.com/api/v10/' );

/**
 * Follwing response codes not cosider for re-try API calls.
 */
define( 'CONNECT_MEMBERDASH_TO_DISCORD_DONOT_RETRY_THESE_API_CODES', array( 0, 10003, 50033, 10004, 50025, 10013, 10011 ) );

/**
 * Define plugin directory url
 */
define( 'CONNECT_MEMBERDASH_TO_DISCORD_DONOT_RETRY_HTTP_CODES', array( 400, 401, 403, 404, 405, 502 ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-connect-memberdash-to-discord-activator.php
 */
function activate_connect_memberdash_to_discord() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-connect-memberdash-to-discord-activator.php';
	Connect_Memberdash_To_Discord_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-connect-memberdash-to-discord-deactivator.php
 */
function deactivate_connect_memberdash_to_discord() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-connect-memberdash-to-discord-deactivator.php';
	Connect_Memberdash_To_Discord_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_connect_memberdash_to_discord' );
register_deactivation_hook( __FILE__, 'deactivate_connect_memberdash_to_discord' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-connect-memberdash-to-discord.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_connect_memberdash_to_discord() {

	$plugin = new Connect_Memberdash_To_Discord();
	$plugin->run();

}
run_connect_memberdash_to_discord();
