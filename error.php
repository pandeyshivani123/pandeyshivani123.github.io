<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        /* Basic CSS for centering and styling the message */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .message {
            text-align: center;
            padding: 20px;
            border: 2px solid #ff0000; /* Red border */
            border-radius: 5px;
            background-color: #ffe6e6; /* Light red background */
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>Message Failed to Send!</h1>
        <p>Sorry, there was an error while sending your message. Please try again later.</p>
    </div>
    <script>
        // Clear form fields after a delay
        setTimeout(function() {
            window.location.href = "index.html"; // Redirect back to the contact page
        }, 3000); // 3 seconds delay
    </script>
</body>
</html>
