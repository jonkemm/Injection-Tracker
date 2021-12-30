

<x-app-layout>
    <div class="card">
    @php
    if ( $_COOKIE["qty"] )
    { $qty = $_COOKIE["qty"]; }
    else 
    { 
        if ( request('qty') )
        { $qty = request('qty'); }
        else 
        { $qty = 4; }
    };
    @endphp
    <div class="row">
        <div class="col">
            <form action="?">
                <label for="qty_menu">
                    View
                    <input type="number" size="2" style="width:2rem" min="4" value="@php echo $qty @endphp" max="31" step="1" name="qty" id="qty_menu" />
                    <button type="submit" class="btn btn-sm btn-success" name="submit" value="submit" id="">Go</button>
            </form>
        </div>
        <div class="col">
            <a href="#" 
            onclick="document.getElementById('myModal3').style='display:block';"
            style="float:right" class="btn btn-sm btn-danger float-right"
            data-toggle="modal" 
            data-target="#myModal3" role="button">Delete location</a> 
        </div>
    </div>
        <div id="location">
            <div class="alert alert-success" 
                style="position:absolute; z-index:10"
                onclick="this.style='display:none'"
            >Double click to add a site</div>
@foreach ($sites as $site)
            <img src="{{$site->url}}" alt="Pic" id="bg-img" onclick = fill() />
@break
@endforeach
@foreach ($sites as $site)


            @section('page_title')
    Your sites > {{ ucfirst( $site->name ) }} 
@endsection

            <div 
                class="site"
                onclick = "jk({{$site->siteid }},'{{ $site->note }}','{{ $site->noteid }}')"
                style="left:{{$site->x_coord-4}}px; top:{{$site->y_coord-45}}px;"
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

            <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="addSite" aria-hidden="true">
                <form action="/app/site/{{$site->id}}"  method="post" id="add">
                    @csrf
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Rate your experience</h2>
                            </div>
                            <div class="modal-body">
                                1 = okish, 4 = rubbish
                                <div class="rating row">
                                    <div class="rating-item btn-success"><label for="rating0">1</label></div>
                                    <div class="rating-item btn-info"><label for="rating1">2</label></div>
                                    <div class="rating-item btn-warning"><label for="rating2">3</label></div>
                                    <div class="rating-item btn-danger"><label for="rating3">4</label></div>
                                </div>
                                <hr>
                                <div class="radioBtns">
                                    <input name="rating" required type="radio" value="0" id="rating0">
                                    <input name="rating" type="radio" value="1" id="rating1">
                                    <input name="rating" type="radio" value="2" id="rating2">
                                    <input name="rating" type="radio" value="3" id="rating3">
                                </div>
                                <input type="hidden" name="location" id="location" value="{{$site->id}}">
                                <input type="hidden" name="x_coord" id="x_coord" value="">
                                <input type="hidden" name="y_coord" id="y_coord" value="">
                                <input type="hidden" name="qty" id="qty" value="">
                                <br>
                                <div class="flex">
                                    <label for="note">
                                    Add a note
                                        <input type="text" value="" placeholder="Optional note" name="note">
                                    </label>
                                </div>
                            </div>    
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" >Rate &amp; Save</button>
                                <button type="button" class="btn btn-secondary"
                                    onclick="document.getElementById('myModal').style='display:none';"
                                    data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            

            <div class="modal" id="myModal2"  tabindex="-1" role="dialog" aria-labelledby="deleteSite" aria-hidden="true">
                <div class="modal-header">
                    <h2 class="modal-title">What would you like to do?</h2>
                </div>
                <div class="modal-body flex">



                    <div class="col-sm-6">
                        <p>Delete this site? This can not be undone</p>
                        <form action="" name="delete" method="post">
                            @csrf
                            @method('DELETE') 
                            <input type="hidden" name="location" value="{{$site->id}}" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>



                    <div class="col-sm-6">
                        <div class="option-hide" id="form-update">
                            <form action="/note/update" name="form-update" method="post">
                                <p>Change note</p>
                                @csrf
                                @method('put')
                                <label for="comment-update">
                                    Note:
                                    <input type="text" id="comment-update" name="comment-update" value="helli">
                                    <input type="hidden" name="location" value="{{$site->id}}" />
                                </label>
                                <button type="submit" class="btn btn-primary">Change</button>
                            </form>
                        </div>

                        <div class="option-hide" id="form-create">
                            <form action="/note/create/" name="form-create" method="post">
                                <p>Add note</p>
                                @csrf
                                @method('post')
                                <label for="comment-create">
                                    Note:
                                    <input type="text" placeholder="Add optional note" id="comment-create" name="comment-create" value="">
                                    <input type="hidden" name="location" value="{{$site->id}}" />
                                </label>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        onclick="document.getElementById('myModal2').style='display:none';"
                        data-dismiss="modal"
                        >Close</button>
                </div>
            </div>

            
            <div class="modal" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="deleteLocation" aria-hidden="true">
                <form action="/app/site/{{$site->id}}" method="post" id="delete">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h2>Don't want this location?</h2>
                    </div>
                    <div class="modal-body">
                        <p>If you've finished with this location you can delete it and all of it's markers.  Please note that this cannot be undone.</p>                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Delete location</button>
                        <button type="button" class="btn btn-secondary"
                        onclick="document.getElementById('myModal3').style='display:none';"
                        data-dismiss="modal">
                            Close</button>
                        <input type="hidden" name="location" id="location" value="{{$site->id}}">
                    </div>
                </form> 
            </div>


    </div>
    </div>
</x-app-layout>