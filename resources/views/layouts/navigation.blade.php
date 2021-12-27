
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="/">Injection Tracker</a>
                <div class="ml-auto my-2 my-lg-0">
                    <div>
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

                </div>
            </div>
        </nav>


        <nav class="navbar sub-nav navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">           
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}">Introduction</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('howto') }}">How to use</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('features') }}">Features</a>
                        </li>
                    </ul>
                    @auth
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ route('locations') }}">Locations</a>
                        </li>
                    </ul>   
                    @endauth     
                </div>
            </div>
        </nav>