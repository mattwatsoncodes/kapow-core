<?php
/**
 * WPML Set Content Langauge
 *
 * Set the server content language header.
 *
 * @since	0.1.0
 *
 * @package kapow\kapow_core
 */

/**
 * HTTP Headers
 *
 * @param array $headers The HTTP Headers.
 * @return array         The modified HTTP Headers
 */
function kapow_core_wpml_set_content_langauge( $headers ) {

	if ( ! is_admin() && defined( 'ICL_LANGUAGE_CODE' ) ) {
		$headers['Content-Language'] = ICL_LANGUAGE_CODE;
	}

	return $headers;
}
add_filter( 'wp_headers', 'kapow_core_wpml_set_content_langauge', 0 );
