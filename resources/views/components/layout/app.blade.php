<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dooty is a task management application.">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{--Favicon--}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/logo/site.webmanifest') }}">
        {{--Montserrat font--}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        {{--Tailwind CSS--}}
        @vite('resources/css/app.css')
        {{--Perlin Ui Library--}}
        @vite('resources/js/app.js')
        {{--Title--}}
        <title>{{ $title ?? 'HiveSpotter' }}</title>
    </head>

    <body class="overflow-x-hidden">
    {{--main--}}
    {{ $content }}

    {{--Footer--}}
    <footer>

    </footer>
    </body>
</html>
