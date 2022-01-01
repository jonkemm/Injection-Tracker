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
            <div class="row flex">
                <div class="col-sm-6">
                    <div class="card vertical">
                        <img class="card-img-top" src="/img/account.png" alt="Account icon">
                        <div class="card-body">
                            <h3>Sign up</h3>
                            <p>Register with / log into the site or login with Google</p>
                            <p><a href="{{ route('register') }}" class="btn btn-primary" role="button">Register</a> <a href="{{ route('login') }}" class="btn btn-default" role="button">Login</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card vertical">
                        <img class="card-img-top" src="/img/list-of-locations.png" alt="List of location screens">
                        <div class="card-body">
                            <h3>Add a location</h3>
                            <p>In the locations section, name the location of your first image (e.g. Right Leg) and upload the image.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex">
                <div class="col-sm-6">
                    <div class="card vertical">
                        <img class="card-img-top" src="/img/sites.png" alt="List of location screens">
                        <div class="card-body">
                            <h3>Record injections</h3>
                            <p>Choose the location you created and inject yourself, double click on the image in the place where you injected, rate the pain and add the site.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card vertical">
                        <img class="card-img-top" src="/img/lets-go.png" alt="Get started">
                        <div class="card-body">
                            <h3>Ready?</h3>
                            <p>Just register or login to get started.</p>
                            <p><a href="{{ route('register') }}" class="btn btn-primary" role="button">Register</a> <a href="{{ route('login') }}" class="btn btn-default" role="button">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        
    </x-guest-layout>
</div>