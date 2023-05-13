<nav class="navbar navbar-expand-lg bg-dark p-3 navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('homepage') }}">Gaming Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Route::is('homepage')) active fw-bold @endif"  href="{{ route('homepage') }}">Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link @if(Route::is('game.create')) active fw-bold @endif"  href="{{ route('game.create') }}">Game DB add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::is('console.create')) active fw-bold @endif"  href="{{ route('console.create') }}">Console DB add</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link @if(Route::is('game.index')) active fw-bold @endif"  href="{{ route('game.index') }}">Games DataBase</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link @if(Route::is('game.indexSlider')) active fw-bold @endif"  href="{{ route('game.indexSlider') }}">Games DataBase Slider</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('console.index') }}">Console DataBase</a>
          </li>
          <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link @if(Route::is('chi-siamo.contacts')) active fw-bold @endif"  href="{{ route('chi-siamo.contacts') }}">Contacts</a>
              </li>
              <li class="nav-item">
            <a class="nav-link @if(Route::is('chi-siamo.index')) active fw-bold @endif"  href="{{ route('chi-siamo.index') }} ">About us</a>
          </li>
          @auth

            <li class="nav-item dropdown px-5 mx-5">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bentornat* {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Profilo</a></li>
                    <li><hr class="dropdown-divider"></li>
                    {{-- <li><a class="dropdown-item" href="{{ route('password.update') }}">Reset password</a></li>
                    <li><hr class="dropdown-divider"></li> --}}
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                    <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf</form>
                    @else
                    <li class="nav-item dropdown px-5 mx-5">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenut* Ospite
                          </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        <li><hr class="dropdown-divider"></li>
            @endauth
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
