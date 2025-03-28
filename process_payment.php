<?php
// Stripe API configuration
$secretKey = 'sk_test_YourSecretKeyHere'; // Secret key for authenticating with Stripe API
$apiUrl = 'https://api.stripe.com/v1/charges'; // Endpoint for creating charges in Stripe

// Check if a Stripe token is submitted via POST request
if (isset($_POST['stripeToken'])) {
    $token = $_POST['stripeToken']; // Retrieve the token generated by Stripe.js

    $amount = 1000; // Amount to charge in cents (e.g., $10.00)
    $currency = 'usd'; // Currency code (USD in this case)

    // Data payload to send to Stripe API
    $data = [
        'amount' => $amount, // Amount in cents
        'currency' => $currency, // Currency
        'description' => 'Payment description', // Description of the payment
        'source' => $token, // Token representing the payment source (e.g., credit card)
    ];

    // Initialize cURL session to communicate with Stripe API
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
    curl_setopt($ch, CURLOPT_POST, true); // Use POST method
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Set the POST data
    curl_setopt($ch, CURLOPT_USERPWD, $secretKey . ':'); // Authenticate using the secret key
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']); // Set the content type header

    // Execute the cURL request and capture the response
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get the HTTP status code
    curl_close($ch); // Close the cURL session

    // Check if the HTTP response code indicates success (200 OK)
    if ($httpCode === 200) {
        $charge = json_decode($response, true); // Decode the JSON response into an associative array

        // Check if the charge status is "succeeded"
        if ($charge['status'] === 'succeeded') {
            echo "Payment was successful."; // Payment succeeded message
        } else {
            echo "An error occurred during payment."; // Payment failed message
        }
    } else {
        // Handle API connection errors
        echo "An error occurred while connecting to the Stripe API: " . $response; // Error message with API response
    }
} else {
    // Handle missing token error
    echo "No payment token provided."; // Message when no token is submitted
}
?>
