@section('page_title')
    {{ "Forgot password" }}
@endsection
<x-guest-layout>
    <div class="card">

        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <p>Enter your email address below and we will email you a password reset link that will allow you to choose a new password. No dramas.</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ old('email') }}" placeholder="Enter email">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary float-right">Send link</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
