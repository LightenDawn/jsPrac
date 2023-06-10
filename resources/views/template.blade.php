<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Condensed:700&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('images/waifu.ico') }}" type="image/x-icon">
    {{-- bootstrap section --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    {{-- jquery section --}}
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    @yield('custom_head')
</head>

<body>
    @yield('content')
</body>

</html>
