<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_quote'])) {
    $name     = sanitize_text_field($_POST['name']);
    $email    = sanitize_email($_POST['email']);
    $company  = sanitize_text_field($_POST['company']);
    $quantity = intval($_POST['quantity']);
    $message  = sanitize_textarea_field($_POST['message']);

    wp_mail('you@example.com', "New Quote Request from $name", 
        "Name: $name\nEmail: $email\nCompany: $company\nQuantity: $quantity\nMessage:\n$message");

    echo "<script>alert('Quote submitted successfully.');</script>";
}
?>
