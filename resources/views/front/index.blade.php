@section('page_title'){{ "Free Injection Tracker Web App - Own your injections" }}
@endsection @section('page_desc'){{ "Injection tracker is for those of us who wish to track their injections and rate the 'experience' for each one. The idea is that over time you can get a better idea of where your (extra) sore bits are." }}@endsection
@section('page_keywords'){{"injection, tracking, avonex, copaxone, rebif"}}@endsection

<x-guest-layout>
            <div class="row align-items-start">
                <div class="col">
                    <p>@yield('page_desc')</p>
                    <p>Let's go!</p>
                    @auth
                    <p><a href="{{ route('locations') }} "  class="btn btn-success">View your locations</a></p>
                    @else
                    <ul class="get-started">
                        <li><a href="{{route('register')}}" id="my_button" class="btn btn-success">Register</a></li>
                        <li><a href="{{route('login')}}" class="btn btn-info">Login</a></li>
                    </ul>
                    @endauth
                    <img src="/img/thigh-front-2.png" style="width:100%" alt="List of injection sites" >
                </div>
                <div class="col">
                    <h2>What a lovely story (developer ramblings)</h2>
                    <p>Not that tales involving chronic illnesses are often thought of as lovely, just an expression really... Not ready for a story and just want to get on with it? <a href="{{ route('register') }}">Click here to sign up</a></p>
                    <p>The developer of this web app has Multiple Sclerosis and has endured Rebif, Avonex and Copaxone. He has made his life a little easier by making a way to remove some of the thinking involved by making a website to help him track the locations of his injections via an app (like the cool kids do it these days, he says, and yes he'd love to think of himself as one bearing in mind you can be a cool kid at any age - a teacher for 15 years and not one student ever thought he was cool and he's fine with that because sometimes they admitted to learning cool things and enjoying themselves).</p>
                    <p>The first version was built back in 2015, </p>
                </div>
            </div>
</x-guest-layout>