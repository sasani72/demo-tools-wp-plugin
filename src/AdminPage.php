<?php

namespace Demo;

if (!defined('ABSPATH')) exit;

class AdminPage {

    public function __construct() {
        add_action('admin_menu', [$this, 'register']);
        add_action('admin_post_save_message', [$this, 'handleForm']);
    }

    public function register() {
        add_menu_page(
            'Demo Tools',
            'Demo',
            'manage_options',
            'demo-tools',
            [$this, 'render'],
            'dashicons-admin-generic',
            80
        );
    }

    public function render() {
        $message = get_option('demo_message', '');
        $nonce = wp_create_nonce('demo_action');

        echo "<div class='wrap'>
                <h1>Demo Tools</h1>
                <form method='POST' action='" . admin_url('admin-post.php') . "'>
                    <input type='hidden' name='action' value='save_message'>
                    <input type='hidden' name='_wpnonce' value='{$nonce}'>
                    <label>Custom Message:</label><br>
                    <input type='text' name='message' value='" . esc_attr($message) . "' style='width: 300px;'>
                    <br><br>
                    <button class='button button-primary'>Save</button>
                </form>
              </div>";
    }

    public function handleForm() {
        if (
            !isset($_POST['_wpnonce']) ||
            !wp_verify_nonce($_POST['_wpnonce'], 'demo_action')
        ) {
            wp_die('Security check failed.');
        }

        $message = sanitize_text_field($_POST['message'] ?? '');
        update_option('demo_message', $message);

        wp_redirect(admin_url('admin.php?page=demo-tools&updated=1'));
        exit;
    }
}
