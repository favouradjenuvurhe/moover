<?php
/**
 * Plugin Name: Moover – Order Tracking & Delivery Manager
 * Description: Adds order tracking, shipment updates, and delivery status system for WooCommerce.
 * Version: 1.0.0
 * Author: Moover
 * License: GPL2+
 */

if (!defined('ABSPATH')) exit;

define('MOOVER_PATH', plugin_dir_path(__FILE__));
define('MOOVER_URL', plugin_dir_url(__FILE__));

// Includes
require_once MOOVER_PATH . 'includes/class-tracking.php';
require_once MOOVER_PATH . 'includes/class-admin.php';
require_once MOOVER_PATH . 'includes/class-email.php';
require_once MOOVER_PATH . 'includes/class-rewrite.php';

function moover_init() {
    new Moover_Tracking();
    new Moover_Admin();
    new Moover_Rewrite();
}
add_action('plugins_loaded', 'moover_init');
