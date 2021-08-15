<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/b3478a18b6.js" crossorigin="anonymous"></script>
</head>
<body class="container bg-black text-white">
    <x-nav/>
    {{ $slot }}
</body>
</html>
