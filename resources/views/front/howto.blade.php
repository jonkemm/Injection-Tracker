@section('page_title')
How to use this app
@endsection 
@section('page_desc')
How to use this app
@endsection 
@section('page_keywords')
How to, instructions
@endsection 
<div class="container">
    <x-guest-layout>


        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="img-cont">
                        <img src="/img/account.png" style="width:100%" alt="...">
                    </div>
                    <div class="caption">
                        <h3>Sign up</h3>
                        <p>Register with / log into the site or login with Google</p>
                    </div>
                    <p><a href="{{ route('register') }}" class="btn btn-primary" role="button">Register</a> <a href="{{ route('login') }}" class="btn btn-default" role="button">Login</a></p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="img-cont">
                        <img src="/img/thigh-example-front-2.png" style="width:100%" alt="...">
                    </div>
                    <div class="caption">
                        <h3>Add a location</h3>
                        <p>In the locations section, name the location of your first image (e.g. Right Leg) and upload the image.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="img-cont">
                        <img src="/img/thigh-example-front.png" width="100%" alt="...">
                    </div>
                    <div class="caption">
                        <h3>Record injections</h3>
                        <p>Choose the location you created and inject yourself, double click on the image in the place where you injected, rate the pain and add the site.</p>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>