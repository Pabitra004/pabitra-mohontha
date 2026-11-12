<?php
 
function pabitra_portfolio_handle_contact() {
    if (!isset($_POST['contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['contact_nonce'])), 'pabitra_portfolio_contact')) {
        wp_die('Security verification failed.');
    }
 
    $name = isset($_POST['contact_name']) ? sanitize_text_field(wp_unslash($_POST['contact_name'])) : '';
    $sender_email = isset($_POST['contact_sender_email']) ? sanitize_email(wp_unslash($_POST['contact_sender_email'])) : '';
    $project_type = isset($_POST['contact_project_type']) ? sanitize_text_field(wp_unslash($_POST['contact_project_type'])) : '';
    $message = isset($_POST['contact_message']) ? sanitize_textarea_field(wp_unslash($_POST['contact_message'])) : '';
 
    if (!$name || !is_email($sender_email) || !$message) {
        wp_safe_redirect(add_query_arg('contact', 'invalid', home_url('/#contact')));
        exit;
    }
 
    $recipient = get_field('contact_email', 'option');
    if (!$recipient || !is_email($recipient)) {
        $recipient = get_option('admin_email');
    }
 
    $subject = 'Portfolio enquiry: ' . $project_type;
    $body = "Name: {$name}\nEmail: {$sender_email}\nProject type: {$project_type}\n\nMessage:\n{$message}";
    $headers = array('Reply-To: ' . $name . ' <' . $sender_email . '>');
 
    $sent = wp_mail($recipient, $subject, $body, $headers);
 
    wp_safe_redirect(add_query_arg('contact', $sent ? 'sent' : 'failed', home_url('/#contact')));
    exit;
}
add_action('admin_post_nopriv_pabitra_portfolio_contact', 'pabitra_portfolio_handle_contact');
add_action('admin_post_pabitra_portfolio_contact', 'pabitra_portfolio_handle_contact');