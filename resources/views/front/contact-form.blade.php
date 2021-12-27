@section('page_title')
    {{ "Contact" }}
@endsection
<x-guest-layout>
  <div class="row">
    @if(session('message'))
    <div class='alert alert-success'>
      {{ session('message') }}
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
    @endif
    <div class="container">
      @component('components.form')
      @endcomponent
    </div>
  </div>
</x-guest-layout>