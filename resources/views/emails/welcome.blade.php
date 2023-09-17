<!DOCTYPE html>
<html>

<head>
    <title>Welcome to {{ env('APP_NAME') }}</title>
</head>

<body>
    <p>Welcome to {{ env('APP_NAME') }}, {{ $user->name }}!</p>
    <p>Thank you for registering with us.</p>
</body>

</html>