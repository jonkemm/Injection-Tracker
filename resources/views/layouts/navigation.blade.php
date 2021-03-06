
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand ml-2" href="/">Injection Tracker</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse p-2" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="{{ route('contact') }}">Contact</a>
                    </div>
@auth
                <div class="navbar-nav ml-auto">
                    <a href="{{ route('locations') }}">
                        <button type="button" class="btn btn-sm btn-warning">Locations</button>
                    </a>
                </div>
@endauth
                </div>
                <div class="ml-auto my-2 my-lg-0">
@auth
                    <a href="{{ route('profile') }}">
@if( Auth::user()->avatar )
                    <img src="{{ Auth::user()->avatar }}" class="avatar" alt="Avatar" />
@else
                {{Auth::user()->name}}
@endif
                    </a>
@else
                    <a href="{{ route('login') }}">Log in</a>
@if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
@endif
@endauth
                </div>
            </nav>
            <div class="nav-stripe bg-warning"></div>
            <div class="subnav bg-gradient"></div>