@extends('layouts.app')
@section('register')
    <link href="{{ asset('css/add_product.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container" style="color: white">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <h3>
                        Введите информацию о товарах
                    </h3>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Весовая вместимость</th>
                        <th>Объем</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>footer 1</th>
                        <th>footer 2</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>22</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
