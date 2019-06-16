@extends('layouts.addGeoData')
@section('formConfig')
    method="POST"
    action="{{ route('customer.addWarehousePost') }}"
@endsection
@section('inputs')


@endsection
