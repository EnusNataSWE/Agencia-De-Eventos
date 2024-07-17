<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/style.css">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!--Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="{{route('index')}}" class="navbar-brand">
                    <img src="/img/logo.jpg" alt="Agencia De Eventos">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('create')}}" class="nav-link">Criar Evento</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a href="{{route('login')}}" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('register')}}" class="nav-link">Cadastrar</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();
                                                                                this.closest('form').submit();">sair
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
                @if (Session()->has('success'))
                    <p class="session-message">
                        {{Session('success')}}
                    </p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>@copyright {{ date('Y') }} Agencia de eventos</p>
    </footer>
    <!--Ion icon-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!--Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>