@section('page_title')
    {{ "Locations" }}
@endsection
<x-app-layout>
@forelse($locations as $location)
    <div class="card mb-3 p-3">
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('location',$location->id) }}" class="card-link"style="float: left">
                    <div class="card-img" style="background-image: url('{{ $location->url }}')"></div>
                </a>
            </div>
            <div class="col-sm-5">
                <div class="card-body">
                    <h3>{{ ucfirst($location->name) }}</h3>
                    @if ($location->sites_updated_at <> '0000-00-00 00:00:00')
                    <div class="marker-update">Last marker added: {{ date('d/m/Y', strtotime($location->sites_updated_at)) }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-3 view-delete">
                <a href="{{ route('location',$location->id) }}">
                    <button type="submit" style="float: right;" class="btn btn-lg btn-success">view</button>
                </a>
                <a href="#" 
                onclick="document.getElementById('myModal3').action='/app/location/{{$location->id}}';document.getElementById('myModal3-div').style='display:block';"
                    data-toggle="modal" data-target="#myModal3-div"
                    style="float:right; clear:right;margin-top:0.5rem">
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </a>
            </div>
        </div>
    </div>
@empty
        <p>No locations added yet.  Add one using the form below to continue</p>
@endforelse



    <h2>Add location</h2>
    <div class="add-location">
        <form action="{{ route('upload') }}" class="location" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label for="name">Name
                        <input type="text" required name="name" id="name" placeholder="right leg" >
                    </label>
                </div>
                <div class="col-sm-4">
                    <label for="image">Image
                        <input type="file" style="width:120px;" required id="image" name="image">
                    </label>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-success float-right">Upload</button>
                </div>
            </div>
        </form>
    </div>


    @if( isset($location) )
        <div class="modal" id="myModal3-div" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="" method="post" id="myModal3">
                @csrf
                @method('DELETE')        
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>Don't want this location?</h2>
                        </div>
                        <div class="modal-body">
                            <p>If you've finished with this location you can delete it and all of it's markers.  Please note that this cannot be undone.</p>                        
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete location</button>
                            <button type="button" class="btn btn-secondary"
                            onclick="document.getElementById('myModal3-div').style='display:none';"
                            data-dismiss="modal">
                                Close</button>
                            <input type="hidden" name="location" id="location" value="{{$location->id}}">
                        </div>
                    </div>
                </div>
            </form> 
        </div>
    @endif
</x-app-layout>