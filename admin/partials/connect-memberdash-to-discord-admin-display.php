<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://www.expresstechsoftwares.com
 * @since      1.0.0
 *
 * @package    Connect_Memberdash_To_Discord
 * @subpackage Connect_Memberdash_To_Discord/admin/partials
 */

?>

<?php
if ( isset( $_GET['save_settings_msg'] ) ) {
	?>
	<div class="notice notice-success is-dismissible support-success-msg">
		<p><?php echo esc_html( $_GET['save_settings_msg'] ); ?></p>
	</div>
	<?php
}
?>
<h1><?php esc_html_e( 'MemberDash Discord Add On Settings', 'connect-memberdash-to-discord' ); ?></h1>
		<div id="memberdash-discord-outer" class="skltbs-theme-light" data-skeletabs='{ "startIndex": 0 }'>
			<ul class="skltbs-tab-group">
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="settings" ><?php esc_html_e( 'Application Details', 'connect-memberdash-to-discord' ); ?><span class="initialtab spinner"></span></button>
				</li>
				<li class="skltbs-tab-item">
				<?php if ( memberdash_discord_check_saved_settings_status() ) : ?>
				<button class="skltbs-tab" data-identity="level-mapping" ><?php esc_html_e( 'Role Mappings', 'connect-memberdash-to-discord' ); ?></button>
				<?php endif; ?>
				</li>
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="advanced" ><?php esc_html_e( 'Advanced', 'connect-memberdash-to-discord' ); ?>	
				</button>
				</li>
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="appearance" ><?php esc_html_e( 'Appearance', 'connect-memberdash-to-discord' ); ?>	
				</button>
				</li>                                
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="logs" ><?php esc_html_e( 'Logs', 'connect-memberdash-to-discord' ); ?>	
				</button>
				</li> 
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="documentation" ><?php esc_html_e( 'Documentation', 'connect-memberdash-to-discord' ); ?>	
				</button>
				</li> 
				<li class="skltbs-tab-item">
				<button class="skltbs-tab" data-identity="support" ><?php esc_html_e( 'Support', 'connect-memberdash-to-discord' ); ?>	
				</button>
				</li>
			</ul>
			<div class="skltbs-panel-group">
				<div id="ets_memberdash_application_details" class="memberdash-discord-tab-conetent skltbs-panel">
				<?php require_once CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_PATH . 'admin/partials/pages/memberdash-discord-application-details.php'; ?>
				</div>
				<?php if ( memberdash_discord_check_saved_settings_status() ) : ?>      
				<div id="ets_memberdash_discord_role_mapping" class="memberdash-discord-tab-conetent skltbs-panel">
					<?php require_once CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_PATH . 'admin/partials/pages/memberdash-discord-role-mapping.php'; ?>
				</div>
				<?php endif; ?>
				<div id='ets_memberdash_discord_advanced' class="memberdash-discord-tab-conetent skltbs-panel">
				<?php require_once CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_PATH . 'admin/partials/pages/memberdash-discord-advanced.php'; ?>
				</div>
				<div id='ets_memberdash_discord_appearance' class="memberdash-discord-tab-conetent skltbs-panel">
				<?php require_once CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_PATH . 'admin/partials/pages/memberdash-discord-appearance.php'; ?>
				</div>                            
				<div id='ets_memberdash_discord_logs' class="memberdash-discord-tab-conetent skltbs-panel">
				<?php require_once CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_PATH . 'admin/partials/pages/memberdash-discord-error-log.php'; ?>
				</div>
		<div id='ets_memberdash_discord_documentation' class="memberdash-discord-tab-conetent skltbs-panel">
				<?php require_once CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_PATH . 'admin/partials/pages/memberdash-discord-documentation.php'; ?>
				</div>
		<div id='ets_memberdash_discord_support' class="memberdash-discord-tab-conetent skltbs-panel">
				<?php require_once CONNECT_MEMBERDASH_TO_DISCORD_PLUGIN_DIR_PATH . 'admin/partials/pages/memberdash-discord-support.php'; ?>
				</div>                            
			</div>  
		</div>
