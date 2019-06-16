@extends('layouts.addGeoData')
@section('formConfig')
    method="POST"
    action="{{ route('customer.updateMarketPost') }}"
@endsection
@section('inputs')

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text"
                   class="form-control @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    @if(isset($id))
        <input type="hidden" id="id" class="form-control"
               name="id">
    @endif

    @if(isset($geolocation_id))
        <input type="hidden" id="geolocation_id" class="form-control"
               name="geolocation_id">
    @endif

@endsection
