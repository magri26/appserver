<header>
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/logo.png')}}" width="30" height="30" alt="" loading="lazy">
            TobyLovers
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav navbar-center">
                <li class="nav-item  {{request()->routeIs('home') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{request()->routeIs('nosotros') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('nosotros')}}">Nosotros</a>
                </li>
                <li class="nav-item {{request()->routeIs('miembros') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('miembros')}}">Miembros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reglas Servidor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sourcebans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Estadísticas Servidor</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
