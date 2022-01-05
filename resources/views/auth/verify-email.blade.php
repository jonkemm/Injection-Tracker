You are receiving this email because we received a password reset request for your account.

@section('page_title')
    {{ "Verify email" }}
@endsection
<x-guest-layout>
    <div class="card">

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
s
            <div class="form-group">
                    <div class="col-6"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary float-right">Resend verification</button> email
                    </div>
            </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary float-right">Verify email</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
