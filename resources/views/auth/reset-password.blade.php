@section('page_title')
    {{ "Reset password" }}
@endsection
<x-guest-layout>
    <div class="card">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ old('email') }}" placeholder="Enter email">
            </div>
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
                <label for="password_confirmation">Confirm password</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary float-right">Reset password</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
