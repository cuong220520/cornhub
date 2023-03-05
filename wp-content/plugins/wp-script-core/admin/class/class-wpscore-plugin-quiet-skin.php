<?php
/**
 * Plugin Quiet Skin.
 *
 * @package admin\class
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

/**
 * Quiet Skin for Plugin Installer.
 */
class WPSCORE_Plugin_Quiet_Skin extends Plugin_Installer_Skin {
	/**
	 * Feedback function.
	 *
	 * @param string $string The string to output.
	 * @param array  ...$args The arguments to output.
	 * @return void
	 */
	public function feedback( $string, ...$args ) {
		// just keep it quiet.
	}
}
