<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TheIdeAll.com</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    <div class="relative ">
        @if (Route::has('login'))
        <div class="op-0 right-0">
            <nav class="navAccueil">
                <img src="/images/logoBlanc.png" class="logoNav" />
                <span>Dashboard</span>
            @auth
            @else
                <a href="{{ route('login') }}" class="text-sm text-white-700 dark:text-white-500 underline">Connexion</a>
            @endauth
            </nav>
        </div>
        @endif
        <div class="accueil1img"><img src="/images/img_accueil.svg" alt="ma" class="imgSVGAccueil"></div>
        <div class="accueil1">
            <h1>Bienvenue sur votre Dashboard</h1>
            <p><a href="{{ route('login') }}"><strong>Connectez-vous</strong></a> et retrouvez toutes vos dernières actualités !</p>
        </div>
    </div>
</body>

</html>