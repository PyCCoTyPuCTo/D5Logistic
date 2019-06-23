@extends('layouts.app')

@section('register')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if(Auth::user()->type->name == 'Customer')

                    <h2>Личный кабинет:
                        <small>Покупатель {{Auth::user()->name}}</small>
                    </h2>
                    <div class="row">

                        <div class="col-3 m-3">

                            <div class="card" style="height: 100%">
                                <div class="card-body">

                                    <div class="col-12 justify-content-center" style="">
                                        <img class="animated pulse delay-2s"
                                             src="{{asset('img/alm.png')}}" style="width: 100%">
                                        <p class="mt-3">Email:
                                            <small>{{Auth::user()->email}}</small>
                                        </p>
                                        <p>Адрес:
                                            <small>{{Auth::user()->address}}</small>
                                        </p>
                                        <p>ИНН:
                                            <small>{{Auth::user()->inn}}</small>
                                        </p>
                                        <p>Телефон:
                                            <small>8(978)965-21-76</small>
                                        </p>
                                        <a class="btn btn-primary mt-3" href="#">Редактировать профиль</a>

                                    </div>

                                </div>
                                <ul class="list-group animated fadeIn delay-1s">
                                    <li class="list-group-item list-group-item-action ">
                                        Торговые точки:
                                        <small class="text-success">5</small>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        Склады:
                                        <small class="text-success">2</small>
                                    </li>
                                    <li class="list-group-item list-group-item-action ">
                                        Текущие контракты:
                                        <small class="text-success">2</small>
                                    </li>
                                    <li class="list-group-item list-group-item-action ">
                                        Контракты в рассмотрении:
                                        <small class="text-success">6</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-5">
                            <h5 class="m-3">Управление бизнесом:</h5>
                            <div class="row justify-content-center">
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">
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
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">
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
                            </div>
                            <div class="row justify-content-center">
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">

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
                                <div class="card m-3 animated fadeIn delay-1s box-shadow"
                                     style=" visibility: hidden;">

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

                        </div>

                        <div class="col-3 mt-3">
                            <div id="list" class="card p-1">
                                <h5 class="m-3">Свежие ответы:</h5>

                                <div class="card p-2 mb-1">
                                    <small>17.08.2019</small>
                                    <p class="mb-0">Тип: овощи</p>
                                    <p class="mb-0">Наименование: помидор</p>
                                    <p class="mb-0">Количество: 1000 кг</p>
                                    <p class="mb-0">Поставщик: ООО"Урожай"</p>
                                    <p class="alert alert-success p-0 mb-0" href="#">Подтверждено</p>
                                    <p class="btn btn-primary" href="#">Детали</p>
                                </div>
                                <div class="card p-2 mb-1">
                                    <small>25.08.2019</small>
                                    <p class="mb-0">Тип: напитки</p>
                                    <p class="mb-0">Наименование: чай</p>
                                    <p class="mb-0">Количество: 400 шт</p>
                                    <p class="mb-0">Поставщик: ООО"Бурушка"</p>
                                    <p class="alert alert-danger p-0 mb-0" href="#">Отклонено</p>
                                    <p class="btn btn-primary" href="#">Детали</p>
                                </div>

                                <div class="card p-2 mb-1">
                                    <small>25.08.2019</small>
                                    <p class="mb-0">Тип: фрукты</p>
                                    <p class="mb-0">Наименование: яблоко</p>
                                    <p class="mb-0">Количество: 1500 кг</p>
                                    <p class="mb-0">Поставщик: ООО"Зорька"</p>
                                    <p class="alert alert-success p-0 mb-0" href="#">Подтверждено</p>
                                    <p class="btn btn-primary" href="#">Детали</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif(Auth::user()->type->name == 'Seller')
                    <h2>Личный кабинет:
                        <small>Поставщик {{Auth::user()->name}}</small>
                    </h2>
                    <div class="row">

                        <div class="col-3 m-3">

                            <div class="card" style="height: 100%">
                                <div class="card-body">

                                    <div class="col-12 justify-content-center" style="">
                                        <img class="animated pulse delay-2s"
                                             src="{{asset('img/LogoSeller.png')}}" style="width: 100%">
                                        <p class="mt-3">Email:
                                            <small>{{Auth::user()->email}}</small>
                                        </p>
                                        <p>Адрес:
                                            <small>{{Auth::user()->address}}</small>
                                        </p>
                                        <p>ИНН:
                                            <small>{{Auth::user()->inn}}</small>
                                        </p>
                                        <p>Телефон:
                                            <small>8(978)789-35-45</small>
                                        </p>
                                        <a class="btn btn-primary mt-3" href="#">Редактировать профиль</a>

                                    </div>

                                </div>
                                <ul class="list-group animated fadeIn delay-1s">
                                    <li class="list-group-item list-group-item-action ">
                                        Транспортные средства:
                                        <small class="text-success">10</small>
                                    </li>
                                    <li class="list-group-item list-group-item-action">
                                        Склады:
                                        <small class="text-success">3</small>
                                    </li>
                                    <li class="list-group-item list-group-item-action ">
                                        Текущие поставки:
                                        <small class="text-success">4</small>
                                    </li>
                                    <li class="list-group-item list-group-item-action ">
                                        Продоваемые товары
                                        <small class="text-success">6</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-5">
                            <h5 class="m-3">Управление бизнесом:</h5>
                            <div class="row justify-content-center">
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">
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
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">
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
                            </div>
                            <div class="row justify-content-center">
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">

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
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">

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
                            </div>
                            <div class="row justify-content-center">
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">

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
                                <div class="card m-3 animated fadeIn delay-1s box-shadow">
                                    <div class="card-header">
                                        Одобрение поставок
                                    </div>
                                    <a href="{{route('customer.approvalOfDeliveries')}}">
                                        <div class="card-body">
                                            <div class="col-md-3">

                                                <img src="{{asset('img/icons/5.png')}}">

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 mt-3">
                            <div id="list" class="card p-1">
                                <h5 class="m-3">Свежие предложения:</h5>

                                <div class="card p-2 mb-1">
                                    <small>17.08.2019</small>
                                    <p class="mb-0">Тип: напитки</p>
                                    <p class="mb-0">Наименование: кофе</p>
                                    <p class="mb-0">Количество: 500шт</p>
                                    <p class="mb-0">Покупатель: ООО"Ракушка"</p>
                                    <a class="btn btn-primary" href="#">Посмотреть</a>
                                </div>
                                <div class="card p-2 mb-1">
                                    <small>25.08.2019</small>
                                    <p class="mb-0">Тип: напитки</p>
                                    <p class="mb-0">Наименование: Чай</p>
                                    <p class="mb-0">Количество: 400шт</p>
                                    <p class="mb-0">Покупатель: ООО"Бурушка"</p>
                                    <a class="btn btn-primary" href="#">Посмотреть</a>
                                </div>

                                <script>
                                    $(function () {
                                        setTimeout(function () {
                                            $('#list').append('<div class="card p-2 mb-1 animated bounceInRight"><small>25.08.2019</small><p class="mb-0">Тип: каши</p><p class="mb-0">Наименование: Рис</p><p class="mb-0">Количество: 1000кг</p><p class="mb-0">Покупатель: ОАО"Наши суши"</p><a class="btn btn-primary" href="#">Посмотреть</a></div>');
                                        }, 4500)
                                    });
                                </script>
                            </div>
                        </div>
                    </div>


                @endif

            </div>
        </div>
    </div>
@endsection
