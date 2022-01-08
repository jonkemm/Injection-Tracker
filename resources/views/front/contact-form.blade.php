@section("page_title","Contact Injection Tracker")
@section("page_keywords","contact, email, message")
@section("page_desc","Send a message to the Injection Tracker web app")
<x-guest-layout>
          <h2>@yield('page_desc')</h2>
          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('message')" />
          <form method="POST" action="{{ route('contact') }}">
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
                  <div class="mb-3">
                      <label for="inputMessage" class="form-label">Message</label>
                      <textarea name="message" required class="form-control @error('message') is-invalid @enderror" id="inputMessage" placeholder="Your message"></textarea>
  @error('password')
                      <span class="invalid-feedback" role="alert">
                          {{ $message }}
                      </span>
  @enderror
                  </div>
                  <div class="mb-3">
                      <div class="col-6 float-right">
                          <button type="submit" class="btn btn-primary float-right">Send</button>
                      </div>
                  </div>
                </form>
</x-guest-layout>