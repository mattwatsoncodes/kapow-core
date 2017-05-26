<?php
/**
 * Remove dashboard widgets
 *
 * @see http://www.wpbeginner.com/wp-tutorials/how-to-remove-wordpress-dashboard-widgets/
 * @since	0.1.0
 *
 * @package kapow\kapow_core
 */

namespace kapow\kapow_core;

/**
 * Functions to remove the dashbaord widgets.
 */
class Dashboard_Widgets {

	/**
	 * Go.
	 *
	 * @since		0.1.0
	 */
	public function run() {
		add_action( 'wp_dashboard_setup', array( $this, 'kapow_core_remove_dashboard_widgets' ), 99 );
	}

	/**
	 * Remove dashbaord widgets.
	 */
	public function kapow_core_remove_dashboard_widgets() {
		global $wp_meta_boxes;

		// Welcome Panel.
		remove_action( 'welcome_panel', 'wp_welcome_panel' );

		// Normal Widgets.
		unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
		// unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts'] );
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
		unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
		unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );

		// WP Engine Widgets.
		unset( $wp_meta_boxes['dashboard']['normal']['core']['wpe_dify_news_feed'] );
	}
}
