@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-7">
            <h2>Склады</h2>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Улица</th>
                    <th scope="col">Общий объем</th>
                    <th scope="col">Информация</th>
                    <th scope="col"><a class="btn btn-primary" href="{{route('customer.addWarehouse')}}">Добавить</a>
                    </th>

                </tr>
                </thead>
                <tbody>

                <?php $counter = 0;
                $places = [
                    'Россия, Севастополь, улица Лобанова, 21',
                    'Россия, Севастополь, улица Шабалина, 50А',
                    'Россия, Севастополь, Готская улица, 78'];
                $v = ['50 000', '60 000', '40 000'];
                ?>
                @foreach($warehouses as $warehouse)
                    <?php if ($counter == 1) {
                        $geo = \App\Geolocation::find($warehouse->geolocation_id);
                        $long = $geo->longitude;
                        $lati = $geo->latitude;
                    } ?>
                    <tr>
                        <th>{{++$counter}}</th>
                        <td>{{$places[$counter-1]}}</td>
                        <td>{{$v[$counter-1]}} м3</td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">Информация
                            </button>

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <div id="map" style="width: 100%;height: 500px;"></div>

                                        <p class="mb-0">
                                            <a class="btn btn-primary mt-1 mb-1" style="width: 100%"
                                               data-toggle="collapse" href="#collapseExample"
                                               role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Общая
                                            </a>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <ul class="list-group animated fadeIn">
                                                    <li class="list-group-item list-group-item-action ">
                                                        Транспортные средства:
                                                        <small class="text-success">4</small>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action">
                                                        Холодильные камеры:
                                                        <small class="text-success">20 000 m3</small>
                                                        . Свободно
                                                        <small class="text-success">0 m3</small>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action ">
                                                        Складские помещения:
                                                        <small class="text-success">40 000 м3</small>
                                                        . Свободно
                                                        <small class="text-success">20 000 m3</small>
                                                    </li>
                                                    <li class="list-group-item list-group-item-action ">
                                                        Описание: Склад имеет возможность производить работу с крузовыми
                                                        автомобилями любого типа.
                                                        <small class="text-success">6</small>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-primary mt-1 mb-1" style="width: 100%"
                                               data-toggle="collapse" href="#collapseExample"
                                               role="button" aria-expanded="false"
                                               aria-controls="collapseExample">
                                                Подробно
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <td><a class="btn btn-primary"
                               href="{{route('customer.updateWarehouse',['id'=>$warehouse->id])}}">Редактировать</a>
                            <a class="btn btn-danger" href="{{route('customer.addWarehouse')}}">Удалить</a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th>{{++$counter}}</th>
                    <td>{{$places[$counter -1]}}</td>
                    <td>{{$v[$counter -1]}} м3</td>
                    <td><a class="btn btn-success"
                           href="#">Информация</a></td>
                    <td><a class="btn btn-primary"
                           href="{{route('customer.updateWarehouse',['id'=>$warehouse->id])}}">Редактировать</a>
                        <a class="btn btn-danger" href="{{route('customer.addWarehouse')}}">Удалить</a>
                    </td>
                </tr>

                </tbody>

            </table>
        </div>

    </div>


@endsection

<script src="https://api-maps.yandex.ru/2.1/?apikey=<6a6400bc-36b9-488e-96cd-c1c3656ff5d6>&lang=ru_RU"
        type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);

    function init() {
        var myPlacemark,
            myMap = new ymaps.Map('map', {
                center: [{{$long}}, {{$lati}}],
                zoom: 12,
            }, {
                searchControlProvider: 'yandex#search'
            });

        myPlacemark = createPlacemark([{{$long}},{{$lati}}]);
        myMap.geoObjects.add(myPlacemark);
        getAddress(myPlacemark.geometry.getCoordinates());
        // Слушаем событие окончания перетаскивания на метке.


        // Слушаем клик на карте.
        myMap.events.add('click', function (e) {
            var coords = e.get('coords');

            // Если метка уже создана – просто передвигаем ее.
            if (myPlacemark) {
                myPlacemark.geometry.setCoordinates(coords);
            }
            // Если нет – создаем.
            else {
                myPlacemark = createPlacemark(coords);
                myMap.geoObjects.add(myPlacemark);
                // Слушаем событие окончания перетаскивания на метке.
                myPlacemark.events.add('dragend', function () {
                    getAddress(myPlacemark.geometry.getCoordinates());
                });
            }
            console.log(coords);
            $('#longitude').val(coords[0]);
            $('#latitude').val(coords[1]);
            getAddress(coords);
        });

        // Создание метки.
        function createPlacemark(coords) {
            return new ymaps.Placemark(coords, {
                iconCaption: 'поиск...'
            }, {
                preset: 'islands#violetDotIconWithCaption',
                draggable: true
            });
        }

        // Определяем адрес по координатам (обратное геокодирование).
        function getAddress(coords) {
            myPlacemark.properties.set('iconCaption', 'поиск...');
            ymaps.geocode(coords).then(function (res) {
                var firstGeoObject = res.geoObjects.get(0);

                myPlacemark.properties
                    .set({
                        // Формируем строку с данными об объекте.
                        iconCaption: [
                            // Название населенного пункта или вышестоящее административно-территориальное образование.
                            firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                            // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                            firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                        ].filter(Boolean).join(', '),
                        // В качестве контента балуна задаем строку с адресом объекта.
                        balloonContent: firstGeoObject.getAddressLine()
                    });
            });
        }
    }
</script>
