<?php
/**
 * Plugin Name: Moover – Order Tracking & Delivery Manager
 * Description: Adds order tracking, shipment updates, and delivery status system for WooCommerce.
 * Version: 1.0.0
 * Author: Moover
 * License: GPL2+
 */

if (!defined('ABSPATH')) exit;

/**
 * WooCommerce check
 */
function moover_woocommerce_check() {
    if (!class_exists('WooCommerce')) {
        add_action('admin_notices', function () {
            echo '<div class="notice notice-error"><p><strong>Moover:</strong> WooCommerce is required.</p></div>';
        });
        return false;
    }
    return true;
}

if (!moover_woocommerce_check()) {
    return;
}

/**
 * Paths
 */
define('MOOVER_PATH', plugin_dir_path(__FILE__));
define('MOOVER_URL', plugin_dir_url(__FILE__));

/**
 * Includes
 */
require_once MOOVER_PATH . 'includes/class-tracking.php';
require_once MOOVER_PATH . 'includes/class-admin.php';
require_once MOOVER_PATH . 'includes/class-email.php';
require_once MOOVER_PATH . 'includes/class-rewrite.php';

/**
 * Init
 */
function moover_init() {
    new Moover_Tracking();
    new Moover_Admin();
    new Moover_Rewrite();
}
add_action('plugins_loaded', 'moover_init');

/**
 * Assets (FIXED - IMPORTANT)
 */
function moover_assets() {
    wp_enqueue_style(
        'moover-style',
        MOOVER_URL . 'assets/css/style.css',
        [],
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'moover_assets');

/**
 * Activation hook (FIXED)
 */
register_activation_hook(__FILE__, function () {
    flush_rewrite_rules();
});

/**
 * Deactivation hook (FIXED)
 */
register_deactivation_hook(__FILE__, function () {
    flush_rewrite_rules();
});
