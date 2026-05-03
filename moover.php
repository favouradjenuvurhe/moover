<?php
/**
 * Plugin Name: Moover – Order Tracking & Delivery Manager
 * Description: Add order tracking and delivery status updates for WooCommerce.
 * Version: 1.0.0
 * Author: Favour Adjenuvurhe
 * License: GPL2
 */

if (!defined('ABSPATH')) exit;

// Define plugin path
define('MOOVER_PATH', plugin_dir_path(__FILE__));

// Include core files
require_once MOOVER_PATH . 'includes/class-tracking.php';
require_once MOOVER_PATH . 'includes/class-admin.php';
require_once MOOVER_PATH . 'includes/class-email.php';

// Init plugin
function moover_init() {
    new Moover_Tracking();
    new Moover_Admin();
}
add_action('plugins_loaded', 'moover_init');
