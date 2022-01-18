<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="@yield('page_desc')">
            <meta name="keywords" content="@yield('page_keywords')">
            <title>@yield('page_title') | Injection Tracker</title>
            <link rel=”icon” type="images" href="/img/favicon.ico" />
            <!-- css stles -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" >
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
            <link rel="stylesheet" href="{{ asset('css/main.css') }}?id=1" />
            <!-- js -->
            <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" defer integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" defer integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>          
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" defer integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js" defer></script>
            <script src="{{ asset('js/site.app.js') }}" defer></script>
            <script>
                function addDarkmodeWidget() {
                    new Darkmode().showWidget();
                }
                window.addEventListener('load', addDarkmodeWidget);
            </script>
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
            <main>
                {{ $slot }}
            </main>
            <x-footer>
            </x-footer>
        </div>
    </body>
</html>
