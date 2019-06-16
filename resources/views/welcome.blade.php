<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="http://bootstraptema.ru/snippets/slider/2016/cfb/jquery.carousel.fullscreen.css" />
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
                background: rgba(23, 23, 23, 0.9);
                opacity: 1;
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
                position: absolute;
                right: 10px;
                top: 18px;
                z-index: 100;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #f7f9ff;
                padding: 0 25px;
                font-size: 26px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="position: relative; z-index: 100;">
            @if (Route::has('login'))
                <div class="top-right links btn btn-primary">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->


                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/images/2.png" alt=""/>
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Доступная логистика</h1>
                                        <p class="lead">Платформа позволяющая поставщикам и производителям любого уровня использовать логистические решения для взаимодействия с магазинами розничной торговли</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/1.jpg" alt="" />
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Доступная логистика</h1>
                                        <p class="lead">Платформа позволяющая поставщикам и производителям любого уровня использовать логистические решения для взаимодействия с магазинами розничной торговли</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="carousel slide" style="z-index: 100">


            <div class="modal-body row" style="width: 100vw; background-color: #ffffff; height: 100vh">
                <div class="col-md-6">
                    <img src="images/sicon3.png" style="width: 100%">
                    <h1>Поставщикам товаров</h1>
                    <h2 style="text-align: justify">Местные производители не редко сталкиваются со сложностями вхождения в торговые сети, мы предлагаем решения этой проблемы в рамках нашей работы</h2>
                </div>
                <div class="col-md-6" >
                    <img src="images/7.jpg" style="width: 100%">
                    <h1>Магазинам и торговым сетям</h1>
                    <h2 style="text-align: justify">Магазины розничной торговли теперь могут сравнивать различные предложения интересующих их товаров, в том числе местных производителей</h2>
                </div>
            </div>


        </div>
    </body>
</html>
