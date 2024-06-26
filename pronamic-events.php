<?php
/**
 * Plugin Name: Pronamic Events
 * Plugin URI: https://www.pronamic.eu/plugins/pronamic-events/
 * Description: This plugin add some basic Event functionality to WordPress.
 *
 * Version: 1.4.0
 * Requires at least: 3.0
 *
 * Author: Pronamic
 * Author URI: https://www.pronamic.eu/
 *
 * Text Domain: pronamic-events
 * Domain Path: /languages/
 *
 * License: GPL-2.0-or-later
 *
 * GitHub URI: https://github.com/pronamic/wp-pronamic-events
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2024 Pronamic
 * @license   GPL-2.0-or-later
 * @package   Pronamic\WpPronamicEvents
 */

/**
 * Autoload
 */
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
} elseif ( version_compare( PHP_VERSION, '5.2', '>=' ) ) {
	require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload_52.php';
}

/**
 * Create plugin
 */
global $pronamic_events_plugin;

$pronamic_events_plugin = new Pronamic_Events_Plugin( __FILE__ );
