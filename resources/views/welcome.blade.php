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
                position: absolute;
                right: 10px;
                top: 18px;
                z-index: 100;
                color: white;
                padding: 1%;
                background: rgba(23, 23, 23, 0.8);
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
                color: #f7f9ff;
                padding: 0 25px;
                font-size: 30px;
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
                <div class="top-right links">
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
                <div class="title m-b-md">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/images/euro.jpg" alt="" />
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Bootstrap Carousel Fullscreen</h1>
                                        <p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/1.jpg" alt="" />
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1>Bootstrap Carousel Fullscreen</h1>
                                        <p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p>
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
    </body>
</html>
