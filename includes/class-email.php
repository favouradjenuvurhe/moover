<?php

class Moover_Email {

    public static function send($to, $subject, $message) {
        wp_mail($to, $subject, $message);
    }
}
