@section("page_title","Register")
@section("page_keywords","Register, registration, join")
@section("page_desc","Register / join the Injection tracker website")
<x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="mb-3">
                    <label for="inputName">Name</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" value="{{ old('name') }}" placeholder="Enter name">
@error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
@enderror
                </div>
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
                    <label for="inputPassword" class="form-label">Password</label>
                    <input name="password" required type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" placeholder="Password">
@error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
@enderror
                </div>
                    <div class="mb-3">
                        <div class="col-6 float-right">
                            <button type="submit" class="btn btn-primary float-right">Register</button>
                            <a class="btn btn-sm btn-google mt-3" href="{{ route('social.oauth', 'google') }}">
                                <img src="https://img.icons8.com/color/16/000000/google-logo.png"> Register with Google
                            </a> 
                        </div>
                        <div class="col-5">
                            <a href="{{ route('password.request') }}" class="float-right">
                                {{ __('Forgot your password?') }}
                            </a>
                            <a href="{{ route('login') }}">
                                {{ __('Returning? Login') }}
                            </a>
                        </div>
                    </div>
                </form>
</x-guest-layout>
