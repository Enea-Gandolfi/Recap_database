<footer class="py-2 ">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
                  <a href="{{route('home')}}" class="nav-link px-2 ">Home</a>
            </li>
            @guest
            <li class="nav-item">
                  <a class="nav-link " href="{{route('login')}}">Accedi</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link " href="{{route('register')}}">Registrati</a>
            </li>
            
            @endguest
            
            @auth
            
            
            <li class="nav-item">
                  <a class="nav-link" href="{{ route('dashboard') }}">Dashboard di:{{Auth::user()->name}}</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link " href="#" onclick="event.preventDefault(); document.querySelector('#user-logout').submit();">Logout</a>
            </li>
            <form action="{{route('logout')}}" method="POST" class="d-none" id="user-logout">
                  @csrf
            </form>
            @endauth
      </ul>
      <p class="text-center text-light">© {{ date('Y') }} VGL</p>
</footer>
