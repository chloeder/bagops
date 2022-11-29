<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/templates/dist/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/templates/dist/assets/css/app.css">
    <link rel="stylesheet" href="/templates/dist/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="/img/bagops.png" type="image/x-icon">
</head>

<body>
    <div id="auth">
        @yield('content')
    </div>
</body>

</html>
