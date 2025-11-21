<?php

namespace Demo;

if (!defined('ABSPATH')) exit;

class Shortcodes {

    public function __construct() {
        add_shortcode('demo_message', [$this, 'render']);
    }

    public function render() {
        $message = get_option('demo_message', 'Default message.');
        return "<div class='demo-message'>" . esc_html($message) . "</div>";
    }
}
