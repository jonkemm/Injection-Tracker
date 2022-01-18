@section('page_title'){{ "Free Injection Tracker Web App - Own your injections" }}
@endsection @section('page_desc'){{ "Injection tracker is for those of us who wish to accurately track their injections and rate the 'experience' for each one. The idea is that over time you can get a better idea of where your (extra) sore bits are." }}@endsection
@section('page_keywords'){{"injection, tracking, avonex, copaxone, rebif"}}@endsection
@section('og'){{'<meta property="og:image" content="http://injection-tracker.com/img/logo.svg">
<meta property="og:image:type" content="image/svg">
<meta property="og:image:width" content="200">
<meta property="og:image:height" content="500">'}}@endsection

<x-guest-layout>
        <div class="row">
                <div class="col-sm-9">
                    <h1>Own your injections.</h1>
                    <p>@yield('page_desc')</p>
                </div>
                <div class="col-sm-3">
                    <p>Let's go!</p>
                    @auth
                    <p><a href="{{ route('locations') }} "  class="btn btn-warning" id="my-button">View your locations</a></p>
                    @else
                    <a href="{{route('register')}}" id="my-button" class="btn btn-success">Register</a>
                    @endauth
                </div>
        </div>
@include('components.how-to')
        <div class="row">
            <div class="col-sm-6">
@include('components.features')
            </div>
            <div class="col-sm-6">
                <div class="card vertical">
@include('components.price')
                </div>
            </div>
            <div class="col-sm-12 row">
                <h2>Ready?</h2>
                @auth
                <p><a href="{{ route('locations') }} "  class="btn btn-warning" id="my-button">View your locations</a></p>
                @else
                <div class="row mb-3">
                    <p>
                        <a href="{{route('register')}}" id="my-button1" class="btn btn-primary w-100 m-0">Register</a>
                    </p>
                </div>
                @endauth
            </div>
            <div class="col-sm-12">
@include('components.about')
            </div>
            <div class="col-sm-12 row">
                <h2>How about now?</h2>
                @auth
                <p><a href="{{ route('locations') }} "  class="btn btn-warning" id="my-button">View your locations</a></p>
                @else
                <div class="row mb-3">
                    <p>
                        <a href="{{route('register')}}" id="my-button1" class="btn btn-primary w-100 m-0">Register</a>
                    </p>
                </div>
                @endauth
            </div>
        </div>
</x-guest-layout>