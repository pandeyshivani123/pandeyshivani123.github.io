<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
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
            border: 2px solid #00cc00; /* Green border */
            border-radius: 5px;
            background-color: #f0f8ff; /* Light blue background */
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>Message Sent Successfully!</h1>
        <p>Thank you for contacting us. We'll get back to you shortly.</p>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = "index.html";
        }, 3000); // 3 seconds delay
    </script>
</body>
</html>
