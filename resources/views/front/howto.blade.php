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
            <ol>
                <li><a href="{{ route('register') }}">register</a> or <a href="{{ route('login') }}">login</a></li>
                <li>In the <a href="{{ route('locations') }}">locations</a> section, name the location of your first image (e.g. Right Leg) and upload the image.</li>
                <li>Choose the location you created and inject yourself</li>
                <li>Double click on the image in the place where you injected</li>
                <li>Rate the pain and add the site</li>
            </ol>
        </div>
    </x-app-layout>
</div>