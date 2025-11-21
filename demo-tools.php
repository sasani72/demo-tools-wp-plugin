<?php
/*
Plugin Name: Demo Tools
Description: A demo plugin showcasing admin pages, REST API, and shortcode development.
Version: 1.0.0
Author: Sasani
*/

if (!defined('ABSPATH')) exit;

require_once __DIR__ . '/src/AdminPage.php';
require_once __DIR__ . '/src/RestApi.php';
require_once __DIR__ . '/src/Shortcodes.php';

final class DemoTools {
    
    public function __construct() {
        // Init components
        new \Demo\AdminPage();
        new \Demo\RestApi();
        new \Demo\Shortcodes();
    }
}

new DemoTools();
