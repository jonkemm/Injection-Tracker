@section('page_title')
    {{ "Login" }}
@endsection
<x-guest-layout>
    <div class="card">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
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
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary float-right">Login</button>
                        <a class="btn btn-sm btn-google mt-4 float-right" href="{{ route('social.oauth', 'google') }}">
                            <img src="https://img.icons8.com/color/16/000000/google-logo.png"> Login with Google
                        </a> 
                    </div>
                </div>
            </div>
        </form>
        {{-- {!! app('captcha')->render(); !!} --}}
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
        <div class="col-sm-6"></div>
        <div class="col-sm-3">
            <a href="{{ route('password.request') }}" class="float-right">
                {{ __('Forgot your password?') }}
            </a>
        </div>
        <div class="col-sm-3">
            <a href="{{ route('register') }}">
                {{ __('New here? Register') }}
            </a>
        </div>
    </div>
</x-guest-layout>
