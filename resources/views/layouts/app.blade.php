<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>D5Logistic</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    @yield('register')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('img/D5.png')}}" style="max-width: 50px"><b> Logistic</b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Навигация') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Личный кабинет</a></li>
                        @if(Auth::user()->type->name == 'Customer')

                            <li class="nav-item"><a class="nav-link" href="{{route('customer.deliveryOrders')}}">Заявка
                                    на поставку</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('customer.todayOrders')}}">Заявки на
                                    сегодня</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{route('customer.markets')}}">Магазины</a>
                            </li>


                        @elseif(Auth::user()->type->name == 'Seller')


                            <li class="nav-item"><a class="nav-link" href="{{route('seller.warehouses')}}">Склады</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('customer.todayOrders')}}">Товары</a>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{route('customer.vehicles')}}">Транспорт</a>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{route('customer.deliveryOrders')}}">Маршрут
                                    на день</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('customer.todayOrders')}}">Товары на
                                    складах</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{route('customer.markets')}}">Одобрение
                                    поставок</a>
                            </li>

                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Выход') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="mainDiv py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
