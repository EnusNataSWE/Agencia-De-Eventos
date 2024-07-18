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