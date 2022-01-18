@section("page_title","How to use this app")
@section("page_keywords","How to, instructions")
@section("page_desc","Instructions on how to use this app")
<x-guest-layout>
                <h2>@yield('page_desc')</h2>
@include('components.how-to')
</x-guest-layout>