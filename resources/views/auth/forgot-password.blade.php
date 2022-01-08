@section("page_title","Forgot password")
@section("page_keywords","forgot password, forgot, password")
@section("page_desc","Forgotten you password? Enter your email address below and we will email you a password reset link that will allow you to choose a new password. No dramas.")
<x-guest-layout>
    <div class="card">
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />
        <p>@yield('page_desc')</p>
        <form method="POST" action="{{ route('password.email') }}">
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
            <div class="mb-3">
                <div class="col-6 float-right">
                    <button type="submit" class="btn btn-primary float-right">Login</button>
                    <a class="btn btn-sm btn-google mt-3" href="{{ route('social.oauth', 'google') }}">
                        <img src="https://img.icons8.com/color/16/000000/google-logo.png"> Login with Google
                    </a> 
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
