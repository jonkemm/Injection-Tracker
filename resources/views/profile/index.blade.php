@section('page_title')
    {{ "Profile" }}
@endsection

<div class="container">
    <x-guest-layout>
        <div class="card">
            <a href="{{ route('locations') }} "  class="btn btn-warning" id="my-button">View your locations</a>
            <label for="logout">Would you like to:</label>
            <a href="{{ route('logout') }}" id="logout" class="btn btn-sm btn-info" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <label for="delete">Or:</label>
            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none">
                @csrf
            </form>
            <a href="#" class="btn btn-sm btn-danger" id="delete" onclick="event.preventDefault(); document.getElementById('myModal').style='display:block';">
                Delete your account
            </a>
        </div>
        <div class="modal" id="myModal">
            <div class="modal-header">
                <h2 class="modal-title">Are you sure you want to delete your account?</h2>
            </div>
            <div class="modal-body">
                <p>Delete everything? This can not be undone</p>
            </div>
            <div class="modal-footer">
                <form id="delete-form" action="{{ route('profile') }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete account</button>
                </form>
                <button type="button" class="btn btn-secondary"
                onclick="document.getElementById('myModal').style='display:none';"
                data-dismiss="modal">
                    Close</button>
            </div>
        </div>
    </x-guest-layout>
</div>