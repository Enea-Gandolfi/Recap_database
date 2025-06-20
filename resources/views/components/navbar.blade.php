<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">VGL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between m-0" id="navbarNav">
            <ul class="navbar-nav">
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('game.index') }}">Libreria giochi</a>
                  </li>
                  @auth
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('game.create') }}">Aggiungi giochi</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard di:{{Auth::user()->name}}</a>
                  </li>
                  @endauth
            </ul>
            
            <ul class="navbar-nav">
                  @guest
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                  </li>
                  @endguest
                  @auth

                  <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('user-logout').submit();">Logout</a>
                  </li>
                  <form id="user-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                  </form>
                  @endauth
            </ul>
      </div>
</div>
</nav>
