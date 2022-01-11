@php
if ( $_COOKIE["qty"] )
{ $qty = $_COOKIE["qty"]; }
else 
{
    $qty = 4;
};
@endphp
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="/app/locations/">Locations</a></li>
@endsection
<x-app-layout>
<!-- qty -->
        <div class="flex">
            <div class="col-8">
                <form action="?">
                    <label for="qty_menu">
                        View
                        <input type="number" size="2" style="width:2rem" min="4" value="@php echo $qty @endphp" max="31" step="1" name="qty" id="qty_menu" />
                        <button type="submit" class="btn btn-sm btn-success" name="submit" value="submit" id="">Go</button>
                    </label>
                </form>
            </div>
            <div class="col-4">
                <a href="#" class="btn btn-sm btn-danger float-right" data-toggle="modal" zdata-target="#myModal3" role="button">Delete location</a>
            </div>
        </div>
        <!-- location -->
        <div id="location" class="table-responsive">
            <div class="alert alert-success" style="position:absolute; z-index:10" onclick="this.style='display:none'">Double click to add a site</div>
    @foreach ($sites as $site)
                <div class="table">
                    <img src="{{$site->url}}" alt="Pic" id="bg-img" />
                </div>
    @break
    @endforeach
    @foreach ($sites as $site)
    @section('page_title')
    {{ ucfirst( $site->name ) }} 
    @endsection
            <div 
                class="site"
                data-toggle="modal" data-target="#myModal2"
                atyle="left:{{$site->x_coord-4}}px; top:{{$site->y_coord-45}}px;"
                id="location{{$loop->index}}">
            <img src="/img/logo.svg" alt="{{$site->updated_at}}">
            <div class="count site{{$site->rating}}">
                <div class="count-no">
                {{ $loop->index+1 }}
                </div>
            </div>
    @if ( $site->note )
            <i class="fa fa-comment comment-reveal">
                <div class="comment">
                    {{ $site->note }}
                </div>
            </i>
    @endif
            </div>
    @endforeach
        </div>
    </div>
</x-app-layout>