@extends('layouts.app')
@section('register')
    <link href="{{ asset('css/delivery_orders.css') }}" rel="stylesheet">
@endsection
@section('content')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=<6a6400bc-36b9-488e-96cd-c1c3656ff5d6>&lang=ru_RU"
            type="text/javascript"></script>

    <div id="app">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <div id="map" style="position: fixed; width: 100%; height:100%;"></div>
        <div class="card" style="position: fixed; box-shadow: 0 1px 2px 1px rgba(0,0,0,.15), 0 2px 5px -3px rgba(0,0,0,.15);
    width: 300px;height: 100px; right: 10px;top: 100px">
            @{{ message }}
        </div>

    </div>
    <script>
        var stores = [

            [44.56475991350058, 33.57099426037401],
            [44.557887192142616, 33.460787656370115],
            [44.57114099428116, 33.586787107053745],
            [44.598988612228595, 33.5624111915264],
            [44.551919756012055, 33.52104079968065]
        ];

        ymaps.ready(() => {
            for (i = 0; i < stores.length; i++) {
                myPlacemark = createPlacemarkk(stores[i]);
                getAddressss(myPlacemark.geometry.getCoordinates(), myPlacemark, i);

            }

            // Создание метки.
            function createPlacemarkk(coords) {
                return new ymaps.Placemark(coords, {
                    iconCaption: 'поиск...'
                }, {
                    preset: 'islands#violetDotIconWithCaption',
                    draggable: true
                });
            }

            function getAddressss(coords, placemark, i) {
                address = '';
                placemark.properties.set('iconCaption', 'поиск...');
                ymaps.geocode(coords).then(function (res) {
                    var firstGeoObject = res.geoObjects.get(0);
                    address = [
                        // Название населенного пункта или вышестоящее административно-территориальное образование.
                        firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                        // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                        firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                    ].filter(Boolean).join(', ');
                    placemark.properties
                        .set({
                            // Формируем строку с данными об объекте.
                            iconCaption: address,
                            // В качестве контента балуна задаем строку с адресом объекта.
                            balloonContent: firstGeoObject.getAddressLine()
                        });
                    stores[i].push(address)
                });
                return address;
            }

            init();
        });


        var app = new Vue({
            el: '#app',
            data: {
                message: 'Привет, Vue!'
            }
        })
    </script>
@endsection


<script type="text/javascript">

    function init() {
        var myPlacemark,
            myMap = new ymaps.Map('map', {
                center: [stores[0][0], stores[0][1]],
                zoom: 12,
            }, {
                searchControlProvider: 'yandex#search'
            });

        for (i = 0; i < stores.length; i++) {
            myPlacemark = createPlacemark(stores[i]);
            myMap.geoObjects.add(myPlacemark);
            console.log(getAddress(myPlacemark.geometry.getCoordinates(), myPlacemark));

        }

        // Создание метки.
        function createPlacemark(coords) {
            return new ymaps.Placemark(coords, {
                iconCaption: 'поиск...'
            }, {
                preset: 'islands#violetDotIconWithCaption',
                draggable: true
            });
        }

        /*
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
        */

        // Определяем адрес по координатам (обратное геокодирование).
        function getAddress(coords, placemark) {
            address = '';
            placemark.properties.set('iconCaption', 'поиск...');
            ymaps.geocode(coords).then(function (res) {
                var firstGeoObject = res.geoObjects.get(0);
                address = [
                    // Название населенного пункта или вышестоящее административно-территориальное образование.
                    firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                    // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                    firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                ].filter(Boolean).join(', ');
                placemark.properties
                    .set({
                        // Формируем строку с данными об объекте.
                        iconCaption: address,
                        // В качестве контента балуна задаем строку с адресом объекта.
                        balloonContent: firstGeoObject.getAddressLine()
                    });
            });
            return address;
        }
    }
</script>