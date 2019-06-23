@extends('layouts.app')
@section('register')

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <h3>
                        Информация о транспорте:
                    </h3>
                </div>
                <?php

                $places = [
                    'Россия, Севастополь, улица Лобанова, 21',
                    'Россия, Севастополь, улица Шабалина, 50А',
                    'Россия, Севастополь, Готская улица, 78'];
                $v = ['50 000', '60 000', '40 000'];
                $storages = [[
                    'name' => $places[0],
                    'cars' => [
                        ['name' => 'Reno C432HK', 'ves' => 1000, 'ob' => 55, 'sost' => '54%'],
                        ['name' => 'Reno B432МK', 'ves' => 1000, 'ob' => 70, 'sost' => false],
                        ['name' => 'Reno O412ЕK', 'ves' => 500, 'ob' => 45, 'sost' => true]]], [
                    'name' => $places[1],
                    'cars' => [
                        ['name' => 'VOLVO C411HO', 'ves' => 1000, 'ob' => 45, 'sost' => true],
                        ['name' => 'Reno C423HK', 'ves' => 1000, 'ob' => 40, 'sost' => '32%'],
                        ['name' => 'Reno B543HK', 'ves' => 1000, 'ob' => 80, 'sost' => false],
                        ['name' => 'Reno C121HK', 'ves' => 1000, 'ob' => 80, 'sost' => '29%'],
                    ]],
                    [
                        'name' => $places[2],
                        'cars' => [
                            ['name' => 'Reno O765BK', 'ves' => 1000, 'ob' => 45, 'sost' => '51%'],
                            ['name' => 'Reno C443HK', 'ves' => 1000, 'ob' => 45, 'sost' => true],
                            ['name' => 'Reno O421HK', 'ves' => 500, 'ob' => 45, 'sost' => false]]]];

                ?>
                <div class="mb-3">
                    @foreach($storages as $storage)
                        <?php
                        //$cars = \App\Vehicle::all()->where('storage_id', '=', $storage->id)
                        ?>
                        <h2 class="mb-3">Склад: <i>{{$storage['name']}}</i></h2>
                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Наименование</th>
                                <th>Макс масса кг</th>
                                <th>Объем м3</th>
                                <th>Состояние</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $counter = 0; ?>
                            @foreach($storage['cars'] as $car)
                                <tr>
                                    <td>{{++$counter}}</td>
                                    <td>{{$car['name']}}</td>
                                    <td>{{$car['ves']}}</td>
                                    <td>{{$car['ob']}}</td>
                                    <td>
                                        <?php
                                        if ($car['sost'] === false) {
                                            echo('<p class="alert alert-warning p-1">Укомплектован</p>');
                                        } elseif ($car['sost'] === true) {
                                            echo('<p class="alert alert-danger p-1">В пути</p>');
                                        } else {
                                            echo('<p class="alert alert-success p-1">' . $car["sost"] . ' использовано</p>');
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target=".bd-example-modal-lg">Информация
                                        </button>

                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                             aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">

                                                    <div id="carouselExampleIndicators" class="carousel slide"
                                                         data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators"
                                                                data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100"
                                                                     src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/d2e7e32afcf7cf8c8ea23cc9f13016cf.jpg"
                                                                     alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100"
                                                                     src="https://autoline24.ru/img/s/mikroavtobus-mikroavtobus-furgonRENAULT-Master-L2H2-KLIMA-DlUGI-WYSOKI-TEMPOMAT-SERWISOWANY-BLASZAK-VAN---1535791083672141197_big--18090111342841760700.jpg"
                                                                     alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100"
                                                                     src="https://s.0629.com.ua/section/doska/upload/pers/17/img/doska/000/002/138/img20190221073911304071474_5cebcc1a350c5.jpg"
                                                                     alt="Third slide">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#carouselExampleIndicators" role="button"
                                                           data-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                  aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#carouselExampleIndicators" role="button"
                                                           data-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                  aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                    <p class="mb-0">
                                                        <a class="btn btn-primary mt-1 mb-1" style="width: 100%"
                                                           data-toggle="collapse" href="#collapseExample"
                                                           role="button" aria-expanded="false"
                                                           aria-controls="collapseExample">
                                                            Общая
                                                        </a>
                                                    </p>
                                                    <div class="collapse" id="collapseExample">
                                                        <div class="card card-body">
                                                            <ul class="list-group animated fadeIn">
                                                                <li class="list-group-item list-group-item-action ">
                                                                    Состояние:
                                                                    <small class="text-primary">В пути</small>
                                                                </li>
                                                                <li class="list-group-item list-group-item-action">
                                                                    Типы перевозимых грузов:
                                                                    <small class="text-success">Стройматериалы, продукты
                                                                        питания
                                                                    </small>
                                                                </li>
                                                                <li class="list-group-item list-group-item-action ">
                                                                    Габариты:
                                                                    <small class="text-success">5</small>
                                                                    х
                                                                    <small class="text-success">3</small>
                                                                    х
                                                                    <small class="text-success">3</small>
                                                                </li>


                                                            </ul>

                                                        </div>
                                                        <p class="mb-0">
                                                            <a class="btn btn-primary mt-1 mb-1"
                                                               style="width: 100%"
                                                               data-toggle="collapse"
                                                               href="#collapseExample2"
                                                               role="button" aria-expanded="false"
                                                               aria-controls="collapseExample2">
                                                                Подробно
                                                            </a>
                                                        </p>
                                                        <div class="collapse" id="collapseExample2">
                                                            <div class="card card-body">
                                                                <ul class="list-group animated fadeIn">
                                                                    <li class="list-group-item list-group-item-action ">
                                                                        Запас хода:
                                                                        <small class="text-success">500 км
                                                                        </small>
                                                                    </li>
                                                                    <li class="list-group-item list-group-item-action">
                                                                        Объем бака:
                                                                        <small class="text-success">
                                                                            100 л.
                                                                        </small>
                                                                    </li>
                                                                    <li class="list-group-item list-group-item-action ">
                                                                        Тип двигателя:
                                                                        <small class="text-success">
                                                                            Дизельный
                                                                        </small>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a class="btn btn-primary" href="">Редактировать</a><a class="btn btn-danger"
                                                                                               href="">Удалить</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
