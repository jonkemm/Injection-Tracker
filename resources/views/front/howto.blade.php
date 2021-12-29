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
        <div class="card">  
            <div class="card-body">
                <h5 class="card-title">Join up</h5>
                <p class="card-text">
                    <a href="{{ route('register') }}">register</a> or <a href="{{ route('login') }}">login</a>, why not be extra secure and log in with Google?
                </p>
                <a href="#" class="btn btn-success">Login</a> &nbsp; s<a href="#" class="btn btn-primary">Register</a>
            </div>
        </div>
        <div class="card">
                    <img src="/img/thigh-example-front-2.png" class="card-img-left" style="width:50%" alt="List of injection sites" >
                    In the <a href="{{ route('locations') }}">locations</a> section, name the location of your first image (e.g. Right Leg) and upload the image.
        </div>
        <div class="card">
                    <img src="/img/thigh-example-front.png" style="width:50%" alt="List of injection sites" >
                    Choose the location you created and inject yourself, double click on the image in the place where you injected, rate the pain and add the site
        </div>
    </x-app-layout>
</div>