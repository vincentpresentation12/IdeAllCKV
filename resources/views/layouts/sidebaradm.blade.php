<div class="col1flex">
    <img src="/images/logoJaune.png" class="logo" alt="logo"/>
    <br/>

    <a href="/admin" class="rediraccueil">Retour à l'accueil</a>
    
@yield('sidebarleft')

@guest
    @if (Route::has('login'))
                            @endif
    @else
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
            {{ __('Déconnexion') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    @endguest
</div>