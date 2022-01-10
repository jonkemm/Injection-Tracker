@section('page_title'){{ "Free Injection Tracker Web App - Own your injections" }}
@endsection @section('page_desc'){{ "Injection tracker is for those of us who wish to accurately track their injections and rate the 'experience' for each one. The idea is that over time you can get a better idea of where your (extra) sore bits are." }}@endsection
@section('page_keywords'){{"injection, tracking, avonex, copaxone, rebif"}}@endsection

<x-guest-layout>
                <div class="col">
                    <h1>Own your injections.</h1>
                    <p>@yield('page_desc')</p>
                    <p>Let's go!</p>
                    @auth
                    <p><a href="{{ route('locations') }} "  class="btn btn-warning">View your locations</a></p>
                    @else
                    <a href="{{route('register')}}" id="my_button" class="btn btn-success">Register</a>
                    @endauth
                </div>
                <div class="col">
                    <h2>Easy as 1,2,3</h2>
                </div>
                <div class="col">
                    <div class="card vertical">
                        <img class="card-img-top" src="/img/front/account.png" alt="Account icon">
                        <div class="card-body">
                            <h3>1) Sign up</h3>
                            <p>Register with / log into the site or login with Google</p>
                            <p><a href="{{ route('register') }}" class="btn btn-primary" role="button">Register</a> <a href="{{ route('login') }}" class="btn btn-default" role="button">Login</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card vertical">
                        <img class="card-img-top" src="/img/front/list-example.png" alt="List of location screens">
                        <div class="card-body">
                            <h3>2) Add a location</h3>
                            <p>In the locations section, name the location of your first image (e.g. Right Leg) and upload the image.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card vertical">
                        <img class="card-img-top" src="/img/front/thigh-front.png" alt="List of location screens">
                        <div class="card-body">
                            <h3>3) Record injections</h3>
                            <p>Choose the location you created and inject yourself, double click on the image in the place where you injected, rate the pain and add the site.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card vertical">
                        <img class="card-img-top" src="/img/lets-go.png" alt="Get started">
                        <div class="card-body">
                            <h3>Ready?</h3>
                            <p>Just register or login to get started.</p>
                            <p><a href="{{ route('register') }}" class="btn btn-primary" role="button">Register</a> <a href="{{ route('login') }}" class="btn btn-default" role="button">Login</a></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2>What a lovely story (developer ramblings)</h2>
                    <p>Not that tales involving chronic illnesses are often thought of as lovely, just an expression really... Not ready for a story and just want to get on with it? <a href="{{ route('register') }}">Click here to sign up</a></p>
                    <p>The developer of this web app has Multiple Sclerosis and has endured Rebif, Avonex and Copaxone. He has made his life a little easier by making a way to remove some of the thinking involved by making a website to help him track the locations of his injections via an app (like the cool kids do it these days, he says, and yes he'd love to think of himself as one bearing in mind you can be a cool kid at any age - a teacher for 15 years and not one student ever thought he was cool and he's fine with that because sometimes they admitted to learning cool things and enjoying themselves).</p>
                    <p>The first version was built back in 2015, </p>
                </div>
</x-guest-layout>