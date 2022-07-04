<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Primary Meta Tags -->
    <title>El HAYAT School | École privée Oran</title>
    <meta name="title" content="El HAYAT School | École privée Oran">
    <meta name="description"
        content="EL HAYAT School est un établissement scolaire privé, il assure un enseignement général aux apprenants des trois cycles ( primaire, moyen et secondaire )">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://elhayatschool.com/">
    <meta property="og:title" content="El HAYAT School | École privée Oran">
    <meta property="og:description"
        content="EL HAYAT School est un établissement scolaire privé, il assure un enseignement général aux apprenants des trois cycles ( primaire, moyen et secondaire )">
    <meta property="og:image"
        content="{{ asset('assets/1.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://elhayatschool.com/">
    <meta property="twitter:title" content="El HAYAT School | École privée Oran">
    <meta property="twitter:description"
        content="EL HAYAT School est un établissement scolaire privé, il assure un enseignement général aux apprenants des trois cycles ( primaire, moyen et secondaire )">
    <meta property="twitter:image"
        content="{{ asset('assets/1.jpg') }}">


</head>

<body class="relative min-h-screen max-w-screen overflow-x-clip bg-white">

    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

    <header>
        @include('sections.menu')
    </header>

    <main>

        @yield('content')

    </main>

    <footer class="bg-slate-100 mt-28">

        @include('sections.footer')

    </footer>
</body>

</html>
