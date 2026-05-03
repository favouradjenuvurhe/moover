<?php

class Moover_Tracking {

    public function __construct() {
        add_shortcode('moover_tracking', [$this, 'shortcode']);
        add_action('template_redirect', [$this, 'handle_url']);
    }

    // SHORTCODE SUPPORT
    public function shortcode() {
        ob_start();
        include MOOVER_PATH . 'templates/tracking-page.php';
        return ob_get_clean();
    }

    // CLEAN URL SUPPORT
    public function handle_url() {
        $order_id = get_query_var('moover_order_id');

        if (!$order_id) return;

        $order = wc_get_order($order_id);

        if (!$order) {
            wp_die('Order not found.');
        }

        include MOOVER_PATH . 'templates/tracking-page.php';
        exit;
    }
}
