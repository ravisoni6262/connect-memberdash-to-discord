<?php
/**
 * To check settings values saved or not
 *
 * @param NONE
 * @return BOOL $status
 */
function memberdash_discord_check_saved_settings_status() {
	$ets_memberdash_discord_client_id     = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_client_id' ) ) );
	$ets_memberdash_discord_client_secret = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_client_secret' ) ) );
	$ets_memberdash_discord_bot_token     = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_bot_token' ) ) );
	$ets_memberdash_discord_redirect_url  = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_redirect_url' ) ) );
	$ets_memberdash_discord_server_id     = sanitize_text_field( trim( get_option( 'ets_memberdash_discord_server_id' ) ) );

	if ( $ets_memberdash_discord_client_id && $ets_memberdash_discord_client_secret && $ets_memberdash_discord_bot_token && $ets_memberdash_discord_redirect_url && $ets_memberdash_discord_server_id ) {
			$status = true;
	} else {
			$status = false;
	}

	return $status;
}

/**
 * Get current screen URL
 *
 * @param NONE
 * @return STRING $url
 */
function ets_memberdash_discord_get_current_screen_url() {
	$parts           = wp_parse_url( home_url() );
	$current_uri = "{$parts['scheme']}://{$parts['host']}" . ( isset( $parts['port'] ) ? ':' . $parts['port'] : '' ) . add_query_arg( null, null );
	return $current_uri;
}

/**
 * Get WP Pages list
 * 
 * @param INT $ets_memberdash_discord_redirect_page_id 
 * @return STRING $options
 */
function ets_memberdash_discord_pages_list( $ets_memberdash_discord_redirect_page_id ) {
	$args = array(
		'sort_order' => 'asc',
		'sort_column' => 'post_title',
		'hierarchical' => 1,
		'exclude' => '',
		'include' => '',
		'meta_key' => '',
		'meta_value' => '',
		'exclude_tree' => '',
		'number' => '',
		'offset' => 0,
		'post_type' => 'page',
		'post_status' => 'publish' 
	);
	$pages = get_pages( $args );
	$options = '<option value="" disabled>-</option>';
	foreach ( $pages as $page ) { 
		$selected = ( esc_attr( $page->ID ) === $ets_memberdash_discord_redirect_page_id  ) ? ' selected="selected"' : '';
		$options .= '<option data-page-url="' . ets_get_memberdash_discord_formated_discord_redirect_url( $page->ID ) . '" value="' . esc_attr( $page->ID ) . '" ' . $selected . '> ' . $page->post_title . ' </option>';
	}
	return $options;
}

/**
 * Formatted the redirect url
 *
 * @param INT $page_id The page ID.
 * 
 * @return VOID
 */

function ets_get_memberdash_discord_formated_discord_redirect_url( $page_id ) {
    $url = esc_url( get_permalink( $page_id ) );
    
	$parsed = parse_url( $url, PHP_URL_QUERY );
	if ( $parsed === null ) {
		return $url .= '?via=connect-memberdash-discord-addon';
	} else {
		if ( stristr( $url, 'via=connect-memberdash-discord-addon' ) !== false ) {
			return $url;
		} else {
			return $url .= '&via=connect-memberdash-discord-addon';
		}
	}
}