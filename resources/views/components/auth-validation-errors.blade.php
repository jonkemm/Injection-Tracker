@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="form-control is-invalid alert alert-danger">
            {{ __('Please check for errors:') }}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
