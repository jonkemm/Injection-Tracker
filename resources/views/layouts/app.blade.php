<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}" />
        <title>@yield('page_title') | Injection Tracker</title>
        <!-- css stles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- js -->
        <script src="{{ asset('js/site.app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" defer integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" defer integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>          
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js" defer></script>
        <script>
            function addDarkmodeWidget() {
                new Darkmode().showWidget();
            }
            window.addEventListener('load', addDarkmodeWidget);
        </script>
        <link rel=”icon” type="images" href="/img/favicon.ico" />
    </head>
    <body>
        <div class="container">
                @include('layouts.navigation')
                <!-- Page Heading -->
                <header>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
@yield('breadcrumbs')
                            <li class="breadcrumb-item active" aria-current="page">@yield('page_title')</li>
                        </ol>
                    </nav>
                </header>
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
                <x-footer>
                </x-footer>
        </div>
    </body>
</html>
