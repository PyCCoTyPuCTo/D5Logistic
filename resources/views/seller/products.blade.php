@extends('layouts.app')
@section('register')

@endsection
@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <h3>
                        Добавляйте информацию о товарах
                    </h3>
                </div>
                <div>
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>номер</th>
                            <th>Категория</th>
                            <th>Подкатегория</th>
                            <th>Масса</th>
                            <th>фото</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                        </tr>



                        <?php $counter = 0; ?>
                        @foreach($warehouses as $warehouse)
                            <tr>
                                <th>{{++$counter}}</th>
                                <td>Арес</td>
                                <td><a class="btn btn-primary"
                                       href="{{route('customer.updateWarehouse',['id'=>$warehouse->id])}}">Редактировать</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-group col-md-3">
                        <br>
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </div>
                    <div class="form-group col-md-3">
                        <br>
                        <button type="submit" class="btn btn-primary">Удалить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
