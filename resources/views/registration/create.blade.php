@extends('layouts.app')

@section('content')

    <div class="col-sm-8">
        <h1>Регистрация</h1>
    </div>
    <hr>
    <form method="POST" action="/register">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" placeholder="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" placeholder="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Повторите пароль:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Готово</button>
        </div>
        @include('partials.errors')
    </form>


@endsection