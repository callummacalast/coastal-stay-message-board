<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script src="https://kit.fontawesome.com/c5a3b5b538.js" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    @if (session()->has('success'))
    <div class="fixed bottom-3 right-3 bg-blue-500 text-white p-4 rounded-xl text-xs">
        <p>
            {{ session('success') }}
        </p>
    </div>
    @endif


</body>

</html>