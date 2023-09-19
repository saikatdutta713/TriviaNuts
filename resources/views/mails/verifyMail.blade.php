<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your TriviaNuts Account</title>
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


        /* Style the verification link */
        .verification-link {
            display: block;
            margin: 30px 0 20px;
            text-align: center;
            background-color: #a98921;
            color: #fff !important;
            padding: .7rem 2rem;
            text-decoration: none;
            border-radius: 3px;
            width: max-content;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Verify Your {{ env('APP_NAME') }} Account</h1>
        </div>
        <div class="content">
            <p class="message">Welcome to {{ env('APP_NAME') }}! We're thrilled to have you on board.</p>
            <p class="message">To complete your registration and start enjoying trivia quiz challenges, please click the
                button below to verify your account:</p>
            <a href="{{ $verificationUrl }}" class="verification-link">Verify Your Account</a>
            <p class="message">Once you've successfully verified your account, you can log in to {{ env('APP_NAME') }}
                and begin
                playing trivia quizzes.</p>
            <p class="message">If you didn't create an account with us or if this was not initiated by you, please
                ignore this email.</p>
            <p class="message">Thank you for choosing {{ env('APP_NAME') }}!</p>
            <p class="message">Best regards,</p>
            <p class="message">The {{ env('APP_NAME') }} Team</p>
        </div>
    </div>
</body>

</html>