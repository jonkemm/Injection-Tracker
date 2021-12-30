<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="@yield('page_desc')">
            <meta name="keywords" content="@yield('page_keywords')">
            <title>@yield('page_title') | Injection Tracker</title>
            <!-- css stles -->
            <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
            <!-- js -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script src="{{ asset('js/site.app.js') }}" defer></script>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            
            <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
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
                @yield('page_title')
            </header>
            <div>
                {{ $slot }}
            </div>
            <x-footer>
            </x-footer>
        </div>
    </body>
</html>
