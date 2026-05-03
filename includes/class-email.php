<?php

class Moover_Email {

    public static function send($to, $subject, $message) {
        wp_mail(
            sanitize_email($to),
            sanitize_text_field($subject),
            wp_kses_post($message)
        );
    }
}
