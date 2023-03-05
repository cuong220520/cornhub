<?php
/**
 * Theme Quiet Skin.
 *
 * @package admin\class
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

/**
 * Quiet Skin for Theme Installer.
 */
class WPSCORE_Theme_Quiet_Skin extends Theme_Installer_Skin {
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
