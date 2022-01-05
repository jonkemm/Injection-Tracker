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
                <label for="inputPassword_confirmation" class="form-label">Confirm password</label>
                <input name="password_confirmation" type="password" class="form-control" id="inputPassword_confirmation" placeholder="Confirm password">
            </div>
            <div class="mb-3">
                <div class="col-6 float-right">
                    <button type="submit" class="btn btn-primary float-right">Reset Password</button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
