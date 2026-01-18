<?php
/**
 * Casemate Custom functions and definitions
 */

function casemate_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'casemate_setup');

function casemate_scripts()
{
    // We append the main CSS file
    wp_enqueue_style('casemate-style', get_stylesheet_uri());

    // External scripts (Tailwind, FontAwesome, AOS are handled in header.php for speed as requested)
}
add_action('wp_enqueue_scripts', 'casemate_scripts');

/**
 * Handle AJAX Subscription
 */
function handle_casemate_subscription()
{
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';

    if (empty($email) || !is_email($email)) {
        wp_send_json_error(['message' => 'Invalid email address.']);
    }

    // In a real WP scenario, we might save this to a newsletter plugin or DB
    // For this migration, we'll simulate success like in the original logic

    // Simulate a small delay for premium feel
    usleep(500000);

    wp_send_json_success(['message' => 'Welcome to the family! Check your inbox soon.']);
}
add_action('wp_ajax_subscribe', 'handle_casemate_subscription');
add_action('wp_ajax_nopriv_subscribe', 'handle_casemate_subscription');
