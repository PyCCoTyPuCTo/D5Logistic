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
                <?php
                $storages = [[
                    'name' => '1',
                    'cars' => [
                        ['name' => 'Reno C432HK', 'ves' => 1000, 'ob' => 500],
                        ['name' => 'Reno C412ЕK', 'ves' => 500, 'ob' => 200]]], [
                    'name' => '2',
                    'cars' => [
                        ['name' => 'Reno C432HK', 'ves' => 1000, 'ob' => 500],
                    ]]];

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
                                <th>Грузоподъёмность</th>
                                <th>Объем</th>
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
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="tonnage">{{ __('Объем') }}</label>
                                            <input type="text" class="form-control" id="tonnage">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary float-right mb-3">Ввод</button>
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
