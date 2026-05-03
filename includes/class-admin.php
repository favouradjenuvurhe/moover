<?php

class Moover_Admin {

    public function __construct() {
        add_action('woocommerce_order_status_changed', [$this, 'send_update'], 10, 4);
    }

    public function send_update($order_id, $old_status, $new_status, $order) {
        
        $email = $order->get_billing_email();

        $message = "Your order #$order_id status changed to: $new_status";

        wp_mail($email, "Moover Update", $message);
    }
}
