<header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
        <a href="" class="navbar-brand">
            <img src="{{ asset('img/logo.svg') }}" alt="MovieStar" id="logo">
            <span id="moviestar-title">MovieStar</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
            <input type="search" name="q" id="search" class="form-control mr-sm-2" placeholder="Buscar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
            </button>                
        </form>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a href="" class="nav-link">Entrar / Cadastrar</a>
                    </li>                
                @else
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="far fa-plus-square"></i> Incluir Filme
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Meus Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link bold">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Sair</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>