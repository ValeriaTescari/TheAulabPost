<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img class="logo" src="/img/logoDef.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div>
                <ul class="navbar-nav navbar-link mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.index') }}">Articoli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Scrivi alla redazione</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                        </li>
                    @else
                        @if (Auth::user()->is_writer)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('article.create') }}">Crea Articolo</a>
                            </li>
                        @endif
                        @if (Auth::user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Zona Admin</a>
                            </li>
                        @endif
                        @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('revisor.dashboard') }}">Zona Revisore</a>
                            </li>
                        @endif
                        @if (Auth::user()->is_writer)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('writer.dashboard') }}">Zona Redattore</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                        </li>
                        {{-- logout --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Gentile {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-center" title="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-to-bracket "> </i></a>
                                </li>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
            {{-- ricerca --}}
            <div class="ms-auto">
                <form class="d-flex" method="GET" action="{{ route('article.search') }}">
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
                    <input class="form-control ricerca me-2" type="search" name="query" placeholder="&#xF002 Cerca" aria-label="Search" style="font-family:Arial, FontAwesome">
                    <button title="Cerca" class="btn btn-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
</nav>
