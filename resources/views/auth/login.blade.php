@section('page_title')
    {{ "Login" }}
@endsection
<x-guest-layout>
    <div class="card">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input name="email" required type="email" class="form-control @error('email') is-invalid @enderror " id="inputEmail" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Enter email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 col-1 float-right">
                <div class="form-check">
                    <input class="form-check-input" onclick="showPwd()" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Show
                    </label>
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="inputPassword" class="form-label ">Password</label>
                <input name="password" required type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <div class="col-6 float-right">
                    <button type="submit" class="btn btn-primary float-right">Login</button>
                    <a class="btn btn-sm btn-google mt-3" href="{{ route('social.oauth', 'google') }}">
                        <img src="https://img.icons8.com/color/16/000000/google-logo.png"> Login with Google
                    </a> 
                </div>
            </div>
        </form>
        {{-- {!! app('captcha')->render(); !!} --}}
            <div class="form-group">
                <div class="col-6 float-right">
                    <div class="col-6 float-right">
                        <a href="{{ route('password.request') }}" class="float-right">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('register') }}">
                            {{ __('New here? Register') }}
                        </a>
                    </div>
                </div>
            </div>
</x-guest-layout>