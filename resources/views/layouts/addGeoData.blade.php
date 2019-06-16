@extends('layouts.app')
@section('register')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=<6a6400bc-36b9-488e-96cd-c1c3656ff5d6>&lang=ru_RU"
            type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);

        function init() {
            var myPlacemark,
                myMap = new ymaps.Map('map', {
                    center: [55.753994, 37.622093],
                    zoom: 9,
                }, {
                    searchControlProvider: 'yandex#search'
                });

            @if(isset($coordinats))

                myPlacemark = createPlacemark([{{$coordinats['longitude']}},{{$coordinats['latitude']}}]);
            myMap.geoObjects.add(myPlacemark);
            // Слушаем событие окончания перетаскивания на метке.
            myPlacemark.events.add('dragend', function () {
                getAddress(myPlacemark.geometry.getCoordinates());
            });

            $(() => {
                $('#longitude').val({{$coordinats['longitude']}});
                $('#latitude').val({{$coordinats['latitude']}});
            });

            @endif

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
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div id="map" style="width: 100%; height: 300px">
                    </div>

                    <form id="form"

                          @yield('formConfig')

                          class="m-3">
                        @csrf


                        @yield('inputs')


                        <input type="hidden" id="longitude" class="form-control"
                               name="longitude">
                        <input type="hidden" id="latitude" class="form-control"
                               name="latitude">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <p id="danger" class="badge badge-pill badge-danger" style="display: none">Выберите
                                    место расположение на карте.</p>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ввод') }}
                                </button>

                                <script>
                                    $(() => {
                                        $('#form').submit(function (event) {
                                            value = $('#longitude').val();
                                            if (value == '') {
                                                $('#danger').css({'display': 'block'});
                                                event.preventDefault();
                                            }
                                        })
                                    });
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection
