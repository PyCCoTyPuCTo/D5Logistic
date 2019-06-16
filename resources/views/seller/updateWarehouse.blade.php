@extends('layouts.addGeoData')
@section('formConfig')
    method="POST"
    action="{{ route('customer.updateWarehousePost',['id'=>$id]) }}"
@endsection
@section('inputs')

    @if(isset($geolocation_id))
        <input type="hidden" id="geolocation_id" class="form-control"
               name="geolocation_id" value="{{$geolocation_id}}">
    @endif
    <input type="hidden" name="user_id" value="{{Auth::id()}}">


@endsection
