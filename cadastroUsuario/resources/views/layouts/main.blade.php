<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <header>
            <div class="nav">
                <h1>CRUD de Usuários</h1>
                    <div class="nav-container">
                        <ul class="nav-lista">
                            <li><a href="{{ url('/usuarios/criarUsuario') }}">Criar Usuário</a></li>
                            <li><a href="{{ url('/') }}">Listar Usuário</a></li>
                        </ul>
                    </div>
                </div>
            </header>
        @yield('content')
    </body>
</html>
