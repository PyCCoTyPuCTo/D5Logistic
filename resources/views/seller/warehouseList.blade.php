@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Магазины</h2>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Улица</th>
                    <th scope="col"><a class="btn btn-primary" href="{{route('customer.addWarehouse')}}">Добавить</a></th>

                </tr>
                </thead>
                <tbody>

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

    </div>


@endsection
