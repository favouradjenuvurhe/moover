<?php

class Moover_Tracking {

    public function __construct() {
        add_shortcode('moover_tracking', [$this, 'shortcode']);
        add_action('template_redirect', [$this, 'handle_url']);
    }

    public function shortcode() {

        if (!class_exists('WooCommerce')) {
            return "WooCommerce is required.";
        }

        ob_start();
        include MOOVER_PATH . 'templates/tracking-page.php';
        return ob_get_clean();
    }

    public function handle_url() {

        $order_id = get_query_var('moover_order_id');
        if (!$order_id) return;

        $order_id = intval($order_id);

        if (!class_exists('WooCommerce')) {
            wp_die('WooCommerce required');
        }

        $order = wc_get_order($order_id);

        if (!$order || $order->get_id() != $order_id) {
            wp_die('Invalid tracking number');
        }

        include MOOVER_PATH . 'templates/tracking-page.php';
        exit;
    }
}
