@extends('layouts.app')

@section('content')

    <div class="col-md-8">
        <h1>Войти</h1>
    </div>

    @include('partials.errors')

    <form action="/login" method="POST">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" placeholder="" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Готово</button>
        </div>

    </form>

@endsection