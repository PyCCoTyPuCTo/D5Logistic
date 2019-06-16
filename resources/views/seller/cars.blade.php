@extends('layouts.app')
@section('register')

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <h3>
                        Информация о транспорте:
                    </h3>
                </div>
                <div>
                    @foreach($storages as $storage)
                        <?php
                        $cars = \App\Vehicle::all()->where('storage_id', '=', $storage->id)
                        ?>
                        <h2>Адрес: <i></i></h2>
                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Наименование</th>
                                <th>Весовая вместимость</th>
                                <th>Объем</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $counter = 0; ?>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{++$counter}}</td>
                                    <td>{{$car->name}}</td>
                                    <td>{{$car->tonnage}}</td>
                                    <td><a class="btn btn-primary" href="">Редактировать</a><a class="btn btn-danger"
                                                                                               href="">Удалить</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <form method="post">
                            @csrf
                            <div class="form-row justify-content-center">


                                <div class="col-6">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="tonnage">{{ __('Грузоподъемность') }}</label>
                                            <input type="text" class="form-control" id="tonnage">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="tonnage">{{ __('Наимнование') }}</label>
                                            <input type="text" class="form-control" id="tonnage">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary">Ввод</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="tonnage">{{ __('Объем') }}</label>
                                            <input type="text" class="form-control" id="tonnage">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" class="form-control" id="storage_id" value="">
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
