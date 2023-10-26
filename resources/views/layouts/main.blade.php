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
            <img src="" alt="">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/create" class="nav-link">Criar</a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link">Cadastar</a>
            </li>
            <li class="nav-item">
                <a href="/calendar" class="nav-link">Calendário</a>
            </li>
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="/equip" class="nav-link">Equipamentos</a>
            </li>
            <li class="nav-item">
                <a href="/rooms" class="nav-link">Salas</a>
            </li>
        </ul>
        </div>
       </nav>
    </header>
@yield('content')
<footer>
    <p>Reserva Unifil &copy; 2023</p>
</footer>
</body>
</html>
