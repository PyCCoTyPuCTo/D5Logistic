@extends('layouts.app')
@section('register')
    <!--<link href="{{ asset('css/add_product.css') }}" rel="stylesheet">-->
@endsection
@section('content')
    <div class="container table-hover" style="">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="m-3">
                    <?php $pruducts = [['name' => 'Jacobs', 'category' => 'Кофе', 'store' => '1', 'count' => 100],
                        ['name' => 'Вафли "креатив"', 'category' => 'Сладости', 'store' => '1', 'count' => 200]]?>
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Наименование</th>
                            <th>Категория</th>
                            <th>Место</th>
                            <th>Количество</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 0;?>
                        @foreach($pruducts as $pruduct)
                            <tr>
                                <td>{{++$counter}}</td>
                                <td>{{$pruduct['name']}}</td>
                                <td>{{$pruduct['category']}}</td>
                                <td>{{$pruduct['store']}}</td>
                                <td>{{$pruduct['count']}}</td>
                                <td><a class="btn btn-primary" href="">Редактировать</a><a class="btn btn-danger"
                                                                                           href="">Удалить</a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>


                <div class="row justify-content-center">
                    <h3>
                        Введите информацию о товарах
                    </h3>
                </div>
                <form method="post" action="{{ route('upload_file') }}" enctype="multipart/form-data">
                    <div class="form-row justify-content-center block">
                        <div class="form-group col-md-6">
                            <label for="name">Введите название</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mass">Масса товара</label>
                            <input type="number" class="form-control" id="mass">
                        </div>
                    </div>
                    <div class="form-row justify-content-center block">
                        <div class="form-group col-md-5">
                            <label for="category_id">Категория товара</label>
                            <select id="category_id" class="form-control" name="subcategory_id">
                                <option selected>Напитки</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="subcategory_id">Под-категория товара</label>
                            <select id="subcategory_id" class="form-control" name="subcategory_id">
                                <option selected>Кофе</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row justify-content-center block">
                        <div class="form-group col-md-10">
                            <label for="category_id">Склад</label>
                            <select id="category_id" class="form-control" name="subcategory_id">
                                <option selected>#1</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row justify-content-center block">
                        <div class="form-group col-md-10">
                            <br>
                            <button type="submit" class="btn btn-primary float-right">Создать</button>
                        </div>
                        <div class="form-group col-md-3">
                            <br>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
