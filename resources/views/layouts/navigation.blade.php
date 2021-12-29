        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand ml-2" href="/">Injection Tracker</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{ route('features') }}">Features</a>
                    <a class="nav-item nav-link" href="{{ route('howto') }}">How to</a>
                </div>
                @auth
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{ route('locations') }}">Locations</a>
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
        <div class="subnav bg-gradient">j</div>