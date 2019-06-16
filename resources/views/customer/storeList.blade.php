@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Магазины</h2>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Улица</th>
                    <th scope="col"><a class="btn btn-primary"
                                       href="{{route('customer.addMarket',['id'=>$shop->id])}}">Добавить</a>
                    </th>

                </tr>
                </thead>
                <tbody>

                <?php $counter = 0; ?>
                @foreach($shops as $shop)
                    <tr>
                        <th>{{++$counter}}</th>
                        <td>{{$shop->name}}</td>
                        <td>Адрес</td>
                        <td><a class="btn btn-primary"
                               href="{{route('customer.updateMarket',['id'=>$shop->id])}}">Редактировать</a>
                            <a class="btn btn-danger"
                               href="{{route('customer.addMarket',['id'=>$shop->id])}}">Удалить</a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>

    </div>


@endsection
