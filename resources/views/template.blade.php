<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Condensed:700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('images/waifu.ico') }}" type="image/x-icon">
    @yield('custom_head')
</head>
<body>
    @yield('content')
</body>
</html>
