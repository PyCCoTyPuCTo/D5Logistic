@extends('layouts.app')

@section('register')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Личный кабинет</h2>

                @if(Auth::user()->type->name == 'Customer')
                    <div class="row justify-content-center">
                        <div class="card m-3">

                            <div class="card-header">
                                Заявка на поставку
                            </div>
                            <a href="{{route('customer.deliveryOrders')}}">
                                <div class="card-body">
                                    <div class="col-md-4">
                                        <img src="{{asset('img/icons/3.png')}}">
                                    </div>
                                </div>

                            </a>
                        </div>

                        <div class="card m-3">
                            <div class="card-header">
                                Заявки на сегодня
                            </div>

                            <a href="{{route('customer.todayOrders')}}">
                                <div class="card-body">
                                    <div class="col-md-4">
                                        <img src="{{asset('img/icons/5.png')}}">
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card m-3">
                            <div class="card-header">
                                Магазины
                            </div>

                            <a href="{{route('customer.markets')}}">
                                <div class="card-body">
                                    <div class="col-md-4">
                                        <img src="{{asset('img/icons/7.png')}}">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif(Auth::user()->type->name == 'Seller')

                    <div class="row justify-content-center">
                        <div class="card m-3">
                            <div class="card-header">
                                Склады
                            </div>
                            <a href="{{route('seller.warehouses')}}">
                                <div class="card-body">
                                    <div class="col-md-3">
                                        <img src="{{asset('img/icons/1.png')}}">
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card m-3">


                            <div class="card-header">
                                Товары
                            </div>
                            <a href="{{route('customer.products')}}">
                                <div class="card-body">
                                    <div class="col-md-3">
                                        <img src="{{asset('img/icons/2.png')}}">
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="card m-3">

                            <div class="card-header">
                                Транспорт
                            </div>
                            <a href="{{route('customer.vehicles')}}">
                                <div class="card-body">
                                    <div class="col-md-3">

                                        <img src="{{asset('img/icons/4.png')}}">

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="row justify-content-center">

                        <div class="card m-3">

                            <div class="card-header">
                                Маршрут на день
                            </div>
                            <a href="{{route('customer.itinerary')}}">
                                <div class="card-body">
                                    <div class="col-md-3">

                                        <img src="{{asset('img/icons/6.png')}}">

                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card m-3">

                            <div class="card-header">
                                Товары на складах
                            </div>
                            <a href="{{route('customer.productsInWarehouses')}}">
                                <div class="card-body">
                                    <div class="col-md-3">
                                        <img src="{{asset('img/icons/3.png')}}">
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card m-3">
                            <div class="card-header">
                                Одобрение поставок
                            </div>
                            <a href="{{route('customer.productsInWarehouses')}}">
                                <div class="card-body">
                                    <div class="col-md-3">

                                        <img src="{{asset('img/icons/5.png')}}">

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                @endif

            </div>
        </div>
    </div>
@endsection
