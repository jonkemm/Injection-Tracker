@section("page_title","Pricing (free!)")
@section("page_keywords","price,patreon")
@section("page_desc","This app is free to use, consider becoming a patreon to support it?")
<style>.w-100{width: 50%}</style>
<x-guest-layout>
                <h2>@yield('page_desc')</h2>
                <div class="row flex">
@include('components.price')
                </div>  
</x-guest-layout>