<!DOCTYPE html>

<html>

<head>

    <title>IdeAll</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7bdd4fe0e8.js" crossorigin="anonymous"></script>
</head>

<body>
    <header></header>

    <main>
        <div class="containerIA">
            @yield('content')
        </div>
    </main>

    <footer></footer>
    
</body>

</html>

