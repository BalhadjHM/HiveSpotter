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
        <button id="back-to-top" class="px-6 py-6 fixed bottom-8 right-8 bg-dark text-primary rounded-full shadow-lg border-secondary border-2 duration-300 ease-out hover:bg-secondary focus:outline-none focus:ring-0">
            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 4H5M12 20L12 8M12 8L9 11M12 8L15 11" stroke="#E4F9F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </button>
    </body>
</html>
