<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://www.expresstechsoftwares.com
 * @since      1.0.0
 *
 * @package    Connect_Memberdash_To_Discord
 * @subpackage Connect_Memberdash_To_Discord/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Connect_Memberdash_To_Discord
 * @subpackage Connect_Memberdash_To_Discord/admin
 * @author     ExpressTech Softwares Solutions Pvt Ltd <younesdro@gmail.com>
 */
class Connect_Memberdash_To_Discord_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Connect_Memberdash_To_Discord_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Connect_Memberdash_To_Discord_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/connect-memberdash-to-discord-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Connect_Memberdash_To_Discord_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Connect_Memberdash_To_Discord_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/connect-memberdash-to-discord-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Undocumented function
	 *
	 * @param [type] $pages
	 * @param [type] $limited_mode
	 * @param [type] $original_plugin_instance
	 * @return void
	 */
	public function ets_ms_add_discord_menu( $pages, $limited_mode, $original_plugin_instance ) {

		$custom_page = array(
			'title' => 'Discord',
			'slug' => 'discord',
		);

		$pages[] = $custom_page;

		return $pages;
	}

	/**
	 * Undocumented function
	 *
	 * @param [type] $handler
	 * @param [type] $controller_instance
	 * @return void
	 */
	public function ets_ms_route_submenu_request( $handler, $controller_instance ) {

			$handler = array(
				'discord',
				array( $this, 'custom_submenu_callback' ),
			);

		return $handler;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function custom_submenu_callback() {

		echo 'discord';
	}

}
