<div class="col1flex">
    <img src="/images/logoJaune.png" class="logo" alt="logo"/>
    <div class="retourAccueil">
    
    </div>
    <div class="liensSidebar">
    
@yield('sidebarleft')
    </div>
@guest
    @if (Route::has('login'))
                            @endif
    @else
    <div class="endSidebar" aria-labelledby="navbarDropdown">
        <a class="logoutSidebar" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
            {{ __('Déconnexion') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <span>{{ Auth::user()->firstname }}</span>
    </div>
    @endguest
</div>