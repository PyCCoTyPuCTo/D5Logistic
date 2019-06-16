@extends('layouts.app')
@section('register')

@endsection
@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col">
                <div class="row justify-content-center">
                    <h3 style="margin-bottom: 5%">
                        Подтвердите или отклоните заявки на поставки вашей продукции
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
                            <th>Цена</th>
                            <th>Название магазина</th>
                            <th>Решение</th>
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
            </div>
        </div>
    </div>
@endsection
