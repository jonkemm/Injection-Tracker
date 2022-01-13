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
                    <a href="https://www.patreon.com/jonkemm" target="_blank"><img src="/img/front/patreon.svg" class="w-100" alt=""></a>
                    <div class="card-body">
                        <h2>This app is free to use</h2>
                        <p>No tracking, no selling data, no adverts, nuffing.</p>
                        <h2>Support this app</h2>
                        <p>I'd just like enough for it to pay it's way, approx &pound;50 per year.</p>
                    </div>
                </div>  
            </div>
            <div class="col-sm-12">
                <h2>What a lovely story (developer ramblings)</h2>
                <p>Not that tales involving chronic illnesses are often thought of as lovely, just an expression really... Not ready for a story and just want to get on with it? <a href="{{ route('register') }}">Click here to sign up</a></p>
                <p>The developer of this web app has Multiple Sclerosis and has endured Rebif, Avonex and Copaxone. He has made his life a little easier by making a way to remove some of the thinking involved by making a website to help him track the locations of his injections via an app (like the cool kids do it these days, he says, and yes he'd love to think of himself as one bearing in mind you can be a cool kid at any age - a teacher for 15 years and not one student ever thought he was cool and he's fine with that because sometimes they admitted to learning cool things and enjoying themselves).</p>
            </div>
        </div>
</x-guest-layout>