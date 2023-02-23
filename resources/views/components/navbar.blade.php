<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Il Corriere Del Tricheco</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route("addArticle")}}">Aggiungi un Articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route("allArticles")}}">Tutti gli Articoli</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                  <li><a class="dropdown-item" href="{{route("categoryFilter", compact("category"))}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Ciao! {{Auth::user()->name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
            @endauth
            @guest
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("login")}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("register")}}">Register</a>
            </li>                
            @endguest

        </ul>
      </div>
    </div>
  </nav>