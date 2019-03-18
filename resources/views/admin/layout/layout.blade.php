<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <header class="admin">
        <div>
            Panneau d'administration
        </div>
        <nav class="nav">
            <a class="nav-link btn btn-primary" href="{{ route('productIndex') }}">Liste des produits</a>
            <a class="nav-link btn btn-primary" href="{{ route('productCreate') }}">Ajouter un produit</a>
            <a class="nav-link btn btn-secondary" href="{{ route('index') }}">Sortir de l'admin</a>
        </nav>
    </header>
    @yield('content')
</body>
</html>