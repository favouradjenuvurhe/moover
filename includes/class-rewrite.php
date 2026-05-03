<?php

class Moover_Rewrite {

    public function __construct() {
        add_action('init', [$this, 'add_rewrite_rules']);
        add_filter('query_vars', [$this, 'query_vars']);
    }

    public function add_rewrite_rules() {
        add_rewrite_rule(
            '^moover/track/([0-9]+)/?$',
            'index.php?moover_order_id=$matches[1]',
            'top'
        );
    }

    public function query_vars($vars) {
        $vars[] = 'moover_order_id';
        return $vars;
    }
}
