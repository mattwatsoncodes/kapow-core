<?php
/**
 * Login One User Instance
 *
 * Only allow one instance of a user to be logged in at any one time.
 *
 * @since	0.1.0
 *
 * @package kapow\kapow_core
 */

/**
 * Only allow one user to be logged on at a time.
 */
function kapow_core_login_one_user_instance() {
	global $sessions;

	// Only allow one user to be logged in at a time.
	$sessions = WP_Session_Tokens::get_instance( get_current_user_id() );
	$sessions->destroy_others( wp_get_session_token() );
}
add_action( 'setup_theme', 'kapow_core_login_one_user_instance', 0 );
