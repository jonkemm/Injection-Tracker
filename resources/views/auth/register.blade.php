@section('page_title')
    {{ "Register" }}
@endsection
<x-guest-layout>
    <div class="card">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
        
            
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" value="{{ old('name') }}" placeholder="Enter name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ old('email') }}" placeholder="Enter email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group row">
                <div class="col-sm-11">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
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
                        <button type="submit" class="btn btn-primary float-right">Register</button>
                        <a class="btn btn-sm btn-google float-right mt-3" href="{{ route('social.oauth', 'google') }}">
                            <img src="https://img.icons8.com/color/16/000000/google-logo.png">Register with Google
                        </a> 
                    </div>
                </div>
            </div>
        </form>
        <script>
            function showPwd() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </div>
    <div class="row flex">
        <div class="col-sm-7"></div>
        <div class="col-sm-3">
            <a href="{{ route('password.request') }}" class="float-right">
                {{ __('Forgot your password?') }}
            </a>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </div>
</x-guest-layout>
