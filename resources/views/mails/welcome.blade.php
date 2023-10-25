<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TriviaNuts</title>
    <style>
        /* Reset some default styles */
        body,
        html {
            margin: 0;
            padding: 0;
        }

        /* Set a background color */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        /* Center the email content */
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Style the header */
        .header {
            background-color: #149d9b;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Style the content */
        .content {
            background-color: #ecfeff;
            padding: 20px;
            border-radius: 5px;
        }

        /* Style the call-to-action button */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #a98921;
            color: #fff !important;
            text-decoration: none;
            border-radius: 3px;
        }

        /* Add some spacing */
        .spacer {
            height: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to {{ env('APP_NAME') }}</h1>
        </div>
        <div class="content">
            <p>Dear {{ $user }},</p>
            <p>Thank you for joining {{ env('APP_NAME') }}! We're excited to have you as a member of our community.</p>
            <p>Get ready to challenge your knowledge and have fun with our trivia quizzes.</p>
            <p>Click the button below to start playing:</p>
            <a href="{{ Route('home_page') }}" class="btn">Start Playing</a>
            <div class="spacer"></div>
            <p>If you have any questions or need assistance, don't hesitate to contact our support team.</p>
            <p>Enjoy your time on TriviaNuts!</p>
            <p>Sincerely,</p>
            <p>The {{ env('APP_NAME') }} Team</p>
        </div>
    </div>
</body>

</html>