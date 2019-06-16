@extends('layouts.app')
@section('register')

@endsection
@section('content')
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <h3>
                        Информация о транспорте
                    </h3>
                </div>
                <div>
                    <table class="table">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>номер</th>
                            <th>Весовая вместимость</th>
                            <th>Объем</th>
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
                <form method="post">
                    @csrf
                    <div class="form-row justify-content-center">


                        <label for="tonnage" class="col-md-4 col-form-label text-md-right">{{ __('Tonnage') }}</label>

                        <div class="col-md-6">
                            <input id="tonnage" type="text" class="form-control @error('password') is-invalid @enderror" name="tonnage">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>


                        <div class="form-group col-md-5">
                            <label for="tonnage">{{ __('Tonnage') }}</label>
                            <input type="text" class="form-control" id="tonnage">
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
