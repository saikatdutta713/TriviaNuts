<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
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

    /* Style the reset link */
    .reset-link {
      display: block;
      margin-top: 20px;
      text-align: center;
      background-color: #a98921;
      color: #fff !important;
      padding: 0.8rem 2rem;
      width: max-content;
      text-decoration: none;
      border-radius: 3px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1>Reset Password</h1>
    </div>
    <div class="content">
      <p>Dear {{ $user }},</p>
      <p>
        We received a request to reset your password for your {{ env('APP_NAME') }}
        account.
      </p>
      <p>To reset your password, please click the button below:</p>
      <a href="{{ $link }}" class="reset-link">Reset Password</a>
      <p>
        If you didn't request a password reset or believe this email was sent
        in error, you can safely ignore it.
      </p>
      <p>Thank you for using {{ env('APP_NAME') }}!</p>
      <p>Sincerely,</p>
      <p>The {{ env('APP_NAME') }} Team</p>
    </div>
  </div>
</body>

</html>