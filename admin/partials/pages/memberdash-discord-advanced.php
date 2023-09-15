<?php
$ets_memberdash_discord_send_welcome_dm         = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_send_welcome_dm' ) ) );
$ets_memberdash_discord_welcome_message         = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_welcome_message' ) ) );




$retry_failed_api                         = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_retry_failed_api' ) ) );
$kick_upon_disconnect                     = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_kick_upon_disconnect' ) ) );
$retry_api_count                          = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_retry_api_count' ) ) );
$set_job_cnrc                             = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_job_queue_concurrency' ) ) );
$set_job_q_batch_size                     = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_job_queue_batch_size' ) ) );
$log_api_res                              = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_log_api_response' ) ) );
$embed_messaging_feature                  = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_embed_messaging_feature' ) ) );
$ets_memberdash_discord_data_erases        = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_data_erases' ) ) );
$ets_memberdash_discord_login_with_discord = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_login_with_discord' ) ) );

?>
<form method="post" action="<?php echo esc_url( get_site_url() . '/wp-admin/admin-post.php' ); ?>">
 <input type="hidden" name="action" value="memberdash_discord_save_advance_settings">
 <input type="hidden" name="current_url" value="<?php echo esc_url( ets_memberdash_discord_get_current_screen_url() ); ?>">   
<?php wp_nonce_field( 'memberdash_discord_advance_settings_nonce', 'ets_memberdash_discord_advance_settings_nonce' ); ?>
  <table class="form-table" role="presentation">
	<tbody>
	<tr>
		<th scope="row"><?php esc_html_e( 'Shortcode:', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
		[memberdash_discord]
		<br/>
		<small><?php esc_html_e( 'Use this shortcode [memberdash_discord] to display connect to discord button on any page.', 'connect-memberdash-to-discord' ); ?></small>
		</fieldset></td>
	</tr>
	<tr>
		<th scope="row"><?php esc_html_e( 'Data erases on uninstall?', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
		<input name="ets_memberdash_discord_data_erases" type="checkbox" id="ets_memberdash_discord_data_erases" 
		<?php
		if ( $ets_memberdash_discord_data_erases == true ) {
			echo esc_attr( 'checked="checked"' ); }
		?>
		 value="1">
				<br/>
				<small>By checking this box, you are indicating that you want to delete all data associated with the plugin when it is uninstalled.</small>                
		</fieldset></td>
	  </tr>
	  <tr>
		<th scope="row"><?php esc_html_e( 'Show login with Discord button?', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
		<input name="ets_memberdash_discord_login_with_discord" type="checkbox" id="ets_memberdash_discord_login_with_discord" 
		<?php
		if ( $ets_memberdash_discord_login_with_discord == true ) {
			echo esc_attr( 'checked="checked"' ); }
		?>
		 value="1">
				<br/>
				<small>Offer the student to connect with his Discord account on the registration page.</small>                
		</fieldset></td>
	  </tr>	  		
	<tr>
		<th scope="row"><?php esc_html_e( 'Use rich embed messaging feature?', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
		<input name="embed_messaging_feature" type="checkbox" id="embed_messaging_feature" 
		<?php
		if ( $embed_messaging_feature == true ) {
			echo esc_attr( 'checked="checked"' ); }
		?>
		 value="1">
				<br/>
				<small>Use [LINEBREAK] to split lines.</small>                
		</fieldset></td>
	  </tr>
          
	<tr>
		<th scope="row"><?php esc_html_e( 'Send welcome message', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
		<input name="ets_memberdash_discord_send_welcome_dm" type="checkbox" id="ets_memberdash_discord_send_welcome_dm" 
		<?php
		if ( $ets_memberdash_discord_send_welcome_dm == true ) {
			echo esc_attr( 'checked="checked"' ); }
		?>
		 value="1">
		</fieldset></td>
	</tr>
	<tr>
		<th scope="row"><?php esc_html_e( 'Welcome message', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
			<?php $ets_memberdash_discord_welcome_message_value = isset( $ets_memberdash_discord_welcome_message ) ? $ets_memberdash_discord_welcome_message : ''; ?>
		<textarea class="ets_memberdash_discord_dm_textarea" name="ets_memberdash_discord_welcome_message" id="ets_memberdash_discord_welcome_message" row="25" cols="50"><?php echo esc_textarea( wp_unslash( $ets_memberdash_discord_welcome_message_value ) ); ?></textarea> 
	<br/>
	<small>Merge fields: [LD_STUDENT_NAME], [LD_STUDENT_EMAIL], [LD_COURSES], [SITE_URL], [BLOG_NAME]</small>
		</fieldset></td>
	</tr>         

	  <tr>
		<th scope="row"><?php esc_html_e( 'Retry Failed API calls', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
		<input name="retry_failed_api" type="checkbox" id="retry_failed_api" 
		<?php
		if ( $retry_failed_api == true ) {
			echo esc_attr( 'checked="checked"' ); }
		?>
		 value="1">
		</fieldset></td>
	  </tr>
	  <tr>
		<th scope="row"><?php esc_html_e( 'Don\'t kick students upon disconnect', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
		<input name="kick_upon_disconnect" type="checkbox" id="kick_upon_disconnect" 
		<?php
		if ( $kick_upon_disconnect == true ) {
			echo esc_attr( 'checked="checked"' ); }
		?>
		 value="1">
		</fieldset></td>
	  </tr>
	<tr>
		<th scope="row"><?php esc_html_e( 'How many times a failed API call should get re-try', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
			<?php $retry_api_count_value = isset( $retry_api_count ) ? $retry_api_count : 1; ?>
		<input name="ets_memberdash_retry_api_count" type="number" min="1" id="ets_memberdash_retry_api_count" value="<?php echo esc_attr( intval( $retry_api_count_value ) ); ?>">
		</fieldset></td>
	  </tr> 
	  <tr>
		<th scope="row"><?php esc_html_e( 'Set job queue concurrency', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
			<?php $set_job_cnrc_value = isset( $set_job_cnrc ) ? $set_job_cnrc : 1; ?>
		<input name="set_job_cnrc" type="number" min="1" id="set_job_cnrc" value="<?php echo esc_attr( intval( $set_job_cnrc_value ) ); ?>">
		</fieldset></td>
	  </tr>
	  <tr>
		<th scope="row"><?php esc_html_e( 'Set job queue batch size', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
			<?php $set_job_q_batch_size_value = isset( $set_job_q_batch_size ) ? $set_job_q_batch_size : 10; ?>
		<input name="set_job_q_batch_size" type="number" min="1" id="set_job_q_batch_size" value="<?php echo esc_attr( intval( $set_job_q_batch_size_value ) ); ?>">
		</fieldset></td>
	  </tr>
	<tr>
		<th scope="row"><?php esc_html_e( 'Log API calls response (For debugging purpose)', 'connect-memberdash-to-discord' ); ?></th>
		<td> <fieldset>
		<input name="log_api_res" type="checkbox" id="log_api_res" 
		<?php
		if ( $log_api_res == true ) {
			echo esc_attr( 'checked="checked"' ); }
		?>
		 value="1">
		</fieldset></td>
	  </tr>
			
	</tbody>
  </table>
  <div class="bottom-btn">
	<button type="submit" name="adv_submit" value="ets_submit" class="ets-submit ets-bg-green">
	  <?php esc_html_e( 'Save Settings', 'connect-memberdash-to-discord' ); ?>
	</button>
  </div>
</form>
