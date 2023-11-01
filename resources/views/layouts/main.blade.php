<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
       <nav class="navbar navbar-expand-lg vanbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
            <img src="img\logo-unifil.svg" alt="">
        </a>
        <ul class="navbar-nav">
            </li>
            @guest
            <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link">Cadastar</a>
            @endguest
            @auth
            </li>
            <li class="nav-item">
                <a href="/calendar" class="nav-link">Calendário</a>
            </li>
            <li class="nav-item">
                <a href="/equip" class="nav-link">Equipamentos</a>
            </li>
            <li class="nav-item">
                <a href="/events/room" class="nav-link">Salas</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                @csrf
                <a href="/logout"
                class="nav-libk"
                onclick="event.preventDefault();
                this.closest('form').submit();"
                >Logout
                </a>
                </form>
            </li>
            @endauth
        </ul>
        </div>
       </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
<footer>
    <p>Reserva Unifil &copy; 2023</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
