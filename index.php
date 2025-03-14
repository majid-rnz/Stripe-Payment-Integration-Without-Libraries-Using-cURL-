<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment With Stripe</title>
    <!-- Include Stripe.js library -->
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        /* Style for error messages */
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Payment Page</h1>
    <!-- Payment form that submits to process_payment.php -->
    <form id="payment-form" action="process_payment.php" method="POST">
        <div>
            <!-- Label for card information -->
            <label for="card-element">Card Information:</label>
            <!-- Container where the Stripe card element will be mounted -->
            <div id="card-element" style="width: 300px; height: 40px;"></div>
            <!-- Placeholder for displaying errors related to card input -->
            <div id="card-errors" class="error" role="alert"></div>
        </div>
        <!-- Submit button for initiating payment -->
        <button type="submit" id="submit-button">Pay</button>
    </form>

    <script>
        // Initialize Stripe.js with the publishable key
        const stripe = Stripe('YourPublicKeyHere');
        const elements = stripe.elements(); // Create an instance of Stripe Elements
        const cardElement = elements.create('card'); // Create a card element
        cardElement.mount('#card-element'); // Mount the card element to the DOM

        // Add an event listener to handle form submission
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault(); // Prevent the default form submission behavior
            document.getElementById('submit-button').disabled = true; // Disable the submit button to prevent multiple submissions

            // Create a token using the card element
            const { token, error } = await stripe.createToken(cardElement);

            if (error) {
                // If there's an error, display it in the error container
                document.getElementById('card-errors').textContent = error.message;
                document.getElementById('submit-button').disabled = false; // Re-enable the submit button
            } else {
                // If successful, create a hidden input field to store the token and submit the form
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput); // Append the token to the form
                form.submit(); // Submit the form to the server
            }
        });
    </script>
</body>
</html>
