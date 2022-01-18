@section("page_title","Features")
@section("page_keywords","features")
@section("page_desc","")
<x-guest-layout>
                <h2>@yield('page_desc')</h2>
                <div class="row flex">
@include('components.features')
                </div>  
</x-guest-layout>