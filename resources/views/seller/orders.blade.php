@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Заказы</h2>
            <?php
            $data = [['poc' => 'OOO Точка', 'tov' => 'Кофе', 'date' => '21.06.2019', 'ob' => '100', 'ok' => true],
                ['poc' => 'OOO Кочка', 'tov' => 'Чай', 'date' => '21.06.2019', 'ob' => '200', 'ok' => false],
                ['poc' => 'OOO Дочка', 'tov' => 'Кофе', 'date' => '22.06.2019', 'ob' => '300', 'ok' => true]];
            ?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Покупатель</th>
                    <th scope="col">Товар</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Объем</th>
                    <th scope="col">
                    </th>

                </tr>
                </thead>
                <tbody>

                <?php $counter = 0; ?>
                @foreach($data as $item)
                    <tr>
                        <th>{{++$counter}}</th>
                        <td>{{$item['poc']}}</td>
                        <td>{{$item['tov']}}</td>
                        <td>{{$item['date']}}</td>
                        <td>{{$item['ob']}}</td>
                        <td>
                            @if($item['ok'])
                                <a class="btn btn-success"
                                   href="#">Подтверждено</a>
                            @else
                                <a class="btn btn-danger"
                                   href="#">Опровержено</a>
                            @endif

                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>

    </div>


@endsection
