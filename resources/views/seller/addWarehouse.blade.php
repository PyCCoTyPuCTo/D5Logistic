@extends('layouts.addGeoData')
@section('formConfig')
    method="POST"
    action="{{ route('customer.addWarehousePost') }}"
@endsection
@section('inputs')
    <input type="hidden" name="user_id" value="{{Auth::id()}}">

@endsection
