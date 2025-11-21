<?php

namespace Demo;

use WP_REST_Server;

if (!defined('ABSPATH')) exit;

class RestApi {

    public function __construct() {
        add_action('rest_api_init', [$this, 'register']);
    }

    public function register() {
        register_rest_route('v1', '/ping', [
            'methods'  => WP_REST_Server::READABLE,
            'callback' => [$this, 'ping'],
            'permission_callback' => '__return_true'
        ]);
    }

    public function ping() {
        return [
            'status'  => 'ok',
            'message' => get_option('demo_message', 'No message set yet.')
        ];
    }
}
