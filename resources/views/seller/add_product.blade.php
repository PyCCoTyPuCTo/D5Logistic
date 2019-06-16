@extends('layouts.app')
@section('register')

@endsection
@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <h3>
                        Введите информацию о товарах
                    </h3>
                </div>
                <form method="post" action="{{ route('upload_file') }}" enctype="multipart/form-data">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-5">
                            <label for="name">Введите название</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="mass">масса товара</label>
                            <input type="number" class="form-control" id="mass">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-4">
                            <label for="category_id">Категория товара</label>
                            <select id="category_id" class="form-control" name="subcategory_id">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="subcategory_id">Под-категория товара</label>
                            <select id="subcategory_id" class="form-control" name="subcategory_id">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-6">
                            <br>
                            <input type="file" multiple name="file[]" class="btn btn-primary">
                        </div>
                        <div class="form-group col-md-3">
                            <br>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
