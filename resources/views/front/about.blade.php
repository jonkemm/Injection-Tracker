@section("page_title","What a lovely story")
@section("page_keywords","about, what a lovely story")
@section("page_desc","")
<x-guest-layout>
                <h2>@yield('page_desc')</h2>
                <div class="row flex">
@include('components.about')
                </div>  
</x-guest-layout>