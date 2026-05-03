<?php

class Moover_Tracking {

    public function __construct() {
        add_shortcode('moover_tracking', [$this, 'tracking_page']);
    }

    public function tracking_page() {
        if (!isset($_GET['order_id'])) {
            return "Invalid tracking number.";
        }

        $order_id = intval($_GET['order_id']);
        $order = wc_get_order($order_id);

        if (!$order) return "Order not found.";

        $status = $order->get_status();

        ob_start();
        include MOOVER_PATH . 'templates/tracking-page.php';
        return ob_get_clean();
    }
}
