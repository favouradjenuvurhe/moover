<?php

class Moover_Admin {

    public function __construct() {
        add_action('woocommerce_order_status_changed', [$this, 'status_update'], 10, 4);
    }

    public function status_update($order_id, $old_status, $new_status, $order) {

        if (!is_a($order, 'WC_Order')) return;

        $email = $order->get_billing_email();

        $message = "Your order #$order_id is now: " . strtoupper($new_status);

        wp_mail($email, "Moover Shipment Update", $message);
    }
}
