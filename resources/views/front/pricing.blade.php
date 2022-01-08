@section("page_title","Pricing (free!)")
@section("page_keywords","price,patreon")
@section("page_desc","This app is free to use, consider becoming a patreon?")
<x-guest-layout>
                <h2>@yield('page_desc')</h2>
                <div class="row flex">
                    <div class="col-sm-6">
                        <h3>This app is free to use</h3>
                        <p>No tracking, no selling data, no adverts, nuffing.</p>
                    </div>
                    <div class="col-sm-6">
                        <h3>Support this app</h3>
                        <p>I'd just like enough for it to pay it's way, approx &pound;50 per year.  Please consider becoming a patreon by clicking the logo below.</p>
                        <p><a href="https://www.patreon.com/jonkemm" target="_blank"><img src="/img/Digital-Patreon-Logo_Black.png" style="width:100%" alt=""></a></p>
                    </div>
                </div>  
</x-guest-layout>