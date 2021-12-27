@section('page_title')
    {{ "Confirm password" }}
@endsection
<x-guest-layout>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div class="form-group row">
                <div class="col-sm-11">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                </div>
                <div class="col-sm-1 float-right mt-4">
                    <label for="show-pwd-checkbox" class="show-pwd">
                        <input type="checkbox" class=" mt-0" onclick="showPwd()" id="show-pwd-checkbox"> Show
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary float-right">Confirm password</button>
                    </div>
                </div>
            </div>
        </form>
</x-guest-layout>
