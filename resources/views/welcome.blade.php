<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>D5Logistic</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://bootstraptema.ru/snippets/slider/2016/cfb/jquery.carousel.fullscreen.css"/>
    <script src="http://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://bootstraptema.ru/snippets/slider/2016/cfb/jquery.carousel.fullscreen.js"></script>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;

            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .carousel-caption {
            font-size: 20px;
            background: rgba(23, 23, 23, 0.8);
            opacity: 0.8;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: fixed;
            right: 10px;
            top: 18px;
            z-index: 100;
            color: white;
            padding: 10px;
            background: rgba(23, 23, 23, 0.8);;
            border-radius: 3px;
            border-width: 3px;
            border-color: white;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #bbbbbb;
            padding: 0 25px;
            font-size: 14px;
            font-weight: 300;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            transition: color 0.5s;
        }

        .links > a:hover {
            color: white;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="" style="">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Личный кабинет</a>
            @else
                <a href="{{ route('login') }}">Войти</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Зарегистрироваться</a>
                @endif
            @endauth
        </div>
    @endif


    <div style="position: relative;width: 100%;height: 100vh;background-attachment: fixed;background-size: 100%;background-image: url({{asset('img/back2.png')}})">

        <div style="display: flex; justify-content: center; align-items: center; width: 100%;height: 100vh;position:absolute; z-index: 2">
        </div>

    </div>
    <div style="width: 100%; padding-top: 40px">
        <div style="display: flex; justify-content: space-around; align-items: start; width: 100%;">
            <div>
                <h2 style="text-align: center">
                    Поставшикам товаров:
                </h2>
                <p style="font-size:20px;width: 500px;text-align: center">Местные производители нередко сталкиваются со
                    сложностями вхождения в торговые сети. Мы предлагаем решение этой проблемы в рамках нашей платформы.
                </p>
            </div>
            <div>
                <img src="{{asset('img/postgjr.png')}}">
            </div>
            <div>
                <h2 style="text-align: center">
                    Магазинам и торговым сетям:
                </h2>
                <p style=" font-size: 20px;width: 500px;text-align: center">Магазины розничной торговли теперь могут
                    сравнить различные предложения интересующих их товаров, в том числе, местных производителей
                </p>
            </div>
        </div>
        <div style="display: flex; justify-content: space-around; align-items: start; width: 100%;margin-top: 50px;margin-bottom: 50px">
            <h1>Мы поможем Вам найти оптимальный маршрут развития бизнеса</h1>
        </div>
        <div style="display: flex; justify-content: space-around; align-items: start; width: 100%;margin-top: 50px;margin-bottom: 50px">
            <img src="{{asset('img/cars.png')}}">
        </div>

        <div style="display: flex; justify-content: space-around; align-items: start; width: 100%;margin-top: 50px;margin-bottom: 50px">
            <h1>
                Бесплатное использование для местных производителей на начальных этапах
            </h1>
        </div>
        <div style="display: flex; justify-content: space-around; align-items: start; width: 100%;margin-top: 50px;margin-bottom: 50px">
            <img src="{{asset('img/obr.png')}}">
        </div>

    </div>

</div>

</body>
</html>
