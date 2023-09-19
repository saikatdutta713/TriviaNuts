<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TriviaNuts Login Verification</title>
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
            background-color: #159e9c;
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

        /* Style the OTP code */
        .otp-code {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #a98921 !important;
        }

        /* Style the note */
        .note {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>OTP for {{ env('APP_NAME') }} account login </h1>
        </div>
        <div class="content">
            <p class="message">Hello {{ $user }},</p>
            <p class="message">
                You are just one step away from logging in to your {{ env('APP_NAME') }} account.
                Please use the following One-Time Password (OTP) to verify your
                identity:
            </p>
            <span class="otp-code">[{{ " ".$otp." " }}]</span>
            <p class="note">
                Please enter this OTP on the {{ env('APP_NAME') }} OTP box to access your
                account.
            </p>
            <p class="message">
                If you didn't request this OTP or are having trouble, please contact
                our support team.
            </p>
            <p class="message">Best regards,</p>
            <p class="message">The {{ env('APP_NAME') }} Team</p>
        </div>
    </div>
</body>

</html>