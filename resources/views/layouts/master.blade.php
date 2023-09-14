<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
</head>

<body>
<div  class="container">
   

    <h1 class="mt-4">Laravel 101</h1>
    <ul class="nav justify-content-center">

        <li class="nav-item">
            <a href="/contact-us" class="nav-link">Contactez-nous</a>
        </li>
        <li class="nav-item">
            <a href="/About" class="nav-link">About</a>
        </li>
        <li class="nav-item">
            <a href="/articles/" class="nav-link">Articles</a>
        </li>
        <li class="nav-item">
            <a href="/articles/create/" class="nav-link">Create</a>
        </li>
        @guest
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Créer un compte</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>
        @endguest

        @auth
            <li class="nav-item">            
                <a class="nav-link" href="{{ route('profile') }}">Votre profil</a>
            </li>                
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input class="nav-link" type="submit" value="Se déconnecter">
            </form>
        @endauth
    </ul>

    @include('messages.success')
    @yield('content')
</div>
</body>

</html>
