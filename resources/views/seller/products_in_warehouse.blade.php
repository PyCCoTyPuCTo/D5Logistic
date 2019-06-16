@extends('layouts.app')
@section('register')

@endsection
@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col">
                <div class="row justify-content-center">
                    <h3 style="margin-bottom: 5%">
                        Укажите для добавленных товаров склады на которых они хранятся
                    </h3>
                </div>
                <div>
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>номер</th>
                            <th>Название товара</th>
                            <th>Масса</th>
                            <th>Категория</th>
                            <th>Подкатегория</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-10">
                    <label for="">{{ __('') }}</label>
                    <div class="dropdown open">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            выберите склад
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                        <div class="form-group col-md-3">
                            <br>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
